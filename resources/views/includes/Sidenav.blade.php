<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Home</div>
                <a class="nav-link" href="{{route('home')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                    Home
                </a>
                <div class="sb-sidenav-menu-heading"> Interface </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-columns"></i>
                    </div>
                    Products
                    <div class="sb-sidenav-collapse-arrow"> <i class="fas fa-angle-down"> </i> </div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('Products')}}"> Products </a>
                        <a class="nav-link" href="{{route('Games')}}"> Games</a>
                    </nav>
                </div>

                

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-book-open"> </i>
                    </div>
                    Developer tools
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>

              
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth"
                            aria-expanded="false" aria-controls="pagesCollapseAuth">Upload
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('GamesAdd')}}">Add Game</a>
                                <a class="nav-link" href="#">Link</a>
                                <a class="nav-link" href="#"> Link</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError"
                            aria-expanded="false" aria-controls="pagesCollapseError">sub menu 2
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Link </a>
                                <a class="nav-link" href="#"> Link</a>
                                <a class="nav-link" href="#">Link</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">foter links</div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Link
                </a><a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Link
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            @yield('user_loged')
        </div>
    </nav>
</div>