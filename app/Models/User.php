<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rg',
        'born_date',
        'work_place',
        'hire_start',
        'cpf',
        'hire_status',
        'phone',
        'trading_name',
        'address',
        'bloc',
        'city',
        'postal_code',
        'cnpj',
        'status',
        'rescission',
        'no_creci',
        'creci_exp',
        'hire_end'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'born_date',
        'hire_start',
        'hire_end'
    ];
}
