<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Student;

class StudentController extends Controller
 {
    public function index() {
        $data = Student::all();
        return view( 'admin/student/index', compact( 'data' ) );
    }

    public function create() {
        return view( 'admin/student/info' );
    }

    public function save( Request $request ) {
        $data = new Student();
        $data->name = $request->name;
        if ( $request->file( 'image' ) ) {
            $file = $request->file( 'image' );
            $filename = date( 'YmdHi' ) . $file->getClientOriginalName();
            $file->move( public_path( 'uplodes' ), $filename );
            $data[ 'image' ] = $filename;
        }
        $data->phone_number = $request->phone_number;
        $data->dob = $request->dob;
        $data->email = $request->email;
        $data->father_name = $request->father_name;
        $data->father_number = $request->father_number;
        $data->course = $request->course;
        $data->joining_date = $request->joining_date;
        $data->qualification = $request->qualification;
        $data->aadhar_number = $request->aadhar_number;
        if ( $request->file( 'aadhar_img' ) ) {
            $file = $request->file( 'aadhar_img' );
            $filename = date( 'YmdHi' ) . $file->getClientOriginalName();
            $file->move( public_path( 'uplodes' ), $filename );
            $data[ 'aadhar_img' ] = $filename;
        }
        if ( $request->file( 'aadhar_back_img' ) ) {
            $file = $request->file( 'aadhar_back_img' );
            $filename = date( 'YmdHi' ) . $file->getClientOriginalName();
            $file->move( public_path( 'uplodes' ), $filename );
            $data[ 'aadhar_back_img' ] = $filename;
        }
        $data->current_address = $request->current_address;
        $data->permanent_address = $request->permanent_address;
        $data->terms_conditions = '1';
        $data->save();
        return redirect( 'admin/student/all-student' );
    }

    public function edit( $id ) {
        $data = Student::find( $id );
        return view( 'admin/student/edit', compact( 'data' ) );
    }

    public function update( Request $request, $id ) {
        $data = Student::find( $id );
        $data->name = $request->name;
        if ( $request->file( 'image' ) ) {
            $file = $request->file( 'image' );
            $filename = date( 'YmdHi' ) . $file->getClientOriginalName();
            $file->move( public_path( 'uplodes' ), $filename );
            $data[ 'image' ] = $filename;
        } else {
            $data->image = $request->img;
        }
        $data->phone_number = $request->phone_number;
        $data->dob = $request->dob;
        $data->email = $request->email;
        $data->father_name = $request->father_name;
        $data->father_number = $request->father_number;
        $data->course = $request->course;
        $data->joining_date = $request->joining_date;
        $data->qualification = $request->qualification;
        $data->aadhar_number = $request->aadhar_number;
        if ( $request->file( 'aadhar_img' ) ) {
            $file = $request->file( 'aadhar_img' );
            $filename = date( 'YmdHi' ) . $file->getClientOriginalName();
            $file->move( public_path( 'uplodes' ), $filename );
            $data[ 'aadhar_img' ] = $filename;
        } else {
            $data->image = $request->img1;
        }
        if ( $request->file( 'aadhar_back_img' ) ) {
            $file = $request->file( 'aadhar_back_img' );
            $filename = date( 'YmdHi' ) . $file->getClientOriginalName();
            $file->move( public_path( 'uplodes' ), $filename );
            $data[ 'aadhar_back_img' ] = $filename;
        } else {
            $data->image = $request->img2;
        }
        $data->current_address = $request->current_address;
        $data->permanent_address = $request->permanent_address;
        $data->update();
        return redirect( 'admin/student/all-student' );
    }

    public function delete( $id ) {
        $data = Student::find( $id );
        $data->delete();
        return redirect( 'admin/student/all-student' );
    }

    public function view( $id ) {
        $data = Student::find( $id );
        return view( 'admin/student/view', compact( 'data' ) );
    }
}