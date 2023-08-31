<?php

namespace App\Models;

use App\Models\PedidoItems;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    use HasFactory;

    public function relatedItems()
    {
        return $this->hasMany(PedidoItems::class,'pedido_id', 'id');
    }
}
