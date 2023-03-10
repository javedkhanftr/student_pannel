<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parents;
class ParentsController extends Controller
{
    //
    public function index()
    {
        $Parents = Parents::all();
        return view('admin/parents/index', compact('Parents'));
    }
    public function create()
    {
        return view('admin/parents/info');
    }
    public function save(Request $request)
    {
        $Parents = new Parents();
        $Parents->name = $request->name;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uplodes'), $filename);
            $Parents['image'] = $filename;
            // return $data;
        }
 
        $Parents->email = $request->email;
        $Parents->phone = $request->phone;
        $Parents->gender = $request->gender;
        $Parents->occupation = $request->occupation;
        $Parents->address = $request->address;
        $Parents->save();
       
        return redirect('admin/parents/all-parents');
    }
    public function edit($id)
    {
        $Parents = Parents::find($id);
        return view('admin/parents/edit', compact('Parents'));
    }
    public function update(Request $request, $id)
    {
        $Parents = Parents::find($id);
        $Parents->name = $request->name;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uplodes'), $filename);
            $data['image'] = $filename;
        }
        $Parents->email = $request->email;
        $Parents->phone = $request->phone;
        $Parents->gender = $request->gender;
        $Parents->occupation = $request->occupation;
        $Parents->address = $request->address;
        $Parents->update();
        return redirect('admin/parents/all-parents');
    }
    public function delete($id)
    {
        $Parents = Parents::find($id);
        $Parents->delete();
        return redirect('admin/parents/all-parents');
    }

    public function view($id)
    {
        $Parents = Parents::find($id);
        return view('admin/parents/view', compact('Parents'));
    }
}
