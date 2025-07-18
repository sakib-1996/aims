<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'deletable', 'permissions'];

    /**
     * Get the staff for the role.
     */
    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
}
