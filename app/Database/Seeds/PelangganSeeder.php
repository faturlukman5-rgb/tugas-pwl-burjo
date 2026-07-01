<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        $data = [

            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Semarang',
                'telepon' => '081234567890',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'nama' => 'Siti Aminah',
                'alamat' => 'Demak',
                'telepon' => '081298765432',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'nama' => 'Andi Pratama',
                'alamat' => 'Kudus',
                'telepon' => '082112223333',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];

        $this->db->table('pelanggan')->insertBatch($data);
    }
}