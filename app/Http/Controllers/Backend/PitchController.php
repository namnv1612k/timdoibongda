<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PitchController extends Controller
{
    public function list()
    {
        return view('backend/pitch/list');
    }
}
