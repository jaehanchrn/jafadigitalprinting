<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PricelistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pricelists')->insert([
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Babakan Madang',
                'price' => 24000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Bojonggede',
                'price' => 7000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Ciampea',
                'price' => 36000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Cibinong',
                'price' => 8000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Ciseeng',
                'price' => 30000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Citeureup',
                'price' => 34000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Dramaga',
                'price' => 30000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Gunung Putri',
                'price' => 34000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Kemang',
                'price' => 22000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Parung',
                'price' => 30000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Rancabungur',
                'price' => 32000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Sukaraja',
                'price' => 9000,
            ],
            [
                'name_city' => 'Kabupaten Bogor',
                'name_disctrict' => 'Tajurhalang',
                'price' => 22000,
            ],
            [
                'name_city' => 'Kota Bogor',
                'name_disctrict' => 'Bogor Barat',
                'price' => 24000,
            ],
            [
                'name_city' => 'Kota Bogor',
                'name_disctrict' => 'Bogor Selatan',
                'price' => 32000,
            ],
            [
                'name_city' => 'Kota Bogor',
                'name_disctrict' => 'Bogor Tengah',
                'price' => 26000,
            ],
            [
                'name_city' => 'Kota Bogor',
                'name_disctrict' => 'Bogor Timur',
                'price' => 30000,
            ],
            [
                'name_city' => 'Kota Bogor',
                'name_disctrict' => 'Bogor Utara',
                'price' => 18000,
            ],
            [
                'name_city' => 'Kota Bogor',
                'name_disctrict' => 'Tanah Sereal',
                'price' => 20000,
            ],
            // Tambahkan produk lainnya di sini
        ]);
    }
}
