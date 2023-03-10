@extends('admin.layout.master')
@section('content')
<div class="breadcrumbs-area">
    <h3>Parents</h3>
    <ul>
        <li>
            <a href="{{url('admin/dashboard')}}">Home</a>
        </li>
        <li>Parents Details</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Details Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>About Me</h3>
            </div>
        </div>
        <div class="single-info-details">
        <div class="item-img">
                <img src="{{asset('uplodes/'.$Parents->image)}}" width="100px" alt="student">
            </div>
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium">{{$Parents->name}}</h3>
                    <!-- <div class="header-elements">
                        <ul>
                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                            <li><a href="#"><i class="fa fa-print"></i></a></li>
                            <li><a href="#"><i class="fa fa-download"></i></a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="info-table table-responsive">
                    <table class="table text-nowrap">
                        <tbody>
                            <tr>
                                <td>Name:</td>
                                <td class="font-medium text-dark-medium">{{$Parents->name}}</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td class="font-medium text-dark-medium">{{$Parents->gender}}</td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td class="font-medium text-dark-medium">{{$Parents->email}}</td>
                            </tr>
                           
                            
                            <tr>
                                <td>Occupation:</td>
                                <td class="font-medium text-dark-medium">{{$Parents->occupation}}</td>
                            </tr>
                            
                            <tr>
                                <td>Address:</td>
                                <td class="font-medium text-dark-medium">{{$Parents->address}}</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td class="font-medium text-dark-medium">{{$Parents->phone}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>