<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class VotingSession extends Model
{
    protected $fillable = [
        'date',
        'stime',
        'etime'
    ];

    protected $casts = [
        'date' => 'date',
        'stime' => 'datetime:H:i:s',
        'etime' => 'datetime:H:i:s'
    ];

    public function isActive()
    {
        $now = Carbon::now();
        $today = $now->toDateString();
        $currentTime = $now->toTimeString();

        return $this->date->toDateString() === $today &&
               $currentTime >= $this->stime &&
               $currentTime <= $this->etime;
    }
}
