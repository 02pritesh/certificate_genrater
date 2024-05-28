<?php

namespace App\Http\Controllers\login;

use Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view("admin.login");
    }

    public function loginUser(Request $request){
        $request->validate([
            "email"=> "required",
            "password"=> "required",
        ]);

        $user = User::where("email", $request->email)->first();

        $email = $request->email;
        $password = $request->password;

        if($user){
            if(Hash::check($password, $user->password)){
                if($user->user_emp === 1)
                {
                    $request->session()->put("loginId", $user->user_emp);
                    return redirect("userlist")->with("success","Login Successfully😊!");
                }
                else{
                    return redirect("/")->with("fail","Login Failed because password is incorrect");
                }
            }
            else{
                return redirect("/")->with("fail","Login Failed because password is incorrect");
            }
        }
        else{
            return redirect("/")->with("fail","Login Failed because password is incorrect");
        }
    }

    public function logout(Request $request){
        if(session()->has("loginId")){
            session()->flush();
            return redirect("/")->with("success","Logout Successfully!");
        }
        else{
            return redirect("/");
        }
    }
}
