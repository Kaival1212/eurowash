<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
    /** @use HasFactory<\Database\Factories\LockerFactory> */
    use HasFactory;

    protected $fillable = [
        'locker_number',
        'user_id',
        'store_id',
        'status',
        'code',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function orders()
    {
        return $this->hasMany(LockerOrders::class);
    }

}
