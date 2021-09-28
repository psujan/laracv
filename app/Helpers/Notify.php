<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;

class Notify{

    static function added($message = NULL){
        Session::flash('message', $message ?? 'Added successfully');
        Session::flash('type', 'success');
    }

    static function updated($message = NULL){
        Session::flash('message', $message ?? 'Updated successfully');
        Session::flash('type', 'success');
    }

    static function failed($message = NULL){
        Session::flash('message', $message ?? 'Server Error');
        Session::flash('type', 'error');
    }

    static function deleted($message = NULL){
        Session::flash('message', $message ?? 'Deleted successfully');
        Session::flash('type', 'success');
    }


    static function info($message){
        Session::flash('message', $message);
        Session::flash('type', 'info');
    }


}