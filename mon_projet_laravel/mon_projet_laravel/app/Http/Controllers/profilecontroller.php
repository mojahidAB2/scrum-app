<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller 
{
    public function showProfile()
    {
       return 'mon profile';
    } 
}
