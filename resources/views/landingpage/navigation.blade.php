<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
    <div class="container-fluid p-0">
        <!-- logo -->
        <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home')}}">Home
                        <span>/</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about')}}">About Us
                        <span>/</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact')}}">Contact
                        <span>/</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login')}}">Login</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#!" data-toggle="dropdown">Master Data <i
                            class="fa fa-angle-down"></i><span>/</span></a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Pegawai</a></li>
                        <li><a class="dropdown-item" href="">Divisi</a></li>
                        <li><a class="dropdown-item" href="">Jabatan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#!" data-toggle="dropdown">Admin <i
                            class="fa fa-angle-down"></i></a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Profile</a></li>
                        <li><a class="dropdown-item" href="">Kelola User</a></li>

                        <li><a class="dropdown-item" href="">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>