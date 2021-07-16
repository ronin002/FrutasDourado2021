<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_produto extends Model
{
    use HasFactory;

    protected $table = 'tb_produtos';

    protected $fillable = ['descricao','unidade','NCM','GTIN','tipo'];
}
