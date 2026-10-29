<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mecanismo extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'descricao',
    ];

    public function cenarios(): BelongsToMany
    {
        return $this->belongsToMany(
            Cenario::class,
            'cenario_mecanismo',
            'mecanismo_id',
            'cenario_id'
        )->withPivot('explicacao');
    }
}