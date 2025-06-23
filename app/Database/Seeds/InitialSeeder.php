<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitialSeeder extends Seeder
{
    public function run()
    {
        $userData = [
            'username' => 'admin',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'role' => 'admin'
        ];

        $this->db->table('users')->insert($userData);

        $categories = ['Resmi', 'Tidak Resmi', 'Pengumuman'];
        foreach ($categories as $name) {
            $this->db->table('categories')->insert(['name' => $name]);
        }
    }
}
