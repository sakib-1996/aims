<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get all of the users for the Currency
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
