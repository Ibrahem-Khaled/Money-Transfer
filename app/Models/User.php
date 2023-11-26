<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'boxnumber',
        'information',
        'city',
        'contry',
        'phone',
        'username',
        'password',
        'is_admin',
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
        'phone_verified_at' => 'datetime',
    ];

    public function accounts() {
        return $this->hasMany(Account::class);
    }

    public function contacts() {
        return $this->hasMany(Contact::class);
    }

    public function transactions() {
        return $this->hasManyThrough(
            Transaction::class,
            Account::class,
            'user_id',
            'account_no',
            'id',
            'account_no'
            );
    }
}
