<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use \Carbon\Carbon;
class NoticeController extends Controller
{
    // public function index()
    // {
    //     $data = Notice::all();
    //     return view('admin/noctice/index', compact('data'));
    // }
    public function create()
    {
        date_default_timezone_set("Asia/Kolkata");
        $data = Notice::all();
        $time=now()->format('Y-m-d H:i:s');
        return view('admin/notice/info', compact('data','time'));
    }
    public function save(Request $request)
    {
        $from = \Carbon\Carbon::now();
        $data = new Notice();
        $data->title = $request->title;
        $data->details = $request->details;
        $data->posted_by = $request->posted_by;
        $data->date = $request->date;
        $data->created_at = $from;
        $data->save();
        return back();
    }
    // public function edit($id)
    // {
    //     $data = Notice::find($id);
    //     return view('admin/noctice/edit', compact('Notice'));
    // }
    // public function update(Request $request,$id){
    //     $data=Notice::find($id);
    //     $data->title = $request->title;
    //     $data->details = $request->details;
    //     $data->posted_by = $request->posted_by;
    //     $data->date = $request->date;
    //     $data->update();
    //     return redirect('admin/notice/all-notice');
    // }
    public function delete($id)
    {
        $data = Notice::find($id);
        $data->delete();
        return redirect('admin/notice/admit-form');
    }
}
