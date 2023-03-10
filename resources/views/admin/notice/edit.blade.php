@extends('admin.layout.master')
@section('content')
<!-- <script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script> -->
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Parents</h3>
    <ul>
        <li>
            <a href="index.html">Home</a>
        </li>
        <li>Parents Form</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Admit Form Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Add Parents</h3>
            </div>
        </div>
        <form class="new-added-form" enctype="multipart/form-data" method="post" id="infouserForm">
            @csrf
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Title *</label>
                    <input type="text" name="title" placeholder="" class="form-control" value="{{$data->title}}">
                </div>

                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Details *</label>
                    <input type="text" name="details" placeholder="" class="form-control" value="{{$data->details}}">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Posted By *</label>
                    <input type="text" name="posted_by" placeholder="" class="form-control" value="{{$data->posted_by}}">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Date *</label>
                    <input type="date" name="date" placeholder="" class="form-control" value="{{$data->date}}">
                </div>
                <div class="col-12 form-group mg-t-8">
                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
<style>
    .error {
        color: red;
    }
</style>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
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
    })
</script>