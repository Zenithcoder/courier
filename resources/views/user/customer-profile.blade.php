@extends('layouts.frontend')

@section('title')
   User Profile
@endsection

@section('content')

    <!-- Content Wrapper -->
    <article>
        <!-- Breadcrumb -->
        <section class="theme-breadcrumb pad-50">
            <div class="theme-container container ">
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="title-wrap">
                            <h2 class="section-title no-margin"> Your Profile </h2>
                            <p class="fs-16 no-margin">Welcome {{auth::user()->name}} </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <ol class="breadcrumb-menubar list-inline">
                            <li><a href="#" class="gray-clr">Home</a></li>
                            <li class="active">profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Breadcrumb -->

        <!-- Contact Us -->
        <section class="contact-page pad-30">
            <div class="theme-container container">
                <div class="row">


                    <div class="col-md-12 col-sm-12">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-12 col-sm-12 ">


                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{auth::user()->name}}</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">

                                                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="/homecss/img/block/profile-img.png" class="img-circle img-responsive"> </div>


                                                <div class=" col-md-9 col-lg-9 ">
                                                    <table class="table table-user-information">
                                                        <tbody>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>{{$customer->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email Address</td>
                                                            <td>{{$customer->email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phone Number</td>
                                                            <td>{{$customer->phone_number}}</td>
                                                        </tr>

                                                        <tr>
                                                        <tr>
                                                            <td>Address </td>
                                                            <td>{{$customer->address}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>LGA</td>
                                                            <td>{{$customer->lga_id}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Account Created on</td>
                                                            <td>{{$customer->created_at}}</td>
                                                        </tr>


                                                        </tr>

                                                        </tbody>
                                                    </table>

                                                    <a href="{{route('users.customers.edit')}}" class="btn btn-sm btn-warning">Edit Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="{{route ('customers.orders.create')}}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">Track Shipments</a>
                                            <span class="pull-right">
                            <a href="{{route ('customers.orders.create')}}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit">Request Pickup</i></a>
                        </span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Contact Us -->

        <!-- Contact Map -->
        <section class="map">
            <div class="theme-container container">
                <div class="contact-map">
                    <img src="assets/img/background/contact-map.png" alt="" />
                    <div class="map-indicator">
                        <img class="marker-1 wow fadeIn" data-wow-offset="50" data-wow-delay=".30s" alt="" src="assets/img/icons/marker-1.png" />
                        <img class="marker-2 wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" alt="" src="assets/img/icons/marker-1.png" />
                        <img class="marker-3 wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s" alt="" src="assets/img/icons/marker-1.png" />
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Contact Map -->

    </article>
    <!-- /.Content Wrapper -->
@endsection
