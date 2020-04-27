<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Bet;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*$user_id=auth()->user()->id;
        $user=User::find($user_id);*/
        $users=User::all();
        return view('home',compact('users'));
    }
}
