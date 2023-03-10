@extends('admin.layout.master')
@section('content')
<script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script>
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Admin </h3>
    <ul>
        <li>
            <a href="{{url('/')}}">Home</a>
        </li>
        <li>Admin</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Dashboard summery Start Here -->
<div class="row gutters-20">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-green ">
                        <i class="flaticon-classmates text-green"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">Students</div>
                        <div class="item-number"><span class="counter" data-num="150000">1,50,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-blue">
                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">Teachers</div>
                        <div class="item-number"><span class="counter" data-num="2250">2,250</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-yellow">
                        <i class="flaticon-couple text-orange"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">Parents</div>
                        <div class="item-number"><span class="counter" data-num="5690">5,690</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-red">
                        <i class="flaticon-money text-red"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">Earnings</div>
                        <div class="item-number"><span>$</span><span class="counter" data-num="193000">1,93,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard summery End Here -->
<!-- Dashboard Content Start Here -->
<div class="row gutters-20">
    <div class="col-lg-12 col-xl-12 col-xl-12">
        <div class="card dashboard-card-six pd-b-20">
            <div class="card-body">
                <div class="heading-layout1 mg-b-17">
                    <div class="item-title">
                        <h3>Notice Board</h3>
                    </div>

                </div>

                <div class="notice-box-wrap">
                    @foreach($data as $item)
                    <div class="notice-list">
                        <div class="post-date bg-skyblue">{{$item->date}}</div>
                        <h3 class="notice-title"><a href="#">{{$item->title}}</a></h3>
                        <h6 class="notice-title"><a href="#">{{$item->details}}</a></h6>
                        <div class="entry-meta"> {{$item->posted_by}} / <span>5 min ago</span></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Content End Here -->
@endsection