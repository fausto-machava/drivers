<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($multa) {
            $multa->codigo_multa = $multa->artigo . '_' . date('Ymd') . '_' . date('His');
        });
    }
}
