<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaseController extends Controller
{
    public function index()
    {
        return view('leases.index');   
    }
}
