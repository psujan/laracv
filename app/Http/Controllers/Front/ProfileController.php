<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function __construct(){

    }

    public function index(){
        $user = $this->user();
        if($user){
            $user = $user->load('skills','educations','work_experiences');
        }
        return view('front.profile',[
            'user'=>$user,
            'title'=>'My Profile | CV Laravel'
        ]);
    }

    public function edit(){
        $user = $this->user();
        if($user){
            $user = $user->load('skills','educations','work_experiences');
        }
        return view('front.profile_edit',[
            'user'=>$user,
            'title'=>'Edit Profile | CV Laravel'
        ]);
    }
}
