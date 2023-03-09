@extends('admin.layout.master')
@section('content')
<div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
        <li>
            <a href="{{url('admin/dashboard')}}">Home</a>
        </li>
        <li>Student Details</li>
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
                <img src="{{asset('uplodes/'.$data->image)}}" alt="student">
            </div>
            
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium">{{$data->name}}</h3>
                    <div class="header-elements">
                        <ul>
                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                            <li><a href="#"><i class="fa fa-print"></i></a></li>
                            <li><a href="#"><i class="fa fa-download"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="info-table table-responsive">
                    <table class="table text-nowrap">
                        <tbody>
                            <tr>
                                <td>Name:</td>
                                <td class="font-medium text-dark-medium">Jessia Rose</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td class="font-medium text-dark-medium">Female</td>
                            </tr>
                            <tr>
                                <td>Father Name:</td>
                                <td class="font-medium text-dark-medium">Steve Jones</td>
                            </tr>
                            <tr>
                                <td>Mother Name:</td>
                                <td class="font-medium text-dark-medium">Naomi Rose</td>
                            </tr>
                            <tr>
                                <td>Date Of Birth:</td>
                                <td class="font-medium text-dark-medium">07.08.2016</td>
                            </tr>
                            <tr>
                                <td>Religion:</td>
                                <td class="font-medium text-dark-medium">Islam</td>
                            </tr>
                            <tr>
                                <td>Father Occupation:</td>
                                <td class="font-medium text-dark-medium">Graphic Designer</td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td class="font-medium text-dark-medium">jessiarose@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Admission Date:</td>
                                <td class="font-medium text-dark-medium">07.08.2019</td>
                            </tr>
                            <tr>
                                <td>Class:</td>
                                <td class="font-medium text-dark-medium">2</td>
                            </tr>
                            <tr>
                                <td>Section:</td>
                                <td class="font-medium text-dark-medium">Pink</td>
                            </tr>
                            <tr>
                                <td>Roll:</td>
                                <td class="font-medium text-dark-medium">10005</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td class="font-medium text-dark-medium">House #10, Road #6, Australia</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td class="font-medium text-dark-medium">+ 88 98568888418</td>
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