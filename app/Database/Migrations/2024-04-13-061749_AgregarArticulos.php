<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarArticulos extends Migration
{
    public function up()
    {
        $this->forge->addColumn('articulos', [
            'created_at' => [
                'type' => 'DATETIME',
                'after' => 'publish_date'
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'after' => 'created_at'
            ],
        ]);
    

    }

    public function down()
    {
        $this->forge->dropColumn('articulos', 'updated_at');
        $this->forge->dropColumn('articulos', 'created_at');
    }
}
