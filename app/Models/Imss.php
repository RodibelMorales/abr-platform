<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imss extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'razon',
        'start_date',
        'end_date',
        'status',
        'comment'
    ];
    public function candidate():BelongsTo{
        return $this->belongsTo(Candidate::class);
    }
}
