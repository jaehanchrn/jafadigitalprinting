<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <div class="w-full h-fit relative bg-white">

        @include('partials.whatsapp')
        @include('partials.topheader')
        @include('partials.header')

        <!-- BODY -->
        <div class="w-full h-fit flex-col justify-start inline-flex py-20 px-16 gap-4">

            <div class="pb-4 text-blue-500  text-xl font-normal font-['Montserrat']">Beranda
                >
                <a class="text-blue-300 text-xl font-normal font-['Montserrat']">
                    Panduan Order
                </a>
            </div>

            <div class="w-full justify-center items-center flex relative bg-neutral-100 shadow-md shadow-neutral-300 border-neutral-200 border-2 rounded-[32px]">
                <div class="w-full flex-col inline-flex relative justify-center items-center px-20 py-8 gap-12">
                    <div
                        class="w-full flex justify-center items-center text-neutral-50  text-3xl font-bold font-['Montserrat'] bg-blue-500 py-6">
                        CARA ORDER
                        {{-- <div class="w-full justify-center items-center flex">
                        <div class="w-full border-2 border-neutral-400 "></div>
                    </div> --}}
                    </div>

                    <div
                        class="w-full flex-col flex relative justify-start items-start text-neutral-800  text-3xl font-bold font-['Montserrat']">

                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">1. Silahkan pilih menu <a
                                class="font-bold"> ‘Produk dan Jasa’ </a> kolom tabbing diatas.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">2. Pilih Kategori yang
                            anda inginkan.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">3. Jika anda memilih <a
                                class="font-bold"> ‘Jasa
                                Ketik & Desain’, </a> untuk saat ini pesanan tidak dapat dilakukan melalui website,
                            tetapi anda
                            dapat memesan melalui nomor whatsapp yang tersedia.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">4. Jika anda memilih <a
                                class="font-bold"> ‘Alat
                                Tulis & Kantor’, </a> anda dapat memilih produk yang anda butuhkan, anda dapat
                            memasukkan berapa
                            item yang anda inginkan dan mengklik ikon keranjang. Produk berhasil ditambahkan ke
                            keranjang belanja.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">5. Jika anda memilih <a
                                class="font-bold"> ‘Jasa
                                Cetak’, </a> maka akan muncul halaman Jasa Cetak Banner.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">6. Pilih <a
                                class="font-bold"> ‘Kategori Jasa
                                Cetak’ </a> dengan jasa yang anda inginkan.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">7. Silahkan isi data pada
                            kolom yang tersedia sesuai dengan kebutuhan anda. Jangan lupa untuk mengecek kolom deskripsi
                            terlebih dahulu.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">8. Jika sudah, silahkan
                            klik tombol <a class="font-bold"> ‘Tambah ke Keranjang’. </a>
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">9. Lakukan hal yang sama
                            jika anda ingin melakukan pesanan yang lain.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">10. Selanjutnya, klik ikon
                            keranjang yang terletak di paling atas.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">11. Kemudian, klik tombol
                            <a class="font-bold"> ‘Selanjutnya’ </a> lanjut ke proses data penerima.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">12. Masukkan data penerima
                            dan alamat yang sesuai untuk mengirim pesanan anda, jika sudah klik tombol <a
                                class="font-bold"> ‘Selanjutnya’. </a>
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">13. Kemudian, pilih opsi
                            pengiriman, dan klik <a class="font-bold"> ‘Selanjutnya’. </a>
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">14. Pada tahap ini, anda
                            perlu mentransfer nominal harga sesuai dengan yang tertera pada <a class="font-bold"> ‘Total
                                Harga Keseluruhan’, </a>
                            dan mengupload bukti berupa screenshoot pembayaran yang anda lakukan telah berhasil sesuai
                            nominal dan nomor rekening kami yang sudah tertera pada halaman tersebut.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">15. Klik tombol
                            <a class="font-bold"> ‘Konfirmasi’. </a>
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">16. Selanjutnya data sudah
                            berhasil dikirim, dan pesanan anda sedang dikonfirmasi oleh pihak kami. Proses konfimasi ini
                            akan dilakukan pada jam 08.00-18.00 WIB. Jika pesanan anda lewat dari jam tersebut, maka
                            kami akan melakukan konfirmasi pada hari kerja berikutnya.
                        </div>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">17. Anda dapat melihat
                            status pesanan anda di <a class="font-bold"> ‘Profil’ </a> anda, dengan menekan tombol nama
                            anda di samping tombol
                            keranjang.
                        </div>

                    </div>

                    <div
                        class="w-full flex justify-center items-center text-neutral-50  text-3xl font-bold font-['Montserrat'] bg-blue-500 py-6">
                        PANDUAN DESAIN UNTUK JASA CETAK
                        {{-- <div class="w-full justify-center items-center flex">
                        <div class="w-full border-2 border-neutral-400 "></div>
                    </div> --}}
                    </div>

                    <div
                        class="w-full flex-col flex relative justify-start items-start text-neutral-800  text-3xl font-bold font-['Montserrat']">

                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">Pada setiap pesanan jasa
                            cetak, anda perlu menambahkan file desain yang ingin anda cetak. Namun, ada beberapa hal
                            yang perlu diperhatikan agar hasil cetak dapat maksimal sesuai dengan yang anda inginkan.
                        </div>
                        <br>

                        <div class="text-neutral-800 text-3xl font-bold font-['Montserrat']">PENGATURAN WARNA PADA FILE
                        </div>
                        <br>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">Dalam pembuatan desain,
                            preview pada layar monitor tidak bisa menjadi acuan pasti untuk hasil cetak nantinya. Setiap
                            layar monitor memiliki resolusi warna yang berbeda atau disebut dengan <a
                                class="font-bold">RGB. </a> Maka kami sangat
                            menyarankan untuk <a class="font-bold">mengubah file digital anda menjadi CMYK </a> untuk
                            mendapatkan hasil warna yang
                            lebih sesuai dengan warna aslinya.
                        </div>
                        <br>

                        <div class="text-neutral-800 text-3xl font-bold font-['Montserrat']">RESOLUSI GAMBAR
                        </div>
                        <br>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">Untuk resolusi gambar,
                            kami sangat menyarankan menggunakan resolusi <a class="font-bold"> 300 dpi. </a>
                        </div>
                        <br>

                        <div class="text-neutral-800 text-3xl font-bold font-['Montserrat']">BATAS KERTAS
                        </div>
                        <br>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">Untuk mendapatkan hasil
                            cetak yang lebih maksimal, anda dapat membuat desain dengan batas pinggir antara gambar
                            dengan pinggir halaman, dengan <a class="font-bold"> jarak 0,3cm </a> agar tidak terjadi
                            pemotongan lebih dengan gambar
                            utama.
                        </div>
                        <br>

                        <div class="text-neutral-800 text-3xl font-bold font-['Montserrat']">PENGATURAN FILE YANG
                            DIUNGGAH
                        </div>
                        <br>
                        <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">Anda dapat mengirimkan
                            berupa file <a class="font-bold"> offline dokumen </a> tersebut, seperti .ai, .psd, .cdr,
                            .pdf, .jpg, .png, .tiff, dan
                            lainnya.
                            Pastikan <a class="font-bold"> font </a> digunakan <a class="font-bold"> dapat terbaca
                            </a> oleh kami.
                            Mode warna file yaitu <a class="font-bold"> CMYK. </a>
                            Jika ada catatan tambahan mengenai cetak tersebut, anda dapat menuliskan pada kolom <a
                                class="font-bold"> ‘Catatan
                                Tambahan’ </a> pada halaman pemesanan.
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <!-- FOOTER -->
        @include('partials.footer')
    </div>
</body>

</html>
