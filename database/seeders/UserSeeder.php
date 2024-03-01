<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodata')->insert([
            'nim' => 'E' . random_int(00000000, 11111111),
            'nama' => fake()->name(),
            'prodi' => 'Teknik Informatika',
            'alamat' => fake()->address(),
            'telpon' => fake()->phoneNumber(),
            'ttl' => '2030-01-01',
        ]);
    }
}
