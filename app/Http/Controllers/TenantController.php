<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;

class TenantController extends Controller
{
    // public function index()
    // {   
    //     return response()->json(Tenant::all());
    // }

    // public function show(Tenant $tenant)
    // {
    //     return response()->json($tenant);
    // }


    public function index()
    {
        return view('tenants.index');   
    }
};