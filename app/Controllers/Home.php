<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function mainslider_desktop()
    {
        return view('mainslider_desktop');
    }

    public function include_mobile_layout()
    {
        return view('include_mobile_layout');
    }
}
