<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['level','user_id','name'];

    public function getRules(){
        return [
            'skill'=>'array',
            'skill.*'=>'required',
            'level'=>'array',
            'level.*'=>'nullable | min:1 | max:5',
        ];
    }
}
