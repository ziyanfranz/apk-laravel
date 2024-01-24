<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\routing\Controller as BaseController;



class Controller extends BaseController
{
   use AuthorizesRequests, ValidatesRequests;

}