<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Report extends Model
{
    protected $fillable = ['fee', 'status', 'student_id', 'batch_id'];

    public function student()
    {
    	return $this->belongsTo("App\Student");
    }

    public function batch()
    {
    	return $this->belongsTo("App\Batch");
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse( $this->attributes['created_at'] )->toFormattedDateString();
    }

    public function scopePaymentStatus($query, $batch_id)
    {
        return $this->where('batch_id', $batch_id);
    }
}
