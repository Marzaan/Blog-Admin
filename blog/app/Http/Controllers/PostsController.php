<?php

namespace App\Http\Controllers;

use App\Models\PostsModel;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function allPost(){
        $posts = PostsModel::orderBy('pid','desc')->get();
        return $posts;
    }
    public function myPost($username){
        $posts = PostsModel::Where('name', $username)->get();
        return $posts;
    }
    public function userPosts($name){
        $posts = PostsModel::Where('name', $name)->get();
        return $posts;
    }
    public function postInfo($pid){
        $posts = PostsModel::Where('pid', $pid)->get();
        return $posts;
    }
    public function storePost(Request $request){
        $name = $request->input('name');
        $title = $request->input('title');
        $description = $request->input('description');

        $result = PostsModel::insert([
            'name'=> $name,
            'title'=> $title,
            'description'=> $description
        ]);
        return $result;
    }
    public function updatePost(Request $request, $id)
    {
        $post = PostsModel::find($id);

        $post->name=$request->input('name');
        $post->title=$request->input('title');
        $post->description=$request->input('description');

        $post->save();
        return $post;
    }
    public function deletePost($id)
    {
        $post = PostsModel::find($id);

        $post->delete();
        return $post;
    }
}
