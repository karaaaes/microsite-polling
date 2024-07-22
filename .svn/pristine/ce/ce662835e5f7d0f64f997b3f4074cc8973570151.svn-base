<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTContentTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
            ],
            'usia' => [
                'type'       => 'INT',
                'constraint' => 2,
                'null'       => false,
            ],
            'domisili' => [
                'type'       => 'INT',
                'constraint' => 1,
                'null'       => false,
                'comment'    => '0 = Jabodetabek, 1 = Luar Jabodetabek',
            ],
            'is_buy' => [
                'type'       => 'INT',
                'constraint' => 1,
                'null'       => false,
                'comment'    => '0 = Tidak, 1 = Ya',
            ],
            'deskripsi' => [
                'type'    => 'TEXT',
                'null'    => true,
                'default' => '',
            ],
            'frekuensi' => [
                'type'       => 'VARCHAR',
                'constraint' => 1,
                'null'       => true,
                'default'    => '',
                'comment'    => '0 = 1-2 Kali, 1 = 3-4 Kali, 2 = > 5 Kali',
            ],
            'faktor' => [
                'type'    => 'TEXT',
                'null'    => true,
                'default' => '',
            ],
            'date_created' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('t_content');
    }

    public function down()
    {
        $this->forge->dropTable('t_content');
    }
}
