<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ControllerContact extends BaseController
{
   
    public function index(){

        return view('/contact',["telp" => "081282421456"]);
    }
}