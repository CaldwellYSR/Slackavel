<?php

namespace App\Http\Controllers;

use App\Team;
use App\User;
use App\Channel;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $user = "";
        if ($user = $request->user()) {
            $user->channels()->sync([1,2]);
        }
        $user->load('channels');
        return view('home')->with('user', $user);
    }
}
