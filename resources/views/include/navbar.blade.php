<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#"><img height="25%" width="25%" src="{{ asset('images/CardeaLogoSmall.png') }}" alt="Cardea Logo" /></a>
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
                            <li><a data-toggle="collapse" data-target="#" href="#">Daily Activities</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('daily-activities.create') }}"> Add Activity</a></li>
                                    <li><a href="{{ route('daily-activities.index') }}">View Activities</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#" href="#">Reports</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="#">View Reports</a></li>
                                    <li><a href="#">Weekly Trends</a></li>
                                </ul>
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
                    <li class="active"><a  href="{{ route('home') }}"><i class="notika-icon notika-house"></i> Home</a>
                    </li>
                    <li><a data-toggle="tab" href="#daily-activities"><i class="notika-icon notika-form"></i> Daily Activities</a>
                    </li>
                    <li><a data-toggle="tab" href="#reports"><i class="notika-icon notika-bar-chart"></i> Reports</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="daily-activities" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ route('daily-activities.create') }}">Add Activity</a>
                            </li>
                            <li><a href="{{ route('daily-activities.index') }}">View Activities</a>
                            </li>
                        </ul>
                    </div>
                    <div id="reports" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="#">View Reports</a>
                            </li>
                            <li><a href="#">Weekly Trends</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
