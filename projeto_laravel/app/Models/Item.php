<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor_id'];
    //1-1
    public function ItemDetalhe(){
        return $this->hasOne('App\Models\ItemDetalhe', 'produto_id', 'id');
    }
    //1-N
    public function fornecedor(){
        return $this->belongsTo('App\Models\Fornecedor');
    }
    
    public function pedidos(){
        return $this->belongsToMany('App\Models\Pedido', 'pedido_produtos', 'produto_id', 'pedido_id');
    }


}
