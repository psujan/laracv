<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class HomeController extends BaseController
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
        $user = $this->user();
        if($user){
            $user = $user->load('skills','educations','work_experiences');
        }
        return view('home',[
            'user'=>$user,
            'title'=>'Home | CV Laravel'
        ]);
    }
}
