<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/home') }}">FAQ Dashboard</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="nav-item">
            <form id="logout-form" action="/logout" method="POST" hidden>
                @csrf
            </form>
            <a href="/logout"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                        class="nav-link text-danger">Logout
                        <i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                {{-- <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </li> --}}
                <li>
                    <a href="{{ url('/faq/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>

                <li>
                    <a href="{{ url('/faq/home/manage') }}"><i class="fa fa-dashboard"></i> Manage FAQs</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
