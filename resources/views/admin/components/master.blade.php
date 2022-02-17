<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
        <meta name="author" content="AdminKit">
        <meta name="keywords"
            content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" href="/sources/img/icons/planet_clothes-removebg-preview.png" />

        <link rel="canonical" href="https://demo-basic.adminkit.io/" />

        <title>Planet Laundry - @yield('title')</title>

        <link href="/sources/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            @include('admin.components.sidebar')

            <div class="main">
                @include('admin.components.navbar')

                <main class="content" style="background-color: #9ac0ec">
                    @yield('content')
                </main>

                @include('admin.components.footer')
            </div>
        </div>

        <script src="/sources/js/app.js"></script>
    </body>

</html>