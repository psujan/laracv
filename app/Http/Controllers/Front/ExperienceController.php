<?php

namespace App\Http\Controllers\Front;

use App\Helpers\Notify;
use Illuminate\Http\Request;
use App\Models\WorkExperience;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends BaseController
{
    public function  __construct(WorkExperience $exp){
        $this->exp = $exp;
    }


    public function store(Request $request){
        Validator::make($request->all(), $this->exp->getRules())->validate();
        $user = $this->user();
        $ids = $user->work_experiences->pluck('id');
        $this->exp->destroy($ids);
        foreach($request->hospital_name as $key=>$name){
            if($name){
                $this->exp->create([
                'hospital_name'=>$name,
                'worked_from'=>$request->worked_from[$key],
                'worked_to'=>$request->worked_to[$key],
                'address'=>$request->address[$key],
                'user_id'=>$user->id,
            ]);
            }
        }
        Notify::added('Work experience Saved Successfully');
        return redirect()->back();

    }

    
}
