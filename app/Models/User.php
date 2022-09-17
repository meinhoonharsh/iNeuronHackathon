<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

function getUniqueUsername($username)
{
    $user = User::where('username', $username)->first();
    if ($user) {
        $username = $username . rand(1, 9);
        return getUniqueUsername($username);
    } else {
        return $username;
    }
}
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'profile_photo_path',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // If id is not present while creating a new user, then generate a random id.
    public static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            if (!$user->username) {
                $email = explode('@', $user->email);
                $username = $email[0];
                $user->username = getUniqueUsername($username);
            }
        });
    }

    public function getProfilePhotoPathAttribute($value)
    {
        // MANAGE PUBLIC OR LOCAL LINKS AND NULL
        if ($value) {
            return $value;
        } else {
            return 'https://ui-avatars.com/api/?name=' . $this->name;
        }
    }
}
