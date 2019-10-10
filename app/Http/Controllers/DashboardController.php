<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
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
        $user_id = auth()->user()->id;                          //dobijamo id usera
        $user = User::find($user_id);                           //nadjemo tog usera
        return view('dashboard')->with('posts',$user->posts);   //i prosledjujemo dashbordu njegove postove
    }
}
