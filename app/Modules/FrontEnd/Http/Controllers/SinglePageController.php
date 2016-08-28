<?php

namespace App\Modules\FrontEnd\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SinglePageController extends Controller
{
    public function index()
    {
        return view('single-page::main');
    }
}
