<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('layouts/dashboard/dashboard');
    }
    public function widget(): string
    {
        return view('layouts/widget/widget');
    }
}
