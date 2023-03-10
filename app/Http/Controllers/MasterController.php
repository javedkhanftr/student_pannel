<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Student;
use \Carbon\Carbon;

class MasterController extends Controller
 {
    public static function getname( $id ) {
        $data = Student::find( $id );
        return $data->name;

    }
    public static function getnumber( $id ) {
        $data = Student::find( $id );
        return $data->phone_number;

    }
    public static function getemail( $id ) {
        $data = Student::find( $id );
        return $data->email;

    }
    public static function gettime( $date ) {
        $from = \Carbon\Carbon::now();
        $hourdiff = round( ( strtotime( $from ) - strtotime( $date ) )/3600, 1 );
        $diff_in_minutes = $from->diffInHours( $date );
        return $date;
    }
}