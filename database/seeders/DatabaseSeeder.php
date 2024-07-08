<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'namalengkap' => 'Almiranda',
            'nomor_telepon' => '62895804560813',
            'tipe_akun' => 'Admin',
            'email' => 'jaehanchaerani75@gmail.com',
            'password' => 'tes12345',
        ]);

        \App\Models\User::factory()->create([
            'namalengkap' => 'Fauzan',
            'nomor_telepon' => '6287878787878',
            'tipe_akun' => 'User',
            'email' => 'fauzan75@gmail.com',
            'password' => 'tes12345',
        ]);
        $this->call([
            ProductSeeder::class,
        ]);
        $this->call([
            PricelistSeeder::class,
        ]);
    }
    
}
