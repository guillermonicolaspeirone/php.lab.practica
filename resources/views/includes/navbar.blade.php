<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <p class="navbar-brand">My app <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle"
        href="#"><i class="fas fa-bars"></i></button></p>
        <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for... N/F" aria-label="Search"
                aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <form class="form" action="{{route('Settings')}}" method="get">
                    {{ csrf_field() }}
                    <button type="submit" name="submit" class="dropdown-item">
                        <i class="fas fa-wrench"></i>
                        Settings
                    </button>
                </form>
                <form class="form" action="" method="post">
                    {{ csrf_field() }}
                    <button type="submit" name="submit" class="dropdown-item">
                        <i></i>
                        Activity Log N/F
                    </button>
                </form>
                <div class="dropdown-divider"></div>
                <form class="form" action="{{route('logout')}}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" name="submit" class="dropdown-item">
                        <i class="fas fa-sign-out-alt"></i>
                        log out
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>