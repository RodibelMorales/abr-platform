<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FamiliarInfo extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'phone',
    ];
    public function candidate():BelongsTo {
        return $this->belongsTo(Candidate::class);
    }
    public function people():BelongsTo{
        return $this->belongsTo(People::class);
    }
    public function company():BelongsTo{
        return $this->belongsTo(Company::class);
    }
    public function relationType():BelongsTo{
        return $this->belongsTo(RelationType::class);
    }
}
