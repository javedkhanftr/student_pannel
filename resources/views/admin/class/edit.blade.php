@extends('admin.layout.master')
@section('content')
<!-- <script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script> -->
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Classes</h3>
    <ul>
        <li>
            <a href="index.html">Home</a>
        </li>
        <li>Add New Class Update</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Admit Form Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Add New Class Schedule</h3>
            </div>
        </div>
        <form class="new-added-form"  method="post" id="infouserForm">
            @csrf
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Teacher Name *</label>
                    <input type="text" name="teacher_name" placeholder="" class="form-control" value="{{$data->teacher_name}}">
                </div>

                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Time *</label>
                    <input type="time" name="time" placeholder="" class="form-control"value="{{$data->time}}">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Phone *</label>
                    <input type="text" name="phone" placeholder="" class="form-control" value="{{$data->phone}}">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Date *</label>
                    <input type="date" name="date" placeholder="" class="form-control" value="{{$data->date}}">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Subject *</label>
                    <select name="subject" id="" class="form-control">
                        <option value="Website Designing" <?php echo $data->data == '"Website Designing' ? 'selected' : '' ?>>Website Designing</option>
                        <option value="Website Development" <?php echo $data->data == 'Website Development' ? 'selected' : '' ?>>Website Development</option>
                        <option value="Digital Marketing" <?php echo $data->data == 'Digital Marketing' ? 'selected' : '' ?>>
                            Digital Marketing</option>
                        <option value="Graphic Design" <?php echo $data->data == 'Graphic Design' ? 'selected' : '' ?>>
                            Graphic Design</option>
                        <option value="UI/Ux Design" <?php echo $data->data == 'UI/Ux Design' ? 'selected' : '' ?>>UI/UX
                            Design</option>
                        <option value="SEO" <?php echo $data->data == 'SEO' ? 'selected' : '' ?>>SEO</option>
                        <option value="SMO" <?php echo $data->data == 'SMO' ? 'selected' : '' ?>>SMO</option>
                    </select>
                </div>

                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Gender *</label>
                    <select name="gender" id="" class="form-control">
                        <option selected="" disabled="">Select Gender</option>
                        <option value="Male" <?php echo $data->gender == 'Male' ? 'selected' : '' ?>>Male</option>
                        <option value="Female" <?php echo $data->gender == 'Female' ? 'selected' : '' ?>>Female</option>
                    </select>
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

                teacher_name: {
                    required: true,
                },
                phone: {
                    required: true,
                },
                gender: {
                    required: true,
                },
                time: {
                    required: true,
                },
                subject: {
                    required: true,
                },
                date: {
                    required: true,
                },
            },
            messages: {
                teacher_name: {
                    required: "Teacher Name is required!",
                },
                phone_number: {
                    required: " Phone Number is required!",
                },
                gender: {
                    required: "Gender is required!",
                },
                time: {
                    required: "Time is required!",
                },
                subject: {
                    required: "Subject Name is required!",
                },
                date: {
                    required: "Date Name is required!",
                },
            },


        });
    })
</script>