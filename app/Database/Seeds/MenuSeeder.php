<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $data = [

            [
                'nama_menu' => 'Nasi Goreng',
                'kategori' => 'Makanan',
                'harga' => 15000,
                'stok' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'nama_menu' => 'Mie Rebus',
                'kategori' => 'Makanan',
                'harga' => 12000,
                'stok' => 15,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'nama_menu' => 'Indomie Goreng',
                'kategori' => 'Makanan',
                'harga' => 13000,
                'stok' => 25,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'nama_menu' => 'Es Teh',
                'kategori' => 'Minuman',
                'harga' => 5000,
                'stok' => 30,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'nama_menu' => 'Kopi Hitam',
                'kategori' => 'Minuman',
                'harga' => 7000,
                'stok' => 18,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];

        $this->db->table('menu')->insertBatch($data);
    }
}