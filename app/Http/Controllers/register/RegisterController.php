<?php

namespace App\Http\Controllers\register;

use Validator;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function addRegister(Request $request){
        $rules = [
            "name"=>"required",
            "email"=> "required",
            "password"=> "required | min:6",
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json([
                "message"=> "Please enter required field detils",
                "error"=> $validator->errors()

            ],401);
        }

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);

        $result = $data->save();
        if($result){
            return response()->json([
                "status"=> "success",
                "message"=> "Registration Successfully!😊",
                "data"=> $data
            ],200);
        }
    }
}
