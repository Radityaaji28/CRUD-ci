<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kendaraan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kendaraan' => [
                'type'           => 'smallint',
                'auto_increment' => true,
            ],
            'no_kendaraan' => [
                'type'       => 'VARCHAR',
                'constraint' => '9',
            ],
            'status_kendaraan' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'harga_sewa' => [
                'type' => 'INT',
                'null' => true,
            ],
            'merk' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'jenis_bbm' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
                'null' => true,
            ],
            'jenis_kendaraan' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ]
            
        ]);
        $this->forge->addKey('id_kendaraan', true);
        $this->forge->createTable('kendaraanku');
    }

    public function down()
    {
        $this->forge->dropTable('kendaraanku');
    }
}
