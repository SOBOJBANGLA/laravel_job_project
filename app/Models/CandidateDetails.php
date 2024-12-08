<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateDetails extends Model
{
    use HasFactory;
    protected $fillable = ['f_name','l_name','occupation','phone','address','image','bio','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
