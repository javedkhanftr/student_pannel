@extends('admin.layout.master')
@section('content')
<div class="breadcrumbs-area">
    <h3>Parents</h3>
    <ul>
        <li>
            <a href="{{url('admin/dashboard')}}">Home</a>
        </li>
        <li>Add Parents</li>
    </ul>
</div>
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Add Parents Data</h3>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>Title</th>
                       
                        <th>Details</th>
                        <th>Posted By</th>
                        <th>Date</th>
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
                            {{$i++}}
                        </td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->details}}</td>
                        <td>{{$item->posted_by}}</td>
                        <td>{{$item->date}}</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item deletedata" data-id="{{$item->id}}"><i class="fa fa-times text-orange-red"></i>
                                        delete</button>
                                    <a class="dropdown-item" href="{{url('admin/notice/view/'.$item->id)}}"><i class="fa fa-eye text-info"></i>
                                        show</a>
                                    <a class="dropdown-item" href="{{url('admin/notice/edit/'.$item->id)}}"><i class="fa fa-cogs text-dark-pastel-green"></i>
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