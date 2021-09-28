<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = ['school','start','end','gpa','user_id','gpa','major'];

    public function getRules(){
    	return [
    		'school'=>'array',
			'start'=>'array',
			'end'=>'array',
			'gpa'=>'array',
    		'school.*'=>'required',
    		'major.*'=>'nullable',
    		'gpa.*'=>'nullable | numeric',
    		'start.*'=>'required | date',
    		'end .*'=>'nullable | date',
		];
    }
}
