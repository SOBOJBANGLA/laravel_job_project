<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','contact','cv','candidate_id','job_id','employeer_id','status'];

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function employeer(){
        return $this->belongsTo(Employeer::class);
    }
}
