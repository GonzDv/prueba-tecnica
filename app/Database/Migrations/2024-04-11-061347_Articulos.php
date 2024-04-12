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
                'type' => 'TEXT',
                'null' => true
            ],
            'publish_date' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('articulos');
    }

    public function down()
    {
        $this->forge->dropTable('articulos');
    }
}
