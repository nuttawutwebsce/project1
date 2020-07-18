<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return"สวัสดี";
    }

    public function greeting($name)
    {
        return"สวัสดี $name";
    }
    public function calculator($num1,$num2,$num3)
    {
     return"บวกเลข".($num1+$num2+$num3);
    }
}
