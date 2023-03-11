<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'social_reason'
    ];

    public function unitCompany(): HasMany {
        return $this->hasMany(UnitCompany::class);
    }
    public function familiarInfo(): HasMany {
        return $this->hasMany(FamiliarInfo::class);
    }
    public function laboralReference(): HasMany {
        return $this->hasMany(LaboralReference::class);
    }
}
