<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    protected $table = 'leases';

    protected $primaryKey = 'id';

    protected $fillable = [
        'tenant_id',
        'room_id',
        'start_date',
        'end_date',
        'rent_amount',
        'status',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
