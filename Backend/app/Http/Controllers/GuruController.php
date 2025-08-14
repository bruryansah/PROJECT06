<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gurucontroller extends Controller
{
    //
}

public function __construct()
{
    $this->middleware(['auth', 'guru']);
}
