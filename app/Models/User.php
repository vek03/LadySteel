<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_device',
        'id_supervisor',
        'id_type',
        'name',
        'lastname',
        'username',
        'email',
        'password',
        'message',
        'birthday',
        'img',
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


    /**
     * Relationships
     *
     * 
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(Contato::class, 'id_user');
    }

    public function device(): BelongsTo
    {
        return $this->belongsTo(Dispositivo::class, 'id_device');
    }

    public function supervisor(): HasMany
    {
        return $this->hasMany(User::class, 'id_supervisor');
    }

    public function attendants(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_supervisor');
    }

    public function report_attendant(): HasMany
    {
        return $this->hasMany(Denuncia::class, 'id_attendant');
    }
}
