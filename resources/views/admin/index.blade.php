@extends('layout.layout')
@section('title','Login')

@section('sidebarOptions')
    <ul class="nav">
        <li class="nav-item active">
            <a href="index.html">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
                <span class="badge badge-count">5</span>
            </a>
        </li>
        <!-- <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
            <h4 class="text-section">Components</h4>
        </li>

        <li class="nav-item">
            <a data-toggle="collapse" href="#base">
                <i class="fas fa-layer-group"></i>
                <p>Users</p>
                <span class="caret"></span>
            </a>
            <div class="collapse" id="base">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="components/avatars.html">
                            <span class="sub-item">Avatars</span>
                        </a>
                    </li>
                    <li>
                        <a href="components/buttons.html">
                            <span class="sub-item">Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a href="components/gridsystem.html">
                            <span class="sub-item">Grid System</span>
                        </a>
                    </li>
                    <li>
                        <a href="components/panels.html">
                            <span class="sub-item">Panels</span>
                        </a>
                    </li>
                    <li>
                        <a href="components/notifications.html">
                            <span class="sub-item">Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a href="components/sweetalert.html">
                            <span class="sub-item">Sweet Alert</span>
                        </a>
                    </li>
                    <li>
                        <a href="components/font-awesome-icons.html">
                            <span class="sub-item">Font Awesome Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="components/flaticons.html">
                            <span class="sub-item">Flaticons</span>
                        </a>
                    </li>
                    <li>
                        <a href="components/typography.html">
                            <span class="sub-item">Typography</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a data-toggle="collapse" href="#forms">
                <i class="fas fa-pen-square"></i>
                <p>Centers</p>
                <span class="caret"></span>
            </a>
            <div class="collapse" id="forms">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="forms/forms.html">
                            <span class="sub-item">Basic Form</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a data-toggle="collapse" href="#tables">
                <i class="fas fa-table"></i>
                <p>Attendance</p>
                <span class="caret"></span>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="tables/tables.html">
                            <span class="sub-item">Basic Table</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables/datatables.html">
                            <span class="sub-item">Datatables</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        {{--<li class="nav-item">--}}
            {{--<a data-toggle="collapse" href="#maps">--}}
                {{--<i class="fas fa-map-marker-alt"></i>--}}
                {{--<p>Maps</p>--}}
                {{--<span class="caret"></span>--}}
            {{--</a>--}}
            {{--<div class="collapse" id="maps">--}}
                {{--<ul class="nav nav-collapse">--}}
                    {{--<li>--}}
                        {{--<a href="maps/googlemaps.html">--}}
                            {{--<span class="sub-item">Google Maps</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="maps/fullscreenmaps.html">--}}
                            {{--<span class="sub-item">Full Screen Maps</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="maps/jqvmap.html">--}}
                            {{--<span class="sub-item">JQVMap</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a data-toggle="collapse" href="#charts">--}}
                {{--<i class="far fa-chart-bar"></i>--}}
                {{--<p>Charts</p>--}}
                {{--<span class="caret"></span>--}}
            {{--</a>--}}
            {{--<div class="collapse" id="charts">--}}
                {{--<ul class="nav nav-collapse">--}}
                    {{--<li>--}}
                        {{--<a href="charts/charts.html">--}}
                            {{--<span class="sub-item">Chart Js</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="charts/sparkline.html">--}}
                            {{--<span class="sub-item">Sparkline</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</li>--}}

        {{--<li class="nav-item">--}}
            {{--<a href="widgets.html">--}}
                {{--<i class="fas fa-desktop"></i>--}}
                {{--<p>Widgets</p>--}}
                {{--<span class="badge badge-count badge-success">4</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a data-toggle="collapse" href="#custompages">--}}
                {{--<i class="fas fa-paint-roller"></i>--}}
                {{--<p>Custom Pages</p>--}}
                {{--<span class="caret"></span>--}}
            {{--</a>--}}
            {{--<div class="collapse" id="custompages">--}}
                {{--<ul class="nav nav-collapse">--}}
                    {{--<li>--}}
                        {{--<a href="login.html">--}}
                            {{--<span class="sub-item">Login & Register 1</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="login2.html">--}}
                            {{--<span class="sub-item">Login & Register 2</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="userprofile.html">--}}
                            {{--<span class="sub-item">User Profile</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="404.html">--}}
                            {{--<span class="sub-item">404</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a data-toggle="collapse" href="#submenu">--}}
                {{--<i class="fas fa-bars"></i>--}}
                {{--<p>Menu Levels</p>--}}
                {{--<span class="caret"></span>--}}
            {{--</a>--}}
            {{--<div class="collapse" id="submenu">--}}
                {{--<ul class="nav nav-collapse">--}}
                    {{--<li>--}}
                        {{--<a data-toggle="collapse" href="#subnav1">--}}
                            {{--<span class="sub-item">Level 1</span>--}}
                            {{--<span class="caret"></span>--}}
                        {{--</a>--}}
                        {{--<div class="collapse" id="subnav1">--}}
                            {{--<ul class="nav nav-collapse subnav">--}}
                                {{--<li>--}}
                                    {{--<a href="#">--}}
                                        {{--<span class="sub-item">Level 2</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">--}}
                                        {{--<span class="sub-item">Level 2</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a data-toggle="collapse" href="#subnav2">--}}
                            {{--<span class="sub-item">Level 1</span>--}}
                            {{--<span class="caret"></span>--}}
                        {{--</a>--}}
                        {{--<div class="collapse" id="subnav2">--}}
                            {{--<ul class="nav nav-collapse subnav">--}}
                                {{--<li>--}}
                                    {{--<a href="#">--}}
                                        {{--<span class="sub-item">Level 2</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">--}}
                            {{--<span class="sub-item">Level 1</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</li>--}} -->
    </ul>

@endsection

@section('main-panel')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body ">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Centres</p>
                                            <h4 class="card-title">623</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-success bubble-shadow-small">
                                            <i class="far fa-chart-bar"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Officers</p>
                                            <h4 class="card-title">5</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-success bubble-shadow-small">
                                            <i class="far fa-chart-bar"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Working Days</p>
                                            <h4 class="card-title">250</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row"><div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>

            </div>
        </div>

    </div>
@endsection
