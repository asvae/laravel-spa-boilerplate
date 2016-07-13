<?php

namespace App\ApiTester\Http\Controllers;

use App\Http\Controllers\Controller;

class ApiTesterController extends Controller
{
    public function index(){
        return view('api-tester::api-tester');
    }
}