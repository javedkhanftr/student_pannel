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
        <li>Parents Form Edit</li>
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
                    <label>Name *</label>
                    <input type="text" name="name" placeholder="" class="form-control" value="{{$Parents->name}}">
                </div>

                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>E-Mail *</label>
                    <input type="email" name="email" placeholder="" class="form-control" value="{{$Parents->email}}">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Phone *</label>
                    <input type="text" name="phone" placeholder="" class="form-control" value="{{$Parents->phone}}">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Occupation *</label>
                    <input type="text" name="occupation" placeholder="" class="form-control" value="{{$Parents->occupation}}">
                </div>

                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Gender *</label>
                    <select name="gender" id="" class="form-control">
                        <option selected="" disabled="">Select Gender</option>
                        <option value="Male" <?php echo $Parents->gender=='Male'?'selected':''?>>Male</option>
                        <option value="Female" <?php echo $Parents->gender=='Female'?'selected':''?>>Female</option>
                    </select>
                </div>
                <div class="col-lg-6 col-12 form-group">
                    <label>Current Address</label>
                    <textarea class="textarea form-control" name="address" id="form-message" cols="10" rows="3">{{$Parents->address}}</textarea>
                </div>
                <div class="col-lg-4 col-12 form-group mg-t-30">
                    <label class="text-dark-medium">Upload Parents Photo (150px X 150px)</label>
                    <input type="file" name="image" class="form-control-file">
                    <img width="30%" class="mt-3" src="{{asset('uplodes/'.$Parents->image)}}" alt="">
                    <input type="hidden" name="image" value="{{$Parents->image}}">
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

                // image: {
                //     required: true,
                // },
                phone: {
                    required: true,
                },
                gender: {
                    required: true,
                },
                email: {
                    required: true,
                },
                occupation: {
                    required: true,
                },
                address: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Name is required!",
                },
                // image: {
                //     required: "Image is required!",
                // },
                phone_number: {
                    required: " Phone Number is required!",
                },
                gender: {
                    required: "Gender is required!",
                },
                email: {
                    required: "Email is required!",
                },
                occupation: {
                    required: "Occupation Name is required!",
                },
                address: {
                    required: "Address Name is required!",
                },
            },


        });
    })
</script>