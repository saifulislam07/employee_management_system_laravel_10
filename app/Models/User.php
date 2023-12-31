<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'mobile_number',
        'department_id',
        'designation',
        // 'role_id',
        'image',
        'start_from',
        'name_bn',
        'father_name',
        'mother_name',
        'dob',
        'emergency_number',
        'relationship_number',
        'driving_license',
        'bcs_batch',
        'join_date',
        'permanent_date',
        'permanent_doc',
        'freedom_fighter',
        'gradation_no',
        'basic_salary',
        'country_id',
        'district_id',
        'birth_no',
        'blood_id',
        'gender',
        'marital_status_id',
        'religion_id',
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
        'password' => 'hashed',
    ];

    public function department()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }
    public function blood()
    {
        return $this->hasOne(Blood::class, 'id', 'blood_id');
    }
    public function religion()
    {
        return $this->hasOne(Religion::class, 'id', 'religion_id');
    }
    public function marital()
    {
        return $this->hasOne(Marital::class, 'id', 'marital_status_id');
    }

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }
}
