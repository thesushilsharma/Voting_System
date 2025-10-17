<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'cid',
        'cname',
        'name',
        'degree',
        'position'
    ];

    public function scopeByPosition($query, $position)
    {
        return $query->where('position', $position);
    }
}
