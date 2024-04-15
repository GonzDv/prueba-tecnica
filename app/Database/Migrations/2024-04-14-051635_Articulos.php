<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Articulos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'meta_titulo' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'meta_descripcion' => [
                'type' => 'TEXT',
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'descripcion' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'imagen' => [
                'type' => 'VARCHAR',
                'constraint' => '255', 
                'null' => true
            ],
            'contenido_articulo' => [
                'type' => 'TINYTEXT',
                'null' => true
            ],
            'publish_date' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'created_at timestamp default current_timestamp',
            'updated_at timestamp default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('articulos');
        
    }

    public function down()
    {
        $this->forge->dropTable('articulos');
    }
}
