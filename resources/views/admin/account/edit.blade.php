@extends('admin.layout.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Accounts</h3>
    <ul>
        <li>
            <a href="{{url('admin/dashboard')}}">Home</a>
        </li>
        <li>Edit Expense</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Add Expense Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Edit Expense</h3>
            </div>
        </div>
        <form class="new-added-form" method="post" id="infouserForm">
            @csrf
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-12 form-group">
                    <label>Student Name *</label>
                    <select name="student_id" class="form-control" id="">
                        <option value="" selected disabled>Select Student</option>
                        @foreach($student as $item)
                        <option value="{{$item->id}}" <?php echo $data->student_id == $item->id ?'selected':''?>>
                            {{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xl-4 col-lg-6 col-12 form-group">
                    <label>Expanse Type *</label>
                    <select name="expanse_type" class="select2 form-control">
                        <option value="1" <?php echo  $data->expanse_type == '1'?'selected':''?>>Fees</option>
                    </select>
                </div>
                <div class="col-xl-4 col-lg-6 col-12 form-group">
                    <label>Amount *</label>
                    <input type="text" value="{{$data->amount}}" name="amount" placeholder="" class="form-control">
                </div>
                <div class="col-xl-4 col-lg-6 col-12 form-group">
                    <label>Status</label>
                    <select name="status" class="select2 form-control">
                        <option value="" selected disabled>Please Select</option>
                        <option value="1" <?php echo  $data->status == '1'?'selected':''?>>Paid</option>
                        <option value="0" <?php echo  $data->status == '0'?'selected':''?>>Due</option>
                    </select>
                </div>
                <div class="col-xl-4 col-lg-6 col-12 form-group">
                    <label>Date</label>
                    <input type="text" value="{{$data->date}}" name="date" placeholder="dd/mm/yy"
                        class="form-control air-datepicker" data-position="bottom right">
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

            student_id: {
                required: true,
            },

            expanse_type: {
                required: true,
            },
            amount: {
                required: true,
            },
            status: {
                required: true,
            },
            date: {
                required: true,
            },


        },
        messages: {
            student_id: {
                required: "Student Id is required!",
            },
            expanse_type: {
                required: "Expanse Type is required!",
            },
            amount: {
                required: "Amount is required!",
            },
            status: {
                required: "Status is required!",
            },
            date: {
                required: "Date is required!",
            },
        },


    });
})
</script>