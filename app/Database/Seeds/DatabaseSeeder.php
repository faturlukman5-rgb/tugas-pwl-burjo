<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('MenuSeeder');

        $this->call('PelangganSeeder');

        $this->call('UserSeeder');
    }
}