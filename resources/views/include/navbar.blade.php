
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img class="img-fluid header-logo"  src="{{ asset('images/CardeaLogoSmall.png') }}"
                                         alt="Cardea Logo"/></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="margin-top: 1% !important; margin-left: 8%">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button style="background-color: transparent; border: none" role="button" class="nav-link btn btn-primary">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#" href="{{ route('home') }}">Home</a>
                            </li>
                            <li><a data-toggle="collapse" data-target="#" href="{{ route('daily-activities.create') }}">Add Activity</a>
                            </li>
                            <li><a data-toggle="collapse" data-target="#" href="{{ route('daily-activities.index') }}">View Activities</a>
                            </li>
                            <li><a data-toggle="collapse" data-target="#" href="{{ route('report.index') }}">Reports</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="{{ (Request::is('home') ? 'active' : '') }}"><a href="{{ route('home') }}"><i class="notika-icon notika-house"></i> Home</a>
                    </li>
                    <li class="{{ (Request::is('daily-activities/create') ? 'active' : '') }}"><a href="{{ route('daily-activities.create') }}"><i class="notika-icon notika-house"></i> Add Activity</a>
                    </li>
                    <li class="{{ (Request::is('daily-activities') ? 'active' : '') }}"><a href="{{ route('daily-activities.index') }}"><i class="notika-icon notika-house"></i> View Activities</a>
                    </li>
                    <li class="{{ (Request::is('report/index') ? 'active' : '') }}"><a href="{{ route('report.index') }}"><i class="notika-icon notika-house"></i> Reports</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
