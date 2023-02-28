<div class="container-scroller">

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">

        <ul class="nav">
            <li class="nav-item menu-items">
                <a class="nav-link" href="index.html">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('users') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Users</span>
                </a>
            </li>


            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Foods</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ url('addFood') }}">Add Food</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('allFood') }}">All Food List</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('xxx') }}"">
                    <span class=" menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                    </span>
                    <span class="menu-title">Chefs</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('view/reservation') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">Reservations</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- partial -->

    <!-- page-body-wrapper ends -->
</div>