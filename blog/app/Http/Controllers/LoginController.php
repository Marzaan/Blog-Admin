<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginAuthentication(Request $request){
        $name = $request->input('name');
        $password = $request->input('password');

        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return 1;
        }
        else{
            return 0;
        }
    //   $count = UsersModel::Where('name', $name)->Where('password',$password)->count();
    }
    public function logout() {
        Auth::logout();
        return 1;
    }
}
