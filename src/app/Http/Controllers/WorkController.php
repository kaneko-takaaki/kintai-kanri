<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function workStart()
    {
        return 'workStart';
    }
    public function workEnd()
    {
        return view('workEnd');
    }
    
}
