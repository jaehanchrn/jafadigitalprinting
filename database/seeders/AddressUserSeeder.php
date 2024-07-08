<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\AddressUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = User::all();

        // Looping untuk setiap user
        foreach ($users as $user) {
            // Simpan alamat penerima untuk setiap user
            AddressUser::create([
                'user_id' => $user->id,
                'nama_penerima' => 'John Doe',
                'alamat_lengkap' => 'Jl. Raya No. 123',
                'nomor_handphone' => '08123456789',
                'email_penerima' => 'john.doe@example.com',
                'provinsi' => 'DKI Jakarta',
                'kota_kabupaten' => 'Jakarta Selatan',
                'kecamatan' => 'Kebayoran Lama',
                'kelurahan' => 'Pondok Pinang',
                'kode_pos' => '12345',
            ]);
        }
    }
}
