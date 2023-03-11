<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoricalAddress extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'address',
        'status',
        'residence_time'
    ];

    public function people():BelongsTo {
        return $this->belongsTo(People::class);
    }
}
