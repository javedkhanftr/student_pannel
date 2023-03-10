<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Student;
use App\Models\admin\Attendence;
use Carbon\Carbon;

class AttendenceController extends Controller
 {
    public function index() {
        date_default_timezone_set( 'Asia/Kolkata' );
        $mytime = Carbon::now()->format( 'D' );
        $data = Attendence::all();
        return view( 'admin/attendence/index', compact( 'data' ) );
    }
}