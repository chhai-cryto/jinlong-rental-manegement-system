<?php

namespace App\Http\Controllers;

use App\Models\Lease;
use Illuminate\Http\Request;

class LeaseController extends Controller
{
    // Show all leases
    public function index()
    {
        $leases = Lease::all();

        return view('leases.index', compact('leases'));
    }

    // Store new lease
    public function store(Request $request)
    {
        $tenant_id = $request->input('tenant_id');
        $room_id = $request->input('room_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $rent_amount = $request->input('rent_amount');
        $status = $request->input('status');

        Lease::create([
            'tenant_id' => $tenant_id,
            'room_id' => $room_id,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'rent_amount' => $rent_amount,
            'status' => $status,
        ]);

        return redirect()->back();
    }
}