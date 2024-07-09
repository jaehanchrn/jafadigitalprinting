<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Clear the users table before seeding
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();

        // Insert or update users to avoid duplicate email issues
        \App\Models\User::updateOrInsert(
            ['email' => 'jaehanchaerani75@gmail.com'],
            [
                'namalengkap' => 'Almiranda',
                'nomor_telepon' => '62895804560813',
                'tipe_akun' => 'Admin',
                'password' => Hash::make('tes12345'),
            ]
        );

        \App\Models\User::updateOrInsert(
            ['email' => 'fauzan75@gmail.com'],
            [
                'namalengkap' => 'Fauzan',
                'nomor_telepon' => '6287878787878',
                'tipe_akun' => 'User',
                'password' => Hash::make('tes12345'),
            ]
        );

        // Call other seeders
        $this->call([
            ProductSeeder::class,
        ]);
        $this->call([
            PricelistSeeder::class,
        ]);
    }
}
