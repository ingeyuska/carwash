<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '081234567891',
            'password' => bcrypt('P@55word'),
        ]);
        User::create([
            'nama' => 'Sopian Aji',
            'email' => 'sopianaji@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '081234567892',
            'password' => bcrypt('P@55word'),
        ]);
        User::create([
            'nama' => 'Vernanda',
            'email' => 'Vernanda@gmail.com',
            'role' => '2',
            'status' => 0,
            'hp' => '081234567893',
            'password' => bcrypt('P@55word'),
        ]);
        User::create([
            'nama' => 'Inge',
            'email' => 'Inge@gmail.com',
            'role' => '2',
            'status' => 0,
            'hp' => '081234567894',
            'password' => bcrypt('P@55word'),
        ]);
    }
}
