<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\category;

class c_post extends Controller
{
    //
    public function showpost(){
        $posts=Post::all();
        return view("posts.posts",compact("posts"));
    }

    public function addpost(){
        $categories=Category::all();
        return view("addmin.posts",compact("categories"));
    }
    public function inserpost(){
        $adpost=new Post;
        $adpost->p_title=request('title');
        $adpost->p_content=request('content');
        $adpost->post_user=request('userid');
        $adpost->post_cat=request('catid');
        $adpost->save();
        return redirect("/posts");
    }
}
