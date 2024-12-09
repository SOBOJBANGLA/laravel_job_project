<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employeer extends Authenticatable
{
    use HasApiTokens, HasFactory;


    protected $guard = 'employeer';

    protected $fillable = [
        'name',
        'email',
        'password',
        'company_id',
        'location_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
    public function job(){
        return $this->hasMany(Job::class);
    }

    public function applicant(){
        return $this->hasMany(Applicant::class);
    }
}