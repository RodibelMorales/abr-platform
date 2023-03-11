<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'type',
        'category'
    ];
    public function familyExpenses():BelongsToMany {
        return $this->belongsToMany(FamilyExpenses::class,'candidate_id','question_id')->withTimestamps();;
    }
    public function medicalInfo():BelongsToMany {
        return $this->belongsToMany(MedicalInfo::class,'candidate_id','question_id')->withTimestamps();;
    }
    public function academicSkill():BelongsToMany {
        return $this->belongsToMany(AcademicSkill::class,'candidate_id','question_id')->withTimestamps();;
    }
}
