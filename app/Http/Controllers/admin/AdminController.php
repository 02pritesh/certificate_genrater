<?php

namespace App\Http\Controllers\admin;


use Validator;
use App\Models\Certificate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function certificate()
    {
        if(session()->has('loginId'))
        {
            return view('admin.home');
        }
        else{
            return redirect('/');
        }
    }

    public function certiPost(Request $request){
        $validator = Validator::make($request->all(), [
            'shape' => 'required|string',
            'cut' => 'required|string',
            'name' => 'required|string',
            'qualification' => 'required|string',
            'clarity' => 'required|string',
            'weight' => 'required|string',
            'dimension' => 'required|string',
            'gemstone' => 'required|string',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
            'colour' => 'required|string',
        ]);

        if($validator->fails()){
            return redirect('home')->withErrors($validator)->withInput();
        }

        $start = 'GCIKG';
        $number = rand(100,999);
        $certificateNO = $start . $number;

        $certificate = new Certificate();
    
        $certificate->shape = $request->shape;
        $certificate->name = $request->name;
        $certificate->cut = $request->cut;
        $certificate->qualification = $request->qualification;
        $certificate->clarity = $request->clarity;
        $certificate->weight = $request->weight;
        $certificate->dimension = $request->dimension;
        $certificate->gemstone = $request->gemstone;
        $certificate->colour = $request->colour;

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/admin/img'), $fileName);
            $publicUrl = url('assets/admin/img/'. $fileName);

            $certificate->file = $publicUrl;
        }
        else{
            $certificate->file = 'default_filename.jpg';
        }
        $certificate->certificate_no = $certificateNO;
        $certificate->save();
        return redirect('/home')->with('success', 'User details added successfully');
    }
}
