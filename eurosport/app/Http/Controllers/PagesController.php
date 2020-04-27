<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use DB;
class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
}
