@extends('admin.layout.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Accounts</h3>
    <ul>
        <li>
            <a href="{{url('admin/dashboard')}}">Home</a>
        </li>
        <li>All Expense</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Expanse Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Expenses</h3>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table data-table text-nowrap">
                <thead>
                    <tr>
                        <th>
                            S.No.
                        </th>
                        <th>Name</th>
                        <th>Expense Type</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @inject('sdata', 'App\Http\Controllers\MasterController')
                    @php
                    $i=1;
                    @endphp
                    @foreach($data as $item)
                    <tr>
                        <td>
                            {{$i++}}
                        </td>
                        <td>{{$sdata::getname($item->student_id)}}</td>
                        <td>
                            @if($item->expanse_type == '1')
                            <span>Fees</span>
                            @endif
                        </td>
                        <td><i class="fa fa-inr"></i> {{$item->amount}}</td>
                        @if($item->status == '1')
                        <td class="badge badge-pill badge-success d-block mg-t-8">
                            <span>Paid</span>
                        </td>
                        @else
                        <td class="badge badge-pill badge-danger d-block mg-t-8">
                            <span>Due</span>
                        </td>

                        @endif
                        <td>{{$sdata::getnumber($item->student_id)}}</td>
                        <td>{{$sdata::getemail($item->student_id)}}</td>
                        <td>{{$item->date}}</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item deletedata" data-id="{{$item->id}}"><i
                                            class="fa fa-times text-orange-red "></i>
                                        delete</button>
                                    <a class="dropdown-item" href="{{url('admin/account/edit-expense/'.$item->id)}}"><i
                                            class="fa fa-cogs text-dark-pastel-green"></i>Edit</a>
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
        let url = "{{url('admin/account')}}";
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