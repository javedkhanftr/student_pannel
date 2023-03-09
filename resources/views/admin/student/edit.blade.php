@extends('admin.layout.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
        <li>
            <a href="index.html">Home</a>
        </li>
        <li>Student Edit Form</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Admit Form Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Edit Students</h3>
            </div>
        </div>
        <form class="new-added-form" enctype="multipart/form-data" method="post" id="infouserForm">
            @csrf
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Name *</label>
                    <input type="text" name="name" placeholder="" class="form-control" value="{{$data->name}}">
                </div>

                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>E-Mail *</label>
                    <input type="email" name="email" placeholder="" class="form-control" value="{{$data->email}}">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Phone *</label>
                    <input type="text" name="phone_number" value="{{$data->phone_number}}" placeholder=""
                        class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Date Of Birth *</label>
                    <input type="text" name="dob" value="{{$data->dob}}" placeholder="dd/mm/yyyy"
                        class="form-control air-datepicker" data-position='bottom right'>
                    <i class="fa fa-calendar-alt"></i>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Father Name*</label>
                    <input type="text" name="father_name" value="{{$data->father_name}}" placeholder=""
                        class="form-control">
                </div>

                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Father Number *</label>
                    <input type="text" name="father_number" value="{{$data->father_number}}" placeholder=""
                        class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Qualification *</label>
                    <input type="text" name="qualification" value="{{$data->qualification}}" placeholder=""
                        class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Joining Date *</label>
                    <input type="text" name="joining_date" value="{{$data->joining_date}}" placeholder="dd/mm/yyyy"
                        class="form-control air-datepicker" data-position='bottom right'>
                    <i class="fa fa-calendar-alt"></i>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Course *</label>
                    <select name="course" id="" class="form-control">
                        <option value="Website Designing"
                            <?php echo $data->course=='"Website Designing'?'selected':''?>>Website Designing</option>
                        <option value="Website Development"
                            <?php echo $data->course=='Website Development'?'selected':''?>>Website Development</option>
                        <option value="Digital Marketing" <?php echo $data->course=='Digital Marketing'?'selected':''?>>
                            Digital Marketing</option>
                        <option value="Graphic Design" <?php echo $data->course=='Graphic Design'?'selected':''?>>
                            Graphic Design</option>
                        <option value="UI/Ux Design" <?php echo $data->course=='UI/Ux Design'?'selected':''?>>UI/UX
                            Design</option>
                        <option value="SEO" <?php echo $data->course=='SEO'?'selected':''?>>SEO</option>
                        <option value="SMO" <?php echo $data->course=='SMO'?'selected':''?>>SMO</option>
                    </select>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Aadhar Card Number *</label>
                    <input type="text" name="aadhar_number" value="{{$data->aadhar_number}}" placeholder=""
                        class="form-control">
                </div>

                <div class="col-lg-6 col-12 form-group">
                    <label>Current Address</label>
                    <textarea class="textarea form-control" name="current_address" id="form-message" cols="10"
                        rows="3">{{$data->current_address}}</textarea>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label>Permanent Address</label>
                    <textarea class="textarea form-control" name="permanent_address" id="form-message1" cols="10"
                        rows="3">{{$data->permanent_address}}</textarea>
                </div>
                <div class="col-lg-4 col-12 form-group mg-t-30">
                    <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                    <input type="file" name="image" class="form-control-file">
                    <img width="30%" class="mt-3" src="{{asset('uplodes/'.$data->image)}}" alt="">
                    <input type="hidden" name="img" value="{{$data->image}}">
                </div>
                <div class="col-lg-4 col-12 form-group mg-t-30">
                    <label class="text-dark-medium">Upload Student Aadhar Front (150px X 150px)</label>
                    <input type="file" name="aadhar_img" class="form-control-file">
                    <img width="30%" class="mt-3" src="{{asset('uplodes/'.$data->aadhar_img)}}" alt="">
                    <input type="hidden" name="img1" value="{{$data->aadhar_img}}">
                </div>
                <div class="col-lg-4 col-12 form-group mg-t-30">
                    <label class="text-dark-medium">Upload Student Aadhar Back (150px X 150px)</label>
                    <input type="file" name="aadhar_back_img" class="form-control-file">
                    <img width="30%" class="mt-3" src="{{asset('uplodes/'.$data->aadhar_back_img)}}" alt="">
                    <input type="hidden" name="img2" value="{{$data->aadhar_back_img}}">
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