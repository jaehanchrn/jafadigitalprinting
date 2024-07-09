<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Pulpen Standard AE7 Hitam (12 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 22000,
                'image' => asset('pictures/pulpen-standard-hitam.jpg'),
            ],
            [
                'name' => 'Pulpen Standard AE7 Biru (12 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 22000,
                'image' => asset('pictures/pulpen-standard-biru.jpg',)
            ],
            [
                'name' => 'Pulpen Standard AE7 Merah (12 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 22000,
                'image' => asset('pictures/pulpen-standard-merah.jpg',)
            ],

            [
                'name' => 'Pulpen Kenko Gel Pen K-1 Hitam (12 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 54000,
                'image' => asset('pictures/pulpen-kenko-k1.jpg',)
            ],
            [
                'name' => 'Buku Sinar Dunia 58halaman (10 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 40000,
                'image' => asset('pictures/buku-sidu-58.jpg',)
            ],
            [
                'name' => 'Buku Sinar Dunia 38halaman (10 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 35000,
                'image' => asset('pictures/buku-sidu-38.jpg',)
            ],
           
            [
                'name' => 'Buku Folio Bergaris 100halaman (5 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 90000,
                'image' => asset('pictures/buku-folio.jpg',)
            ],
            [
                'name' => 'Tipex Kertas Joyko (10 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 70000,
                'image' => asset('pictures/tipex-kertas-joyko.jpg',)
            ],
            [
                'name' => 'Kertas A4 70gsm (500pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 53000,
                'image' => asset('pictures/kertas-a4-70gsm.jpg',)
            ],

            [
                'name' => 'Kertas F4 70gsm (500pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 57000,
                'image' => asset('pictures/kertas-f4-70gsm.jpg',)
            ],
            [
                'name' => 'Photo Paper Glossy 120gsm (20pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 35000,
                'image' => asset('pictures/kertas-photo.jpg',)
            ],
            [
                'name' => 'Lakban Bening Daimaru 2 Inch (6 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 66000,
                'image' => asset('pictures/lakban-bening-2inch.jpg',)
            ],

            [
                'name' => 'Lakban Bening Daimaru 1 Inch (6 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 54000,
                'image' => asset('pictures/lakban-bening-1inch.jpg',)
            ],
            [
                'name' => 'Map Kertas Biola (25 pcs) warna merah',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 45000,
                'image' => asset('pictures/map-biola.jpg',)
            ],
            [
                'name' => 'Map Kertas Biola (25 pcs) warna biru',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 45000,
                'image' => asset('pictures/map-biola.jpg',)
            ],

            [
                'name' => 'Map Kertas Biola (25 pcs) warna hijau',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 45000,
                'image' => asset('pictures/map-biola.jpg',)
            ],
            [
                'name' => 'Kwitansi Paperline 32x10cm (10 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 48000,
                'image' => asset('pictures/kwitansi-besar.jpg',)
            ],
            [
                'name' => 'Kwitansi Paperline 28x9cm (10 pcs)',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 42000,
                'image' => asset('pictures/kwitansi-kecil.jpg',)
            ],

            [
                'name' => 'Amplop Putih Paperline 23x11cm',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 20000,
                'image' => asset('pictures/amplop-putih-besar.jpg',)
            ],
            [
                'name' => 'Amplop Putih Paperline 11,2x9,5cm',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 18000,
                'image' => asset('pictures/amplop-putih-kecil.jpg',)
            ],
            [
                'name' => 'Crayon Titi Kecil 12 Warna',
                // 'description' => 'Durable and strong transparent tape.',
                'price' => 18000,
                'image' => asset('pictures/krayon-titi-12.jpg',)
            ],
        ]);
    }
}
