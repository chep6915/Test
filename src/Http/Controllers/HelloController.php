<?php

namespace Chep6915\ISocial\Http\Controllers;

use Chep6915\ISocial\Facades\ISocial;
use Illuminate\Routing\Controller;

class HelloController extends Controller
{
    public function index()
    {
        return ISocial::response();
    }

    public function view()
    {
        return view('i_social::home', ['message' => ISocial::response()]);
    }
}