<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'birthday',
        'born_place',
        'gender',
        'nationality',
        'civil_state'
    ];
    public function people():BelongsTo {
        return $this->belongsTo(People::class);
    }
    public function survey():HasMany {
        return $this->hasMany(Survey::class);
    }
    public function picture():HasMany {
        return $this->hasMany(Picture::class);
    }
    public function creditInformation():HasMany {
        return $this->hasMany(CreditInformation::class);
    }
    public function vehicle():HasMany {
        return $this->hasMany(Vehicle::class);
    }
    public function IncomeFamily():HasMany {
        return $this->hasMany(IncomeFamily::class);
    }
    public function familiarInfo():HasMany {
        return $this->hasMany(FamiliarInfo::class);
    }
    public function familyExpenses():BelongsToMany {
        return $this->belongsToMany(FamilyExpenses::class,'candidate_id','question_id')->withTimestamps();
    }
    public function medicalInfo():BelongsToMany {
        return $this->belongsToMany(MedicalInfo::class,'candidate_id','question_id')->withTimestamps();;
    }
    public function academicSkill():BelongsToMany {
        return $this->belongsToMany(AcademicSkill::class,'candidate_id','question_id')->withTimestamps();;
    }
    public function finalcialDepent():HasMany {
        return $this->hasMany(FinalcialDepent::class);
    }
    public function imss():HasOne {
        return $this->hasOne(Imss::class);
    }
    public function otherReference():HasMany {
        return $this->hasMany(OtherReference::class);
    }
    public function laboralReference():HasMany {
        return $this->hasMany(LaboralReference::class);
    }
}
