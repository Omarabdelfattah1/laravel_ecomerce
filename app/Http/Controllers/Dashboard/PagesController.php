<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index');
    }
    public function website()
    {
        return view('website.home.index');
    }
}
