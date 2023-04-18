<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblConfig extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_config'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false,
            ], 'name_config'          => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],'cost_config'          => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],'status_config'          => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'year_act'       => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
                'null' => false,
            ],
            'company'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'created_at' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'TEXT',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id_config', true);
        $this->forge->createTable('tbl_config');

    }

    public function down()
    {
        //
    }
}
