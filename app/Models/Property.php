<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Property extends Model
// {
//     protected $table = 'properties';

//     protected $primaryKey = 'id';

//     protected $fillable = [
//         'name',
//         'location',
//     ];

//     public function rooms()
//     {
//         return $this->hasMany(Room::class);
//     }
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name',
        'location',
    ];
}
