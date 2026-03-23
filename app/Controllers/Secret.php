<?php

namespace App\Controllers;

class Secret extends BaseController
{
    public function index(): string
    {
        return view('easter_egg');
    }
}
