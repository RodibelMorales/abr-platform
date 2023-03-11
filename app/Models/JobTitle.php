<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobTitle extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description'
    ];
    public function user():HasMany {
        return $this->hasMany(User::class);
    }
    public function surveys():HasMany {
        return $this->hasMany(Survey::class);
    }
    public function incomeFamily():HasMany {
        return $this->hasMany(IncomeFamily::class);
    }
    public function laboralReference():HasMany {
        return $this->hasMany(LaboralReference::class);
    }
    public function directBoss():HasMany {
        return $this->hasMany(DirectBoss::class);
    }
}
