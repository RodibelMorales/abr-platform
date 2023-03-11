<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'age',
        'phone',
        'curp',
        'nss',
        'rfc',
        'degree',
        'email'
    ];

    public function candidate(): HasMany {
        return $this->hasMany(Candidate::class);
    }
    public function historicalAddress(): HasMany {
        return $this->hasMany(HistoricalAddress::class);
    }
    public function familiarInfo(): HasMany {
        return $this->hasMany(FamiliarInfo::class);
    }
    public function incomeFamily(): HasMany {
        return $this->hasMany(IncomeFamily::class);
    }
    public function otherReference(): HasMany {
        return $this->hasMany(OtherReference::class);
    }
    public function directBoss(): HasMany {
        return $this->hasMany(DirectBoss::class);
    }
}
