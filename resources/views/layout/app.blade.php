<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    @include('layout.heading')
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('layout.sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                @yield('content_heading')
            </div>
            <div class="page-content">
                @yield('content')
            </div>

            @include('layout.footer')
        </div>
    </div>
    @include('layout.footering')
</body>

</html>