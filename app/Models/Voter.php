<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $primaryKey = 'vid';

    protected $fillable = [
        'vname',
        'studentid',
        'username'
    ];

    public function results()
    {
        return $this->hasMany(Result::class, 'vid', 'vid');
    }
}
