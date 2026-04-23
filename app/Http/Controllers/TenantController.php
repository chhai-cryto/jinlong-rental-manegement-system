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






    public function tenants()
    {
        $tenants = Tenant::all();
        

        return view('contact.tenant', compact('tenants'));
    }

    
}