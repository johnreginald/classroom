<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Batch extends Model
{
    protected $fillable = ['name', 'time', 'status', 'started_at'];

    protected $dates = ['started_at'];

    public function scopeBatches($query)
    {
        return $query->where('status', 'active')->pluck('name', 'id');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public function getStartedAtAttribute($started_at)
    {
        return Carbon::parse($started_at)->format('Y-m-d');    
    }

}
