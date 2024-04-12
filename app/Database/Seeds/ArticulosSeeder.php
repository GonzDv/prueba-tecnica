<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ArticulosSeeder extends Seeder
{
    public function run()
    {
        $data = array (
            [
                'meta_titulo' => 'Articulo 1',
                'meta_descripcion' => 'Descripcion del articulo 1',
                'titulo' => 'Titulo del articulo 1',
                'descripcion' => 'Descripcion del articulo 1',
                'imagen' => 'imagen1.jpg',
                'contenido_articulo' => 'Contenido del articulo 1',
                'publish_date' => '2022-04-11 06:13:47',
            ],
            [
                'meta_titulo' => 'Articulo 2',
                'meta_descripcion' => 'Descripcion del articulo 2',
                'titulo' => 'Titulo del articulo 2',
                'descripcion' => 'Descripcion del articulo 2',
                'imagen' => 'imagen2.jpg',
                'contenido_articulo' => 'Contenido del articulo 2',
                'publish_date' => '2022-04-11 06:13:47',
            ],
            [
                'meta_titulo' => 'Articulo 3',
                'meta_descripcion' => 'Descripcion del articulo 3',
                'titulo' => 'Titulo del articulo 3',
                'descripcion' => 'Descripcion del articulo 3',
                'imagen' => 'imagen3.jpg',
                'contenido_articulo' => 'Contenido del articulo 3',
                'publish_date' => '2022-04-11 06:13:47',
            ],
        
        );

        $this->db->table('articulos')->insertBatch($data);

    }
}
