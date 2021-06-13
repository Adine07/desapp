@extends('layout.app')

@section('addon_style')
    <link rel="stylesheet" href="mazer/dist/assets/vendors/simple-datatables/style.css">
@endsection

@section('content_heading')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Create Users</h3>
                <p class="text-subtitle text-muted">Create a new user to system</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/users">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="row">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>New User</h4>
                    </div>
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                    <ul>
                                            @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                            @endforeach
                                    </ul>
                            </div>
                    @endif
                    <div class="card-body">
                        <form class="form form-vertical" action="/users" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Full Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" required name="name"
                                                    placeholder="Input with icon left"
                                                    id="first-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Email</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" required name="email"
                                                    placeholder="Email" id="email-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Password</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control" required name="password"
                                                    placeholder="Password" id="password-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Retype password</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control" required name="password_confirmation"
                                                    placeholder="Password" id="password-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Upload image profile</label>
                                        <input class="form-control" type="file" id="formFile" name="image_file">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check d-inline-block">
                                            <input class="form-check-input" type="radio" name="role" value="admin"
                                                id="admin">
                                            <label class="form-check-label" for="admin">
                                                Admin
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block">
                                            <input class="form-check-input" type="radio" name="role" value="super admin"
                                                id="super">
                                            <label class="form-check-label" for="super">
                                                Super Admin
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('addon_script')
    <script src="mazer/dist/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endsection