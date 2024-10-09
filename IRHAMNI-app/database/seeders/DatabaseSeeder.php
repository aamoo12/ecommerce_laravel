<?php

namespace Database\Seeders;

use App\Models\Skripsi;
use App\Models\User;
use App\Models\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       /* User::create([
            'name' => 'user1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
            'point' => 10000,
        ]);

        Admin::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
        ]);*/

        Skripsi::create([
            'judul' => 'Pengembangbiakan Lele Air Tawar Menggunakan Makanan dari Kotoran Manusia',
            'nama' => 'Ahmed Fadlu',
            'nim' => '6304',
            'angkatan' => '2022',
            'dosen_pembimbing_1' => 'Pak Fajri',
            'dosen_pembimbing_2' => 'Buk Elvi',

        ]);
    }
}
