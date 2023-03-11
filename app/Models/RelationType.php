<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class RelationType extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'slug'
    ];
    public function finalcialDepent():HasMany {
        return $this->hasMany(finalcialDepent::class);
    }
    public function incomeFamily():HasMany {
        return $this->hasMany(IncomeFamily::class);
    }
    public function otherReference():HasMany {
        return $this->hasMany(OtherReference::class);
    }
    public function familiarInfo():HasMany {
        return $this->hasMany(FamiliarInfo::class);
    }
}
