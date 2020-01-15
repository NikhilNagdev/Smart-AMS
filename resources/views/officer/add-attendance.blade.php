@extends('layout.layout')
@section('title','Login')

@section('sidebarOptions')
    <ul class="nav">
        <li class="nav-item active">
            <a href="index.html">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
            <h4 class="text-section">Components</h4>
        </li>

        <li class="nav-item">
            <a data-toggle="collapse" href="#base">
                <i class="fas fa-layer-group"></i>
                <p>Attendance</p>
                <span class="caret"></span>
            </a>
            <div class="collapse" id="base">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="components/avatars.html">
                            <span class="sub-item">Add Attendance</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    @endsection

@section('main-panel')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Add Attendance</h4>

                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Attendance</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Add Attendance</a>
                        </li>
                    </ul>

                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="font-weight-bold">Please Select Your Center</label>
                                        <select name="center" id="" class="form-control">
                                            <option value="">Center 1</option>
                                            <option value="">Center 2</option>
                                            <option value="">Center 3</option>
                                            <option value="">Center 4</option>
                                            <option value="">Center 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Please Record Your Voice By Clicking Button</label>
                                        <button class="fa fa-microphone form-control"></button>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Please Add Your Location For Verification</label>
                                        <button class="fa fa-location-arrow form-control"></button>
                                    </div>

                                    <div class="card-action">
                                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
