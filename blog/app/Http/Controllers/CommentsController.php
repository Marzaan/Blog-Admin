<?php

namespace App\Http\Controllers;

use App\Models\CommentsModel;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function storeComment(Request $request,$pid,$name){
        $comment = $request->input('comment');

        $result = CommentsModel::insert([
            'pid'=> $pid,
            'name'=> $name,
            'comment'=> $comment,
        ]);
        return $result;
    }
    public function viewComment($pid){
        $users = CommentsModel::where('pid',$pid)->get();
        return $users;
    }
}
