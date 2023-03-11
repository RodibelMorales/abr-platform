<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class DirectBoss extends Model
{
    use HasFactory,SoftDeletes;
    public function people():BelongsToMany {
        return $this->belongsToMany(People::class);
    }
    public function jobTitle():BelongsToMany {
        return $this->belongsToMany(JobTitle::class);
    }
    public function laboralReference():BelongsToMany {
        return $this->belongsToMany(LaboralReference::class);
    }
}
