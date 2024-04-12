<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticuloModel extends Model
{
    protected $table = 'articulos';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'meta_titulo',
        'meta_descripcion',
        'titulo',
        'descripcion',
        'imagen',
        'contenido_articulo',
        'publish_date',
    ];

    
}
