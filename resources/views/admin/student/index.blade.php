@extends('admin.layout.master')
@section('content')
<div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
        <li>
            <a href="{{url('admin/dashboard')}}">Home</a>
        </li>
        <li>All Students</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Students Data</h3>
            </div>
            <!-- <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-plus text-orange-red"></i>Add</a>

                </div>
            </div> -->
        </div>
        <!-- <form class="mg-b-20">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Roll ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Name ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Class ..." class="form-control">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                </div>
            </div>
        </form> -->
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th>
                            <!-- <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">Roll</label>
                            </div> -->
                            ID
                        </th>

                        <th>Name</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th>Parents</th>
                        <th>Date Of Birth</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach($data as $item)
                    <tr>
                        <td>
                            <!-- <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0021</label>
                            </div> -->
                            {{$i++}}
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone_number}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->father_name}}</td>
                        <td>{{$item->dob}}</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item deletedata" data-id="{{$item->id}}"><i
                                            class="fa fa-times text-orange-red"></i>
                                        delete</button>
                                    <a class="dropdown-item" href="{{url('admin/student/view/'.$item->id)}}"><i
                                            class="fa fa-eye text-info"></i>
                                        show</a>
                                    <a class="dropdown-item" href="{{url('admin/student/edit/'.$item->id)}}"><i
                                            class="fa fa-cogs text-dark-pastel-green"></i>
                                        Edit</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function() {
    $('.deletedata').click(function() {
        let url = "{{url('admin/student')}}";
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