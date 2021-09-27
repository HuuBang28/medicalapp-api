<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Patient extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'email',
        'phone',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Belongs To Many Relation - Eloquent Relation for Counselor
     *
     * @return void
     */
    public function counselors() {
        return $this->belongsToMany(Counselor::class);
    }
    public function counpons() {
        return $this->hasMany(Coupon::class);
    }
    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
    public function feedback() {
        return $this->hasMany(Feedback::class);
    }
    public function orders() {
        return $this->hasMany(Order::class);
    }
}
