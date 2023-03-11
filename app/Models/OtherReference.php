<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class OtherReference extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'type',
        'comments'
    ];

    public function candidate():BelongsToMany {
        return $this->belongsToMany(Candidate::class);
    }
    public function people():BelongsToMany {
        return $this->belongsToMany(People::class);
    }
    public function relationType():BelongsToMany {
        return $this->belongsToMany(RelationType::class);
    }
}
