<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
            {{-- <img class="logo_img" src="images/favicon.ico" width="55" alt=""> --}}
        </div>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li> --}}

    <!-- Divider -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    {{-- @if (Auth::user()->type == 'admin') --}}

    <li class="nav-item active">
        <a class="nav-link" href="/backoffice/banner">
            <i class="fa fa-image"></i>
            <span>Banner</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/backoffice/iconban">
            <i class="fa fa-image"></i>
            <span>Brand slide</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/backoffice/news">
            <i class="fa fa-image"></i>
            <span>News</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/backoffice/innovation">
            <i class="fa fa-image"></i>
            <span>Innovation</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Product</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/backoffice/brand">Manage Brands</a>

                {{-- <h6 class="collapse-header"></h6>
                <a class="collapse-item" href="/backoffice/catagory">Catagory</a>
                <a class="collapse-item" href="/backoffice/subcatagory">Subcategory</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Product</h6>
                <a class="collapse-item" href="/backoffice/product type">Product Type</a>
                <a class="collapse-item" href="/backoffice/product">Product</a> --}}
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSolution"
            aria-expanded="true" aria-controls="collapseSolution">
            <i class="fas fa-fw fa-folder"></i>
            <span>Solution</span>
        </a>
        <div id="collapseSolution" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Catagory</h6>
                <a class="collapse-item" href="/backoffice/solutiontype">Solution Type</a>
                <a class="collapse-item" href="/backoffice/solution2">Solution 2</a>
                <a class="collapse-item" href="/backoffice/solution3">Solution 3</a>
                <a class="collapse-item" href="/backoffice/solution4">Solution 4</a>
                <a class="collapse-item" href="/backoffice/solution5">Solution 5</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbout"
            aria-expanded="true" aria-controls="collapseAbout">
            <i class="fas fa-fw fa-folder"></i>
            <span>About Us</span>
        </a>
        <div id="collapseAbout" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Catagory</h6>
                <a class="collapse-item" href="/backoffice/vision">Vision</a>
                <a class="collapse-item" href="/backoffice/meet_head">Meetteam Head</a>
                <a class="collapse-item" href="/backoffice/meet_body">Meetteam</a>
                <a class="collapse-item" href="/backoffice/partner">Partner</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWork"
            aria-expanded="true" aria-controls="collapseWork">
            <i class="fas fa-fw fa-folder"></i>
            <span>Work with us</span>
        </a>
        <div id="collapseWork" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">work</h6>
                <a class="collapse-item" href="/backoffice/work">Work</a>

            </div>
        </div>
    </li>


    {{-- @endif --}}
    {{-- <div class="sidebar-heading">
       Report
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> --}}

    <!-- Nav Item - Tables -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
