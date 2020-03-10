<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend::home');
    }

    public function terms()
    {
        return view('frontend::terms');
    }

    public function privacy()
    {
        return view('frontend::privacy');
    }
}
