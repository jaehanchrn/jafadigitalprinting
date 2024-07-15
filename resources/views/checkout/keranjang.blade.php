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

        <div class="w-full flex-col justify-center items-end flex py-16">

            <div class="w-full justify-start px-12">
                <div class="w-full flex-col flex justify-center items-start  relative ">
                    <div class="w-[600px] h-[95px] items-center flex bg-blue-500 rounded-tl-2xl rounded-tr-2xl">
                        <div class="pl-12 absolute text-neutral-50 text-[40px] font-normal font-['Montserrat']">
                            Keranjang Pesanan
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full justify-start items-start inline-flex py-8 px-24">
                <div>
                    <span class="text-yellow-500 text-xl font-semibold font-['Montserrat']">1. Keranjang Pesanan</span>
                    <span class="text-neutral-300 text-xl font-semibold font-['Montserrat']"> >> 2. Alamat Penerima >>
                        3. Pembayaran</span>
                </div>
            </div>

            @if ($cart && $cart->items->count() > 0)
                <div class="w-full h-fit flex flex-col justify-between px-12">
                    <div
                        class="w-full self-stretch relative justify-start items-center flex rounded-[20px] border border-zinc-500 mb-12">
                        <div class="w-full p-8 flex-col flex gap-6">
                            @foreach ($cart->items as $item)
                                <div class="w-full">
                                    <div class="relative flex flex-row justify-start gap-12">

                                        <!-- Tombol Aksi -->
                                        <div class="flex">
                                            <div class="flex flex-col justify-center gap-6">
                                                <button
                                                    class="ph-bold ph-pencil-simple-line text-3xl text-blue-500 hover:text-blue-400"></button>
                                                <button
                                                    class="ph-bold ph-trash text-3xl text-red-500 hover:text-red-300"></button>
                                            </div>
                                        </div>

                                        <!-- Gambar Produk -->
                                        <div class="relative">
                                            <div class="w-[120px] h-[120px]">
                                                <img class="w-full h-full rounded-xl" src="{{ $item->product->image }}"
                                                    alt="{{ $item->product->name }}">
                                            </div>
                                        </div>

                                        <!-- Informasi Produk -->
                                        <div class="w-[300px] flex-col flex">
                                            <!-- Nama Produk -->
                                            <div class="text-2xl text-blue-500 font-bold font-['montserrat']">
                                                {{ $item->product->name }}
                                            </div>
                                        </div>

                                        <!-- Bagian Harga, Jumlah, dan Total Harga -->
                                        <div class="flex flex-col">
                                            <!-- Harga -->
                                            <div class="text-xl text-neutral-800 font-normal font-['montserrat']">
                                                Harga : Rp {{ number_format($item->product->price, 0, ',', '.') }}
                                            </div>
                                            <!-- Jumlah -->
                                            <div class="text-xl text-neutral-800 font-normal font-['montserrat']">
                                                Jumlah : {{ $item->quantity }}
                                            </div>
                                            <!-- Total Harga -->
                                            <div class="text-xl text-neutral-800 font-normal font-['montserrat']">
                                                Total Harga Pesanan : Rp
                                                {{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            @else
                <div class="relative w-full px-12 pb-8 ">
                    <div
                        class="relative text-neutral-500 text-2xl font-normal font-['Montserrat'] border-2 border-neutral-300 rounded-xl flex-col inline-flex p-8 w-full text-justify">
                        Mohon maaf, belum ada produk atau jasa yang ditambahkan.
                    </div>
                </div>

            @endif

            <div class="w-fit flex px-12">
                <div class="w-full h-fit bg-orange-500 justify-end items-end flex flex-row py-4 px-12 gap-16">
                    <div class="w-fit relative items-start flex flex-col">
                        <div class="w-full flex text-neutral-50 text-2xl font-bold font-['Montserrat']">Total Harga</div>
                    </div>
                    <div class="w-fit relative items-start flex flex-col">
                        <div class="w-full text-neutral-50 text-2xl font-bold font-['Montserrat']"> Rp
                            {{ number_format($total_price_product, 0, ',', '.') }}</div>
                    </div>
                </div>
            </div>

            <div class="w-full h-fit flex flex-col justify-between px-12">
                <div class="w-full gap-6 justify-end items-center flex pt-12">
                    <button onclick="window.location.href='/beranda'"
                        class="px-7 py-4 gap-4 bg-neutral-50 rounded-[10px] border-2 border-blue-500 inline-flex hover:opacity-75">
                        <div class="text-center text-blue-500 text-2xl font-bold font-['Montserrat']">Tambah Pesanan
                        </div>
                    </button>
                    <a href="{{ route('checkout.address.index') }}"
                        class="px-7 py-4 bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                        <div class="text-neutral-100 text-2xl font-normal font-['Montserrat']">Selanjutnya</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        @include('partials.footer')
        @php
            // Simpan total harga ke dalam session
            session(['total_price_product' => $total_price_product]);
        @endphp
    </div>
</body>

</html>
