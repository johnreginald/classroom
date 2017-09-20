<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['name', 'gender', 'dob', 'nrc', 'address', 'phone', 'batch_id', 'status'];

    protected $dates = ['dob'];

    public function setDobAttribute($dob)
    {
        $this->attributes['dob'] = Carbon::parse($dob);
    }

    public function getDobAttribute($dob)
    {
        return Carbon::parse($dob)->format('Y-m-d');    
    }

    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public function batch()
    {
        return $this->belongsTo('App\Batch');
    }

    public function scopeActive($query, $paginate)
    {  
        return $query->where('status', 'active')->latest()->paginate($paginate);
    }

    // public function setNameAttribute($name)
    // {
    //     $this->attributes['name'] = ucwords(strtolower($name));
    // }

    // public function scopePayment($query)
    // {
    //     return $query->where('remaining', '>', 0)->get();
    // }

    public function scopeTotal($query)
    {
        // array_walk($query->get(), function() {
            
        // });

        // $total = ['remaining' => null, 'earning' => null];
        // foreach($students as $student) {
        //     $total['remaining'] += $student->remaining;
        //     $total['earning'] += $student->amount;
        // }
        // return $total;
    }

    // public function scopeStatus($query, $id, $name)
    // {
    //     $student = $query->findOrFail($id);
    //     $student->status = $name;

    //     if($name == 'active') {
    //         $student->remaining = 200000 - $student->amount;
    //     } else {
    //         $student->remaining = 0;
    //     }

    //     $student->save();
    // }

    // public function scopeByStatus($query, $name)
    // {
    //     return $query->where('status', $name)->latest()->get();
    // }
}
