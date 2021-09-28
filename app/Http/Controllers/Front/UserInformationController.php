<?php

namespace App\Http\Controllers\Front;

use App\Helpers\Notify;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class UserInformationController extends BaseController
{
    public function store(Request $request){
        Validator::make($request->all(), [
            'name'=>'required',
            'phone'=>'required',
            'gender'=>['required', Rule::in(['male', 'female','other']),]
        ])->validate();
        $data = $request->only(['name','phone','gender']);
        $this->user()->update($data);
        Notify::added('General Information Saved Successfully');
        return redirect()->back();
    }
}
