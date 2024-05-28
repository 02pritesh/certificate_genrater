<?php

namespace App\Http\Controllers\admin;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function userList()
    {
        if(session()->has("loginId")) {
            $data = Certificate::orderBy('id','desc')->get();

            return view('admin.userblade', compact('data'));
        }
        else{
            return redirect('/');
        }
    }

    public function userCertificate($id)
    {
            
        $user = Certificate::findOrFail($id);
        return view('admin.certificate', compact('user'));

    }

    public function user_edit($id)
    {
            $user = Certificate::findOrFail($id);
            return view('admin.update', compact('user'));
    }

    public function update(Request $request)
    {
        $userData = [];
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $original = $image->getClientOriginalName();
            $filename = $original;
            $image->move(public_path('assets/uploads/img/'), $filename);

            $userData['file'] = $filename;
        }

        $fillableFields = ['name', 'class', 'species', 'cut', 'colour', 'dimension', 'weight', 'clarity' ,'qualification'];

        foreach ($fillableFields as $field) {
            if ($request->filled($field)) {
                $userData[$field] = $request->$field;
            }
        }

        if (!empty($userData)) {
            certificate::where('id', $request->id)->update($userData);
            return redirect('userlist')->with('success', 'certificate updated successfully');
        }

        return redirect('userlist')->with('info', 'No changes to update');

    }

    public function delete($id)
    {
        Certificate::where('id', "=", $id)->delete();
        return redirect("userlist")->with("success","student has been delete successfully");
    }
}
