<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Denuncia extends Model
{
    use HasFactory;

    protected $table = 'denuncias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_victim',
        'id_attendant',
        'latitude',
        'longitude',
        'status',
    ];

    public function victim(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'id_victim');
    }

    public function attendant(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'id_attendant');
    }

    public function protocol(): HasOne
    {
        return $this->HasOne(Protocolo::class, 'id_report');
    }
}
