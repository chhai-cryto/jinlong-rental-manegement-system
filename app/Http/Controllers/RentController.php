<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index()
    {
        return view('rent.index');
        $rent = Rent::paginate(10);
        return response()->json($rent); 
    }
}
