<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
           PerbaiQin
            </span>
            <span class="logo-lg">
                PerbaiQin
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
           PerbaiQin
            </span>
            <span class="logo-lg">
                PerbaiQin
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title">
                    <i class="fas fa-ellipsis-h"></i>
                    <span data-key="t-pages">Pages</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTables">
                        <i class="fas fa-tachometer-alt"></i>
                        <span data-key="t-tables">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.specialists.index')}}">
                        <i class="fas fa-user-md"></i>
                        <span data-key="t-tables">Specializations</span>
                    </a>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
