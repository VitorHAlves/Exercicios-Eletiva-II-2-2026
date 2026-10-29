<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cenario extends Model
{
    public function mecanismos(): BelongsToMany
    {
        return $this->belongsToMany(
            Mecanismo::class,
            'cenario_mecanismo',
            'cenario_id',
            'mecanismo_id'
        )->withPivot('explicacao');
    }
}