<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classe;

class ClassController extends Controller
{
    public function index()
    {
        $data = Classe::all();
        return view('admin/class/index', compact('data'));
    }
    public function create()
    {
        return view('admin/class/info');
    }
    public function save(Request $request)
    {
        $data = new Classe();
        $data->teacher_name = $request->teacher_name;
        $data->gender  = $request->gender;
        $data->subject  = $request->subject;
        $data->time  = $request->time;
        $data->date = $request->date;
        $data->phone = $request->phone;
        $data->save();
        return redirect('admin/class/all-class');
    }
    public function edit($id)
    {
        $data = Classe::find($id);
        return view('admin/class/edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Classe::find($id);
        $data->teacher_name = $request->teacher_name;
        $data->gender  = $request->gender;
        $data->subject  = $request->subject;
        $data->time  = $request->time;
        $data->date = $request->date;
        $data->phone = $request->phone;
        $data->update();
        return redirect('admin/class/all-class');
    }
    public function delete($id)
    {
        $data = Classe::find($id);
        $data->delete();
        return redirect('admin/class/all-class');
    }

    public function view($id)
    {
        $data = Classe::find($id);
        return view('admin/class/view', compact('data'));
    }
}
