<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreakController extends Controller
{
    public function breakStart()
    {
        return view('breakStart');
    }

    public function breakEnd()
    {
        return 'single';
    }

}
