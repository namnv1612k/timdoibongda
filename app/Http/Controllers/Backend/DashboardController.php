<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function analytic()
    {
        return view('Backend/dashboard/analytic');
    }

    public function sale()
    {
        return view('Backend/dashboard/sale');
    }
}
