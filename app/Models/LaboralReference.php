<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaboralReference extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'montly_income',
        'start_date',
        'end_date',
        'leaving_reason',
        'comments'
    ];
    public function jobTitle():BelongsToMany {
        return $this->belongsToMany(JobTitle::class);
    }
    public function company():BelongsToMany {
        return $this->belongsToMany(company::class);
    }
    public function candidate():BelongsToMany {
        return $this->belongsToMany(Candidate::class);
    }
    public function directBoss():HasMany {
        return $this->hasMany(DirectBoss::class);
    }  
}
