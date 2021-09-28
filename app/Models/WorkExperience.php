<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = ['hospital_name','address','worked_from','worked_to','user_id'];

    public function getRules(){
        return [
            'hospital_name.*'=>'required',
            'address'=>'array',
            'address.*'=>'required',
            'worked_from'=>'array',
            'worked_from.*'=>['required','date'],
            'worked_to.*'=>['nullable','date'],
        ];
    }
}
