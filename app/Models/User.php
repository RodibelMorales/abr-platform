<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable //implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'middle_name',
        'last_name',
        'gender',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function surveyCreatedBy():HasMany{
        return $this->hasMany(Survey::class,'created_by');
    }
    public function surveyAprovebedBy():HasMany{
        return $this->hasMany(Survey::class,'aprovebed_by');
    }
    public function surveyUpdatedBy():HasMany{
        return $this->hasMany(Survey::class,'updated_by');
    }
    public function surveyDeletedBy():HasMany{
        return $this->hasMany(Survey::class,'deleted_by');
    }
    public function surveyCompletedBy():HasMany{
        return $this->hasMany(Survey::class,'completed_by');
    }
    public function surveyReclutedBy():HasMany{
        return $this->hasMany(Survey::class,'recluted_by');
    }
}
