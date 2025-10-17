<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'sid',
        'slateid',
        'gmid',
        'sportsid',
        'vid',
        'date'
    ];

    protected $casts = [
        'date' => 'date'
    ];

    public function voter()
    {
        return $this->belongsTo(Voter::class, 'vid', 'vid');
    }

    public function getGeneralMemberIdsAttribute()
    {
        return explode(',', $this->gmid);
    }

    public function setGeneralMemberIdsAttribute($value)
    {
        $this->attributes['gmid'] = is_array($value) ? implode(',', $value) : $value;
    }
}
