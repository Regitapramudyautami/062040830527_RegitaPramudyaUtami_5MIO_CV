<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('cv_regita');
    }
}
