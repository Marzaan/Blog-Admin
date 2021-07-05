<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;

class UsersController extends Controller
{
    public function allUser(){
        $users = UsersModel::orderBy('id','desc')->get();
        return $users;
    }
    //        $users = CommentsModel::where('pid',$pid)->get();
    public function searchUser($query){
        $users = UsersModel::where('name', 'like', '%'.$query.'%')
            ->orWhere('website', 'like', '%'.$query.'%')
            ->orWhere('email', 'like', '%'.$query.'%')
            ->orderBy('id', 'asc')
            ->get();
        return $users;
    }
}
