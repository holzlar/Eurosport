<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function search(Request $request){
        $q = $request->input('q');
        $title = Post::where('title','LIKE','%'.$q.'%')->orderBy('created_at','desc')->get();
        if(count($title) > 0)
            return view('search')->withDetails($title)->withQuery ( $q );
        else return view ('search')->withMessage('No Details found. Try to search again !');
    }
}
