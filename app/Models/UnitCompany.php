<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnitCompany extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'address',
        'contact_number',
        'slug',
        'place'
    ];

    public function company(): BelongsTo {
        return $this->belongsTo(Company::class);
    }
}
