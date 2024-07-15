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

        @include('partials.topheader')
        @include('partials.header')

        <!-- BODY -->

        <div class="w-full flex-col justify-center items-center flex py-16 gap-8">

            <div class="w-full flex-col flex justify-start items-start px-12 ">
                <div><span class="text-blue-500 text-xl font-normal font-['Montserrat']">Beranda >
                    </span>
                    <span class="text-blue-300 text-xl font-normal font-['Montserrat']"> Riwayat Pesanan
                    </span>
                </div>
            </div>

            <div class="w-full flex flex-row justify-between px-12 gap-12">
                @include('partials.akunsaya-navigasi')

                <div class="w-full items-start">
                    <div class="w-full">
                        <div class="w-full justify-start items-start flex-col flex gap-9">
                            <div
                                class=" justify-start items-start text-neutral-800 text-6xl font-normal font-['Montserrat']  ">
                                RIWAYAT PESANAN
                            </div>


                            <div class="w-full  justify-start items-start flex">
                                <div
                                    class="w-full rounded-full border-2 border-neutral-300  items-start inline-flex">
                                </div>
                            </div>

                            {{-- <div class="w-full justify-start items-start inline-flex">
                                <div class="gap-20 inline-flex">
                                    <button class="flex-col justify-start items-center inline-flex">
                                        <div
                                            class="text-blue-500 hover:text-yellow-500 underline text-xl font-normal font-['Montserrat']">
                                            Verifikasi</div>
                                    </button>
                                    <button class="flex-col justify-start items-center inline-flex">
                                        <div
                                            class="text-blue-500 hover:text-yellow-500 underline text-xl font-normal font-['Montserrat']">
                                            Diproses</div>
                                    </button>
                                    <button class="flex-col justify-start items-center inline-flex">
                                        <div
                                            class="text-blue-500 hover:text-yellow-500 underline text-xl font-normal font-['Montserrat']">
                                            Sedang Dikirim</div>
                                    </button>
                                    <button class="flex-col justify-start items-center inline-flex">
                                        <div
                                            class="text-blue-500 hover:text-yellow-500 underline text-xl font-normal font-['Montserrat']">
                                            Berhasil</div>
                                    </button>
                                    <button class="flex-col justify-start items-center inline-flex">
                                        <div
                                            class="text-blue-500 hover:text-yellow-500 underline text-xl font-normal font-['Montserrat']">
                                            Tidak Berhasil</div>
                                    </button>
                                </div>
                            </div> --}}

                            <div
                                class="w-full relative bg-neutral-100 shadow-neutral-300 shadow-md rounded-xl flex-col inline-flex p-8 text-justify">

                                <div class="text-red-500 text-xl font-normal font-['Montserrat']">Mohon maaf, saat
                                    ini belum ada pesanan.
                                </div>

                            </div>

                            <div
                                class="w-full relative bg-neutral-100 shadow-neutral-300 shadow-md rounded-xl flex-col inline-flex py-8 ">
                                <div class="w-full relative bg-neutral-100 flex-col inline-flex gap-4">

                                    <div
                                        class="w-full relative bg-orange-500 flex-row flex justify-center items-center px-10 py-2 font-semibold text-l text-neutral-50 font-['Montserrat']">
                                        <div class="w-full relative justify-start items-center flex">12 Januari 2024
                                        </div>
                                        <div class="w-full relative justify-end items-center flex">INV/120124/00010001
                                        </div>
                                    </div>

                                    <div
                                        class="w-full relative flex-col flex justify-start items-start px-10 gap-1 font-normal font-['Montserrat']">
                                        <div class="w-full relative text-xl text-blue-500 font-semibold ">
                                            Almiranda Jaihan Chairani
                                        </div>
                                        <div class="w-full relative text-l text-blue-400">
                                            Banner (1x2m), dan lainnya
                                        </div>
                                        <div class="w-full relative text-l text-neutral-800">
                                            Perum BDB 2, Cibinong, Kabupaten Bogor, Jawa Barat
                                        </div>
                                    </div>

                                    <div class="w-full relative justify-end items-end flex px-10">
                                        <div class="justify-center items-center flex flex-col">
                                            <div class="w-full relative justify-center flex text-l text-neutral-800">
                                                Total Harga Keseluruhan
                                            </div>
                                            <div
                                                class="w-full relative justify-center flex text-3xl font-bold text-neutral-800">
                                                Rp 140.0000
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full relative flex-row flex">
                                        <div class="w-full relative justify-start items-center flex px-10">
                                            <button
                                                class="px-5 py-3 gap-4 bg-neutral-50 rounded-[10px] border-2 border-blue-500 inline-flex hover:opacity-75">
                                                {{-- <i class="ph-bold ph-arrow-left  text-blue-500 text-3xl"></i> --}}
                                                <div
                                                    class="text-center text-blue-500 text-xl font-bold font-['Montserrat']">
                                                    Batalkan Pesanan
                                                </div>
                                            </button>
                                        </div>

                                        <div class="w-full relative justify-end items-center flex px-10 gap-6">

                                            <button onclick="window.location.href='/' "
                                                class="text-center text-blue-500 hover:text-blue-400  text-xl font-normal font-['Montserrat'] underline">
                                                Detail Pesanan
                                            </button>


                                            <button
                                                class="px-5 py-3  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                                                <div class=" text-neutral-100 text-xl font-normal font-['Montserrat']">
                                                    Chat Kami
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div
                                class="w-full relative bg-neutral-100 shadow-neutral-300 shadow-md rounded-xl flex-col inline-flex py-8 ">
                                <div class="w-full relative bg-neutral-100 flex-col inline-flex gap-4">

                                    <div
                                        class="w-full relative bg-orange-500 flex-row flex justify-center items-center px-10 py-2 font-semibold text-l text-neutral-50 font-['Montserrat']">
                                        <div class="w-full relative justify-start items-center flex">12 Januari 2024
                                        </div>
                                        <div class="w-full relative justify-end items-center flex">INV/120124/00010001
                                        </div>
                                    </div>

                                    <div
                                        class="w-full relative flex-col flex justify-start items-start px-10 gap-1 font-normal font-['Montserrat']">
                                        <div class="w-full relative text-xl text-blue-500 font-semibold ">
                                            Almiranda Jaihan Chairani
                                        </div>
                                        <div class="w-full relative text-l text-blue-400">
                                            Banner (1x2m), dan lainnya
                                        </div>
                                        <div class="w-full relative text-l text-neutral-800">
                                            Perum BDB 2, Cibinong, Kabupaten Bogor, Jawa Barat
                                        </div>
                                    </div>

                                    <div class="w-full relative justify-end items-end flex px-10">
                                        <div class="justify-center items-center flex flex-col">
                                            <div class="w-full relative justify-center flex text-l text-neutral-800">
                                                Total Harga Keseluruhan
                                            </div>
                                            <div
                                                class="w-full relative justify-center flex text-3xl font-bold text-neutral-800">
                                                Rp 140.0000
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full relative flex-row flex">
                                        <div class="w-full relative justify-start items-center flex px-10">

                                            <div
                                                class="text-center text-green-500 text-xl font-bold font-['Montserrat']">
                                                SEDANG DIKERJAKAN
                                            </div>

                                        </div>

                                        <div class="w-full relative justify-end items-center flex px-10 gap-6">

                                            <button onclick="window.location.href='/' "
                                                class="text-center text-blue-500 hover:text-blue-400  text-xl font-normal font-['Montserrat'] underline">
                                                Detail Pesanan
                                            </button>


                                            <button
                                                class="px-5 py-3  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                                                <div class=" text-neutral-100 text-xl font-normal font-['Montserrat']">
                                                    Chat Kami
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div
                                class="w-full relative bg-neutral-100 shadow-neutral-300 shadow-md rounded-xl flex-col inline-flex py-8 ">
                                <div class="w-full relative bg-neutral-100 flex-col inline-flex gap-4">

                                    <div
                                        class="w-full relative bg-orange-500 flex-row flex justify-center items-center px-10 py-2 font-semibold text-l text-neutral-50 font-['Montserrat']">
                                        <div class="w-full relative justify-start items-center flex">12 Januari 2024
                                        </div>
                                        <div class="w-full relative justify-end items-center flex">INV/120124/00010001
                                        </div>
                                    </div>

                                    <div
                                        class="w-full relative flex-col flex justify-start items-start px-10 gap-1 font-normal font-['Montserrat']">
                                        <div class="w-full relative text-xl text-blue-500 font-semibold ">
                                            Almiranda Jaihan Chairani
                                        </div>
                                        <div class="w-full relative text-l text-blue-400">
                                            Banner (1x2m), dan lainnya
                                        </div>
                                        <div class="w-full relative text-l text-neutral-800">
                                            Perum BDB 2, Cibinong, Kabupaten Bogor, Jawa Barat
                                        </div>
                                    </div>

                                    <div class="w-full relative justify-end items-end flex px-10">
                                        <div class="justify-center items-center flex flex-col">
                                            <div class="w-full relative justify-center flex text-l text-neutral-800">
                                                Total Harga Keseluruhan
                                            </div>
                                            <div
                                                class="w-full relative justify-center flex text-3xl font-bold text-neutral-800">
                                                Rp 140.0000
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full relative flex-row flex">
                                        <div class="w-full relative justify-start items-center flex px-10">

                                            <div
                                                class="text-center text-green-500 text-xl font-bold font-['Montserrat']">
                                                SEDANG DIKIRIM OLEH KURIR
                                            </div>

                                        </div>

                                        <div class="w-full relative justify-end items-center flex px-10 gap-6">

                                            <button onclick="window.location.href='/' "
                                                class="text-center text-blue-500 hover:text-blue-400  text-xl font-normal font-['Montserrat'] underline">
                                                Detail Pesanan
                                            </button>


                                            <button
                                                class="px-5 py-3  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                                                <div class=" text-neutral-100 text-xl font-normal font-['Montserrat']">
                                                    Chat Kami
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div
                                class="w-full relative bg-neutral-100 shadow-neutral-300 shadow-md rounded-xl flex-col inline-flex py-8 ">
                                <div class="w-full relative bg-neutral-100 flex-col inline-flex gap-4">

                                    <div
                                        class="w-full relative bg-orange-500 flex-row flex justify-center items-center px-10 py-2 font-semibold text-l text-neutral-50 font-['Montserrat']">
                                        <div class="w-full relative justify-start items-center flex">12 Januari 2024
                                        </div>
                                        <div class="w-full relative justify-end items-center flex">INV/120124/00010001
                                        </div>
                                    </div>

                                    <div
                                        class="w-full relative flex-col flex justify-start items-start px-10 gap-1 font-normal font-['Montserrat']">
                                        <div class="w-full relative text-xl text-blue-500 font-semibold ">
                                            Almiranda Jaihan Chairani
                                        </div>
                                        <div class="w-full relative text-l text-blue-400">
                                            Banner (1x2m), dan lainnya
                                        </div>
                                        <div class="w-full relative text-l text-neutral-800">
                                            Perum BDB 2, Cibinong, Kabupaten Bogor, Jawa Barat
                                        </div>
                                    </div>

                                    <div class="w-full relative justify-end items-end flex px-10">
                                        <div class="justify-center items-center flex flex-col">
                                            <div class="w-full relative justify-center flex text-l text-neutral-800">
                                                Total Harga Keseluruhan
                                            </div>
                                            <div
                                                class="w-full relative justify-center flex text-3xl font-bold text-neutral-800">
                                                Rp 140.0000
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full relative flex-row flex">
                                        <div class="w-full relative justify-start items-center flex px-10">

                                            <div
                                                class="text-center text-green-500 text-xl font-bold font-['Montserrat']">
                                                SUDAH DITERIMA OLEH PENERIMA
                                            </div>

                                        </div>

                                        <div class="w-full relative justify-end items-center flex px-10 gap-6">

                                            <button onclick="window.location.href='/' "
                                                class="text-center text-blue-500 hover:text-blue-400  text-xl font-normal font-['Montserrat'] underline">
                                                Detail Pesanan
                                            </button>


                                            <button
                                                class="px-5 py-3  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                                                <div class=" text-neutral-100 text-xl font-normal font-['Montserrat']">
                                                    Chat Kami
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div
                                class="w-full relative bg-neutral-100 shadow-neutral-300 shadow-md rounded-xl flex-col inline-flex py-8 ">
                                <div class="w-full relative bg-neutral-100 flex-col inline-flex gap-4">

                                    <div
                                        class="w-full relative bg-orange-500 flex-row flex justify-center items-center px-10 py-2 font-semibold text-l text-neutral-50 font-['Montserrat']">
                                        <div class="w-full relative justify-start items-center flex">12 Januari 2024
                                        </div>
                                        <div class="w-full relative justify-end items-center flex">INV/120124/00010001
                                        </div>
                                    </div>

                                    <div
                                        class="w-full relative flex-col flex justify-start items-start px-10 gap-1 font-normal font-['Montserrat']">
                                        <div class="w-full relative text-xl text-blue-500 font-semibold ">
                                            Almiranda Jaihan Chairani
                                        </div>
                                        <div class="w-full relative text-l text-blue-400">
                                            Banner (1x2m), dan lainnya
                                        </div>
                                        <div class="w-full relative text-l text-neutral-800">
                                            Perum BDB 2, Cibinong, Kabupaten Bogor, Jawa Barat
                                        </div>
                                    </div>

                                    <div class="w-full relative justify-end items-end flex px-10">
                                        <div class="justify-center items-center flex flex-col">
                                            <div class="w-full relative justify-center flex text-l text-neutral-800">
                                                Total Harga Keseluruhan
                                            </div>
                                            <div
                                                class="w-full relative justify-center flex text-3xl font-bold text-neutral-800">
                                                Rp 140.0000
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full relative flex-row flex">
                                        <div class="w-full relative justify-start items-center flex px-10">

                                            <div
                                                class="text-center text-red-500 text-xl font-bold font-['Montserrat']">
                                                PESANAN BATAL
                                            </div>

                                        </div>

                                        <div class="w-full relative justify-end items-center flex px-10 gap-6">

                                            <button onclick="window.location.href='/' "
                                                class="text-center text-blue-500 hover:text-blue-400  text-xl font-normal font-['Montserrat'] underline">
                                                Detail Pesanan
                                            </button>


                                            <button
                                                class="px-5 py-3  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                                                <div class=" text-neutral-100 text-xl font-normal font-['Montserrat']">
                                                    Chat Kami
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

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

 <!-- STRUK DETAIL PESANAN -->

 {{-- <div
 class="w-full h-fit flex-col flex relative bg-neutral-100 shadow-neutral-300 shadow-md p-5 gap-6 rounded-2xl ">
 <div class="w-full h-fit justify-between items-center flex relative rounded-tr-2xl rounded-tl-2xl">

     <img class="w-32 h-fit " src="{{ url('pictures/logo-jafa-warna.png') }}" />

     <div class="text-3xl text-blue-500 font-normal font-['Montserrat'] ">
         DETAIL PESANAN
     </div>

     <i class="ph-bold ph-x text-3xl text-neutral-500"></i>
 </div>

 <div class="w-full rounded-full border-2 border-neutral-200  items-start inline-flex">
 </div>

 <div class="w-full flex flex-col relative ">
     <div class="w-full flex flex-row relative justify-between">
         <div class="text-xl text-neutral-800 font-bold font-['Montserrat'] ">
             No.Invoice
         </div>
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             INV/120124/00010001
         </div>
     </div>
     <div class="w-full flex flex-row relative justify-between">
         <div class="text-xl text-neutral-800 font-bold font-['Montserrat'] ">
             Tanggal Pemesanan
         </div>
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             12 Januari 2024
         </div>
     </div>
 </div>

 <div class="w-full relative">
     <div class=" w-full relative rounded-xl flex-col inline-flex text-justify">
         <div class="text-xl text-neutral-800 font-bold font-['Montserrat'] ">
             Alamat Pengiriman
         </div>
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             Perum Bojong Depok Baru 2 Blok FJ.13 RT. 04 RW.17 Cibinong, Kab. Bogor Jawa Barat 16913
         </div>
     </div>
 </div>

 <div class="w-full flex flex-col relative ">
     <div class="w-full flex flex-col relative justify-start">
         <div class="text-xl text-neutral-800 font-bold font-['Montserrat'] ">
             Nomor Telepon
         </div>
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             62895804560813
         </div>
     </div>
 </div>

 <div class="w-full rounded-full border-2 border-neutral-200  items-start inline-flex">
 </div>


 <div class="w-full flex flex-col relative gap-3 ">

     <div class="text-xl text-neutral-800 font-bold font-['Montserrat'] ">
         Rincian Pesanan
     </div>

     <div class="w-full flex flex-row relative justify-between gap-8">
         <div class="w-fit flex flex-row relative justify-start gap-3">
             <div class="w-20 h-20 ">
                 <img class="w-full h-full rounded-lg" src="{{ url('pictures/card-index.jpg') }}">
             </div>
             <div class="w-fit flex flex-col relative justify-start">
                 <div class="text-xl text-neutral-800 font-bold font-['Montserrat'] ">
                     Photo
                 </div>
                 <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
                     Ukuran Poscard
                 </div>
             </div>
         </div>
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             x1
         </div>
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             Rp 60.000
         </div>
     </div>

     <div class="w-full flex flex-row relative justify-between gap-8">
         <div class="w-fit flex flex-row relative justify-start gap-3">
             <div class="w-20 h-20 ">
                 <img class="w-full h-full rounded-lg" src="{{ url('pictures/card-index.jpg') }}">
             </div>
             <div class="w-fit flex flex-col relative justify-start">
                 <div class="text-xl text-neutral-800 font-bold font-['Montserrat'] ">
                     Photo
                 </div>
                 <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
                     Ukuran Poscard
                 </div>
             </div>
         </div>
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             x1
         </div>
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             Rp 60.000
         </div>
     </div>
 </div>

 <div class="w-full flex flex-col relative gap-1 ">
     <div class="w-full flex flex-row relative justify-between">
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             Total Harga
         </div>
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             Rp 80.000
         </div>
     </div>
     <div class="w-full flex flex-row relative justify-between">
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             Biaya Pengiriman
         </div>
         <div class="text-xl text-neutral-800 font-normal font-['Montserrat'] ">
             Rp 20.000
         </div>
     </div>
     <div class="w-full flex flex-row relative justify-between">
         <div class="text-xl text-neutral-800 font-bold font-['Montserrat'] ">
             Total Harga Keseluruhan
         </div>
         <div class="text-xl text-blue-500 font-bold font-['Montserrat'] ">
             Rp 100.000
         </div>
     </div>
 </div>

 <div class="w-full rounded-full border-2 border-neutral-200  items-start inline-flex">
 </div>

 <div class="w-full flex flex-row relative items-center gap-3 ">
     <div class="text-xl text-neutral-800 font-bold font-['Montserrat'] ">
         Bukti Pembayaran
     </div>
     <i class="ph-bold ph-eye text-2xl text-blue-500 cursor-pointer"></i>
 </div>
</div> --}}