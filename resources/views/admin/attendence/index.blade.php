    @extends('admin.layout.master')
    @section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Student Attendence</h3>
        <ul>
            <li>
                <a href="{{url('admin/dashboard')}}">Home</a>
            </li>
            <li>Attendence</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <div class="row">
        <!-- Student Attendence Search Area End Here -->
        <!-- Student Attendence Area Start Here -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Attendence Sheet Of Class One: Section A, April 2019</h3>
                        </div>
                        <hr>
                    </div>
                    <div class="table-responsive">
                        <table class="table bs-table table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-left">Students</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
                                    <th>10</th>
                                    <th>11</th>
                                    <th>12</th>
                                    <th>13</th>
                                    <th>14</th>
                                    <th>15</th>
                                    <th>16</th>
                                    <th>17</th>
                                    <th>18</th>
                                    <th>19</th>
                                    <th>20</th>
                                    <th>21</th>
                                    <th>22</th>
                                    <th>23</th>
                                    <th>24</th>
                                    <th>25</th>
                                    <th>26</th>
                                    <th>27</th>
                                    <th>28</th>
                                    <th>29</th>
                                    <th>30</th>
                                    <th>31</th>
                                </tr>
                            </thead>
                            <tbody>
                                @inject('sdata', 'App\Http\Controllers\MasterController')
                                @foreach($data as $item)
                                <tr>
                                    <td class="text-left">{{$sdata::getname($item->student_id)}}</td>
                                    <td>
                                        @if(!empty($item->checkin))
                                        <i class="fa fa-check text-success"></i>
                                        @else
                                        <i class="fa fa-times text-danger"></i>
                                        @endif

                                    </td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-times text-danger"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fa fa-times text-danger"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-times text-danger"></i></td>
                                    <td>-</td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-times text-danger"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-times text-danger"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td>-</td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td><i class="fa fa-check text-success"></i></td>
                                    <td>-</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Attendence Area End Here -->
    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>