@extends('admin.layout.master')
@section('content')
<!-- <script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script> -->
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Notice</h3>
    <ul>
        <li>
            <a href="index.html">Home</a>
        </li>
        <li>Notice Form</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Admit Form Area Start Here -->
<div class="row">
    <!-- Add Notice Area Start Here -->
    <div class="col-4-xxxl col-12">
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Create A Notice</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <form class="new-added-form" method="post" id="infouserForm">
                    @csrf
                    <div class="row">
                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                            <label>Title</label>
                            <input type="text" placeholder="" name="title" class="form-control">
                        </div>
                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                            <label>Details</label>
                            <input type="text" placeholder="" name="details" class="form-control">
                        </div>
                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                            <label>Posted By </label>
                            <input type="text" placeholder="" name="posted_by" class="form-control">

                        </div>
                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                            <label>Date</label>
                            <input type="date" placeholder="" name="date" class="form-control air-datepicker">

                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add Notice Area End Here -->
    <!-- All Notice Area Start Here -->
    <div class="col-8-xxxl col-12">
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Notice Board</h3>
                    </div>

                </div>

                <!-- <form class="mg-b-20">
                    <div class="row gutters-8">
                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Date ..." class="form-control">
                                        </div>
                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Title ..." class="form-control">
                                        </div> 
                         <div class="col-lg-2 col-12 form-group">
                                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div> 
                    </div>
                </form> -->
                <div class="notice-board-wrap">
                @inject('commandata','App\Http\Controllers\MasterController')
                    @foreach($data as $item)
                    <div class="notice-list">
                        <div class="post-date bg-skyblue">{{$item->date}}</div>
                        <h3 class="notice-title"><a href="#">{{$item->title}}</a></h3>
                        <h6 class="notice-title"><a href="#">{{$item->details}}</a></h6>
                        <div class="entry-meta"> {{$item->posted_by}} / <span> {{$commandata::gettime($item->created_at)}} ago</span></div>
                        <div class="row">
                            <div class="col-10"></div>
                            <div class="col-2">
                                <button class="dropdown-item deletedata" data-id="{{$item->id}}"><i class="fa fa-times text-orange-red"></i>
                                    delete</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- All Notice Area End Here -->
</div>
<style>
    .error {
        color: red;
    }
</style>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {

        $('#infouserForm').validate({
            rules: {

                title: {
                    required: true,
                },

                details: {
                    required: true,
                },
                posted_by: {
                    required: true,
                },

                date: {
                    required: true,
                },

            },
            messages: {
                title: {
                    required: "Title is required!",
                },
                details: {
                    required: "Details is required!",
                },
                posted_by: {
                    required: " Posted By is required!",
                },

                date: {
                    required: "Date is required!",
                },
            },


        });
        $('.deletedata').click(function() {
            let url = "{{url('admin/notice')}}";
            let id = $(this).attr('data-id');
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                        setTimeout(() => {
                            window.location.href = url + "/delete/" + id;
                        }, 2000);
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        });
    })
</script>