<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home</title>

    @include('includes.botsrap')

</head>

<body class="sb-sidenav-toggled">

    @yield('jsScript')

    <!-- nav -->
    @include('includes.navbar')

    <!-- sidenav -->
    <div id="layoutSidenav">
        @include('includes.Sidenav')

        <div id="layoutSidenav_content">
            <main>
                <!-- content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>

            <!-- footer -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        @yield('footer')
                    </div>
                </div>

            </footer>
        </div>
    </div>


    @include('includes.js')

</body>

</html>