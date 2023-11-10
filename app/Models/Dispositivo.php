<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Dispositivo extends Model
{
    use HasFactory;

    protected $table = 'dispositivos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [];

    public function victim(): HasOne
    {
        return $this->hasOne(User::class, 'id_device')->latestOfMany();
    }
}
