<?php

namespace App\Http\Controllers\Front;

use App\Helpers\Notify;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class EducationController extends BaseController
{
    public function  __construct(Education $edu){
        $this->edu = $edu;
    }


    public function store(Request $request){
        Validator::make($request->all(), $this->edu->getRules())->validate();
        $user = $this->user();
        $ids = $user->educations->pluck('id');
        $this->edu->destroy($ids);
        foreach($request->school as $key=>$name){
            if($name){
            	$this->edu->create([
                'school'=>$name,
                'start'=>$request->start[$key],
                'end'=>$request->end[$key],
                'gpa'=>$request->gpa[$key],
                'major'=>$request->major[$key],
                'user_id'=>$user->id,
            	]);
            }
        }
        Notify::added('Education Saved Successfully');
        return redirect()->back();
    }

    
}
