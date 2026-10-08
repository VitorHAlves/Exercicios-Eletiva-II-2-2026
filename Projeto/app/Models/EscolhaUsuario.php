<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EscolhaUsuario extends Model
{
    protected $table = 'escolha_usuarios';//nome da tabela criada na db

    protected $fillable = [//proteção para atribuição
        'user_id',
        'cenario_id',
        'acao_tomada',
    ];

    public function cenario()
    {
        return $this->belongsTo(Cenario::class);
    }
}
