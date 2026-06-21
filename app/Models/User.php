<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Location;
use App\Models\Position;
use App\Models\Group;
use App\Models\Role;
use App\Models\Permission;
use App\Models\PrayerRequest;
use App\Models\Testimony;
use App\Models\AttendanceRecord;
use App\Models\ProgrammeRegistration;

#[Fillable([
    'name','email','password',
    'first_name','last_name','middle_name','gender','date_of_birth','phone','photo','address','city','state_id','country_id',
    'marital_status','occupation','membership_status','membership_date','baptism_date','salvation_date',
    'emergency_contact_name','emergency_contact_phone','can_login','notes'
])]
#[Hidden(['password', 'two_factor_secret', 'two_factor_recovery_codes', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * Date attributes
     *
     * @var array<int, string>
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'membership_status' => 'string',
            'gender' => 'string',
            'marital_status' => 'string',
            'date_of_birth' => 'date',
            'membership_date' => 'date',
            'baptism_date' => 'date',
            'salvation_date' => 'date',
            'can_login' => 'boolean',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn ($word) => Str::substr($word, 0, 1))
            ->implode('');
    }

    // Relationships
    public function location()
    {
        return $this->belongsToMany(Location::class, 'location_user', 'user_id', 'location_id')
            ->withPivot('is_primary','joined_date')
            ->withTimestamps();
    }

    public function positions()
    {
        return $this->belongsToMany(Position::class, 'position_user', 'user_id', 'position_id')
            ->withPivot('location_id','assigned_date','end_date','is_active')
            ->withTimestamps();
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_user', 'user_id', 'group_id')
            ->withPivot('role','joined_date')
            ->withTimestamps();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id')->withTimestamps();
    }

    /**
     * Permissions via roles — returns a collection of Permission models.
     */
    public function permissions()
    {
        // return a collection (not a relation) of unique permissions for the user's roles
        return Permission::whereIn('id', function ($q) {
            $q->select('permission_id')->from('permission_role')->whereIn('role_id', function ($q2) {
                $q2->select('role_id')->from('role_user')->where('user_id', $this->id);
            });
        })->get();
    }

    public function prayerRequests()
    {
        return $this->hasMany(PrayerRequest::class, 'user_id');
    }

    public function testimonies()
    {
        return $this->hasMany(Testimony::class, 'user_id');
    }

    public function attendanceRecords()
    {
        return $this->hasMany(AttendanceRecord::class, 'user_id');
    }

    public function programmeRegistrations()
    {
        return $this->hasMany(ProgrammeRegistration::class, 'user_id');
    }
}
