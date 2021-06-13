<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->model = new User();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->model->all();

        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
            'image_file' => 'required',
        ]);

        $request = $this->uploadImage($request, $request->file('image_file'));
        $request->merge([
            'password' => Hash::make($request->password) 
        ]);

        $this->model->create($request->all());

        return redirect('/user')->with('status', 'User created success fully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "aa";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data = $this->model->find($id);
        // dd($data);
        return "aaa";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadImage($request, $file)
    {
        // $img = $request->file('photo');
        $img = $file;
        $newName = rand(1000,9999) . time() . '.' . $img->getClientOriginalExtension();

        $img->move('images/profile', $newName);

        $request->merge([
            'image' => $newName,
        ]);

        return $request;
    }

    public function removeFile($path,$img)
    {
        $fullPath = $path . '/' . $img;

        if ($img && file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
}
