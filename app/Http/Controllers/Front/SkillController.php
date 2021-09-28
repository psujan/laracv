<?php

namespace App\Http\Controllers\Front;

use App\Models\Skill;
use App\Helpers\Notify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class SkillController extends BaseController
{
    public function  __construct(Skill $skill){
        $this->skill = $skill;
    }


    public function store(Request $request){
        Validator::make($request->all(), $this->skill->getRules())->validate();
        $user = $this->user();
        $ids = $user->skills->pluck('id');
        $this->skill->destroy($ids);
        foreach($request->skill as $key=>$name){
            if($name){
            	$this->skill->create([
                'name'=>$name,
                'level'=>$request->level[$key] ?? '1',
                'user_id'=>$user->id,
            	]);
            }
        }
        Notify::added('Skill Saved Successfully');
        return redirect()->back();
    }

    
}
