<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Account;
use App\Models\admin\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AccountController extends Controller
 {
    public function index() {
        $data = Account::all();
        return view( 'admin/account/index', compact( 'data' ) );
    }

    public function create() {
        $student = Student::all();
        return view( 'admin/account/info', compact( 'student' ) );
    }

    public function save( Request $request ) {
        $data = new Account();
        $data->student_id = $request->student_id;
        $data->expanse_type = $request->expanse_type;
        $data->amount = $request->amount;
        $data->status = $request->status;
        $data->date = $request->date;
        $data->save();
        return redirect( 'admin/account/all-expense' );
    }

    public function edit( $id ) {
        $student = Student::all();
        $data = Account::find( $id );
        return view( 'admin/account/edit', compact( 'data', 'student' ) );
    }

    public function update( Request $request, $id ) {
        $data = Account::find( $id );
        $data->student_id = $request->student_id;
        $data->expanse_type = $request->expanse_type;
        $data->amount = $request->amount;
        $data->status = $request->status;
        $data->date = $request->date;
        $data->update();
        return redirect( 'admin/account/all-expense' );
    }

    public function delete( $id ) {
        $data = Account::find( $id );
        $data->delete();
        return redirect( 'admin/account/all-expense' );
    }

}