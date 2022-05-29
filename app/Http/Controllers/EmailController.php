<?php

namespace App\Http\Controllers;
use App\Jobs\customerJob;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendMail(){
        dispatch(new customerJob());
        
        dd("Email Has Been delivered");
    }
}
