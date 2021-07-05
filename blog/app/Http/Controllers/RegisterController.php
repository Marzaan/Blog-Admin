<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function storeUser(Request $request){
        $name = $request->input('name');
        $site = $request->input('site');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));

        $result = UsersModel::insert([
            'name'=> $name,
            'website'=> $site,
            'email'=> $email,
            'password'=> $password
        ]);
        return $result;
    }
}
