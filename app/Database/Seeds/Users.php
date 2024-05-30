<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Users extends Seeder
{
    public function run()
    {
        //lakukan perulangan data
        for ($i = 0; $i < 10; $i++) {
        $data = [
        [
            'username' => 'Bibit Raikhan Azzakki',
            'password' => '22SA11A021',
            'firstname' => 'Bibit',
            'lastname' => 'Azzaki',
            'address' => 'Karangkobar, Banjarnegara',
            'age' => '18',
        ],
        [
            'username' => 'Jefri Nichol',
            'password' => '22SA11A000',
            'firstname' => 'Jefri',
            'lastname' => 'Nichol',
            'address' => 'Padang',
            'age' => '19',
        ]
        ];
        // insert semua data ke tabel
        $this->db->table('users')->insertBatch($data);
        //singgle insert
        //->insert($data);
        //multiple insert
        //->insertBatch($data);
        }
    }
}
