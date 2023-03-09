@extends('admin.layout.master')
@section('content')
<!-- <script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script> -->
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
        <li>
            <a href="index.html">Home</a>
        </li>
        <li>Student Admit Form</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Admit Form Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Add New Students</h3>
            </div>
        </div>
        <form class="new-added-form" enctype="multipart/form-data" method="post" id="infouserForm">
            @csrf
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Name *</label>
                    <input type="text" name="name" placeholder="" class="form-control">
                </div>

                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>E-Mail *</label>
                    <input type="email" name="email" placeholder="" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Phone *</label>
                    <input type="text" name="phone_number" placeholder="" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Date Of Birth *</label>
                    <input type="text" name="dob" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                        data-position='bottom right'>
                    <i class="fa fa-calendar-alt"></i>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Father Name*</label>
                    <input type="text" name="father_name" placeholder="" class="form-control">
                </div>

                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Father Number *</label>
                    <input type="text" name="father_number" placeholder="" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Qualification *</label>
                    <input type="text" name="qualification" placeholder="" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Joining Date *</label>
                    <input type="text" name="joining_date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                        data-position='bottom right'>
                    <i class="fa fa-calendar-alt"></i>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Course *</label>
                    <select name="course" id="" class="form-control">
                        <option selected="" disabled="">Select Course</option>
                        <option value="Website Designing">Website Designing</option>
                        <option value="Website Development">Website Development</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="UI/Ux Design">UI/UX Design</option>
                        <option value="SEO">SEO</option>
                        <option value="SMO">SMO</option>
                    </select>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Aadhar Card Number *</label>
                    <input type="text" name="aadhar_number" placeholder="" class="form-control">
                </div>

                <div class="col-lg-6 col-12 form-group">
                    <label>Current Address</label>
                    <textarea class="textarea form-control" name="current_address" id="form-message" cols="10"
                        rows="3"></textarea>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label>Permanent Address</label>
                    <textarea class="textarea form-control" name="permanent_address" id="form-message1" cols="10"
                        rows="3"></textarea>
                </div>
                <div class="col-lg-4 col-12 form-group mg-t-30">
                    <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="col-lg-4 col-12 form-group mg-t-30">
                    <label class="text-dark-medium">Upload Student Aadhar Front (150px X 150px)</label>
                    <input type="file" name="aadhar_img" class="form-control-file">
                </div>
                <div class="col-lg-4 col-12 form-group mg-t-30">
                    <label class="text-dark-medium">Upload Student Aadhar Back (150px X 150px)</label>
                    <input type="file" name="aadhar_back_img" class="form-control-file">
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

            name: {
                required: true,
            },

            image: {
                required: true,
            },
            phone_number: {
                required: true,
            },
            dob: {
                required: true,
            },
            email: {
                required: true,
            },
            father_name: {
                required: true,
            },
            father_number: {
                required: true,
            },
            course: {
                required: true,
            },
            qualification: {
                required: true,
            },
            aadhar_number: {
                required: true,
            },

            aadhar_img: {
                required: true,
            },
            aadhar_back_img: {
                required: true,
            },
            current_address: {
                required: true,
            },
            permanent_address: {
                required: true,
            },


        },
        messages: {
            name: {
                required: "Name is required!",
            },
            image: {
                required: "Image is required!",
            },
            phone_number: {
                required: " Phone Number is required!",
            },
            dob: {
                required: "DOB is required!",
            },
            email: {
                required: "Email is required!",
            },
            father_name: {
                required: "Father Name is required!",
            },
            father_number: {
                required: "Father Number is required!",
            },
            course: {
                required: "Course is required!",
            },
            qualification: {
                required: "Qualification is required!",
            },
            aadhar_number: {
                required: "Aadhar Number is required!",
            },
            aadhar_img: {
                required: "Aadhar  Image is required!",
            },
            aadhar_back_img: {
                required: "Aadhar Back Image is required!",
            },
            current_address: {
                required: "Current Address is required!",
            },
            permanent_address: {
                required: "permanent Address is required!",
            },
        },


    });
})
</script>