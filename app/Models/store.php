<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    /** @use HasFactory<\Database\Factories\StoreFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'phone',
        'email',
        'password',
        'status',
    ];


    public function lockers()
    {
        return $this->hasMany(Locker::class);
    }

}
