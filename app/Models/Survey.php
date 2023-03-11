<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sheet',
        'status',
        'comments',
    ];
    public function candidate():BelongsTo {
        return $this->belongsTo(Candidate::class);
    }
    public function jobTitle():BelongsTo {
        return $this->belongsTo(JobTitle::class);
    }
    public function createBy():BelongsTo {
        return $this->belongsTo(User::class,'created_by');
    }
    public function aprovebedBy():BelongsTo {
        return $this->belongsTo(User::class,'aprovebed_by');
    }
    public function updatedBy():BelongsTo {
        return $this->belongsTo(User::class,'updated_by');
    }
    public function deletedBy():BelongsTo {
        return $this->belongsTo(User::class,'deleted_by');
    }
    public function completedBy():BelongsTo {
        return $this->belongsTo(User::class,'completed_by');
    }
    public function reclutedBy():BelongsTo {
        return $this->belongsTo(User::class,'recluted_by');
    }
}
