<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'employeer_id',
        'company_id',
        'location_id',
        'category_id',
        'jobtype_id',
        'vacancy',
        'experience',
        'job_end_date'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function jobtype(){
        return $this->belongsTo(Jobtype::class);
    }
    public function employeer(){
        return $this->belongsTo(Employeer::class);
    }

    public function applicant(){
        return $this->hasMany(Applicant::class);
    }
}
