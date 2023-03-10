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
            <div class="item-img mt-5">
                <img width="100px" class="mt-5" src="{{asset('uplodes/'.$data->image)}}" alt="student">
            </div>

            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium">{{$data->name}}</h3>
                    <div class="header-elements">
                        <ul>
                            <li><a href="#"><i class="fa fa-download"></i></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="info-table table-responsive">
                            <table class="table text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Name:</td>
                                        <td class="font-medium text-dark-medium">{{$data->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>E-mail:</td>
                                        <td class="font-medium text-dark-medium">{{$data->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone:</td>
                                        <td class="font-medium text-dark-medium">{{$data->phone_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Date Of Birth:</td>
                                        <td class="font-medium text-dark-medium">{{$data->dob}}</td>
                                    </tr>

                                    <tr>
                                        <td>Admission Date:</td>
                                        <td class="font-medium text-dark-medium">{{$data->joining_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Course:</td>
                                        <td class="font-medium text-dark-medium">{{$data->course}}</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-table table-responsive">
                            <table class="table text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Qualification:</td>
                                        <td class="font-medium text-dark-medium">{{$data->qualification}}</td>
                                    </tr>
                                    <tr>
                                        <td>Aadhar Number:</td>
                                        <td class="font-medium text-dark-medium">{{$data->aadhar_number}}</td>
                                    </tr>

                                    <tr>
                                        <td>Father Name:</td>
                                        <td class="font-medium text-dark-medium">{{$data->father_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Father Number:</td>
                                        <td class="font-medium text-dark-medium">{{$data->father_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Current Address:</td>
                                        <td class="font-medium text-dark-medium">{{$data->current_address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Parmanent Address:</td>
                                        <td class="font-medium text-dark-medium">{{$data->permanent_address}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <img width="100%" src="{{asset('uplodes/'.$data->aadhar_img)}}" alt="" srcset="">
                    </div>
                    <div class="col-lg-2">
                        <img width="100%" src="{{asset('uplodes/'.$data->aadhar_back_img)}}" alt="" srcset="">
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>