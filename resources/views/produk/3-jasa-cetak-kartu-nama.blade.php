@extends('layouts.main')
@section('container')
    <div class="w-full h-fit relative bg-white">
        @include('partials.whatsapp')
        @include('partials.topheader')
        @include('partials.header')

        <!-- BODY -->
        <div class="w-full flex-col justify-center items-center flex py-16">
            <div class="w-[1000px] h-fit flex-col flex items-center relative  gap-20">
                <div class="w-full flex-col flex justify-center items-center">
                    <div class="text-center text-neutral-800 text-[64px] font-normal font-['Montserrat']">Jasa Cetak Kartu
                        Nama
                    </div>
                    <div class="text-center text-neutral-500 text-xl font-normal font-['Montserrat']">Ingin cetak dalam
                        jumlah banyak? atau hanya 1 pcs?
                        <br>Anda dapat memesannya disini!
                    </div>
                </div>
            </div>

            @include('partials.kategorijasacetak')

            <div class="w-full justify-start px-12 relative">
                <div class="w-full flex-col flex justify-center items-start  relative ">
                    <div class="w-[410px] h-[95px] items-center flex bg-blue-500 rounded-tl-2xl rounded-tr-2xl">
                        <div class="pl-12 relative text-neutral-50 text-[40px] font-normal font-['Montserrat']">
                            Photo
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full justify-start items-start inline-flex py-8 px-24">
                <div><span class="text-blue-500 text-xl font-normal font-['Montserrat']">Beranda > Jasa Cetak >
                    </span>
                    <span class="text-blue-300 text-xl font-normal font-['Montserrat']"> Cetak Photo</span>
                </div>
            </div>

            <div class="w-full h-fit flex flex-row justify-between px-12">
                <div class="w-full h-fit flex flex-col justify-start">
                    <div class="w-[600px] h-[600px] relative ">
                        <img class="w-full h-full rounded-lg" src="{{ url('pictures/jasa-cetak/cetak-photo.jpg') }}">
                    </div>

                    <div class="w-full flex-col justify-center items-start gap-8 pt-12 inline-flex">

                        <div class="w-[600px] relative">
                            <div
                                class="relative bg-neutral-100 shadow-md shadow-neutral-300 border-2 border-neutral-300 rounded-xl flex-col inline-flex p-8 w-full text-justify">

                                <div class=" text-justify text-red-500 text-3xl font-bold font-['Montserrat']">
                                    PERLU DIPERHATIKAN!!
                                </div>
                                <br>
                                <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">Warna yang
                                    ditampilkan pada layar anda, <a class="font-bold"> tidak akan 100%
                                        sama</a> dengan hasil
                                    cetak, karena warna yang dihasilkan pada layar anda adalah RGB (Red Green
                                    Blue), sedangkan pada mesin cetak, warna yang dihasilkan adalah CMYK (Cyan
                                    Magenta Yellow Black).
                                </div>
                                <br>

                                <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">Kami menyediakan
                                    layanan jasa cetak photo dengan berbagai ukuran dan berbagai jenis kertas. Silahkan
                                    order sesuai kebutuhan anda!
                                </div>

                                <br>
                                <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">Jenis Bahan Kertas
                                    yang tersedia :<br>
                                    <a class="font-bold">1. Photo Paper Glossy </a> (Lebih mengkilat dan umum dipilih
                                    untuk pas photo) <br>
                                    <a class="font-bold">2. Paper Matte </a> (Lebih doff/tidak mengkilat, biasa
                                    digunakan untuk pas photo
                                    tertentu) <br>
                                    <a class="font-bold">3. Art Carton 230gsm & 260gsm </a>(Kertas berwarna putih tebal
                                    dengan sedikit mengkilap)
                                </div>

                                <br>
                                <div class="text-neutral-800 text-lg font-normal font-['Montserrat']">!!!!! Hanya
                                    menerima cutting dengan potongan lurus dan cetak polaroid akan dibingkai warna putih
                                    seperti polaroid.
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="w-full items-start">
                    <div class="w-[600px]">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('jasa-cetak.addToCart.store') }}" method="POST"
                            enctype="multipart/form-data" class="w-full justify-start items-start flex-col flex gap-8">
                            @csrf
                            <input type="hidden" name="print_type" id="" value="Kartu Nama & Ucapan">
                            <!-- Size Field -->
                            <div class="w-[600px] flex flex-col gap-2">
                                <div class="text-neutral-800 text-2xl font-bold font-['Montserrat']">UKURAN</div>
                                <select name="size"
                                    class="w-full cursor-pointer p-5 bg-neutral-50 text-neutral-600 rounded-lg border border-neutral-800 text-xl font-normal font-['Montserrat'] focus:group/button-active justify-between items-start inline-flex">
                                    <option value="" disabled selected>Select Size</option>
                                    <option value="Pas Photo (4 cm x 6 cm)">Pas Photo (4 cm x 6 cm) - 1 lembar dapat 20
                                        photo</option>
                                    <option value="2R (6 cm x 9 cm)">2R (6 cm x 9 cm) - 1 lembar dapat 9 photo</option>
                                    <option value="3R (8.9 cm x 12.7 cm)">3R (8.9 cm x 12.7 cm) - 1 lembar dapat 4 photo
                                    </option>
                                    <option value="4R (10.2 cm x 15.2 cm)">4R (10.2 cm x 15.2 cm) - 1 lembar dapat 2
                                        photo</option>
                                    <option value="5R (12.7 cm x 17.78 cm)">5R (12.7 cm x 17.78 cm) - 1 lembar dapat 2
                                        photo</option>
                                    <option value="8R (20.32 cm x 25.4 cm)">8R (20.32 cm x 25.4 cm) - 1 lembar dapat 1
                                        photo</option>
                                    <option value="Postcard (10 cm x 15 cm)">Postcard (10 cm x 15 cm) - 1 lembar dapat 2
                                        photo</option>
                                    <option value="Polaroid (7.2 cm x 9.8 cm)">Polaroid (7.2 cm x 9.8 cm) - 1 lembar
                                        dapat 5 photo</option>
                                </select>
                                @error('size')
                                    <div class="w-full text-start text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            @error('print_type')
                                <div class="w-full text-start text-red-500">{{ $message }}</div>
                            @enderror
                            <!-- Paper Type Field -->
                            <div class="w-[600px] flex flex-col gap-2">
                                <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']">Jenis Kertas
                                </div>
                                <select name="paper_type"
                                    class="w-full cursor-pointer p-5 bg-neutral-50 text-neutral-600 rounded-lg border border-neutral-800 text-xl font-normal font-['Montserrat'] focus:group/button-active justify-between items-start inline-flex">
                                    <option value="" disabled selected>Select Paper Type</option>
                                    <option value="Photo Paper Glossy">Photo Paper Glossy</option>
                                    <option value="Photo Paper Matte">Photo Paper Matte</option>
                                    <option value="AC 260gsm">AC 260gsm</option>
                                </select>
                                @error('paper_type')
                                    <div class="w-full text-start text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Quantity Field -->
                            <div class="w-[600px] flex flex-col gap-2">
                                <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']">Jumlah</div>
                                <div
                                    class="p-5 border border-neutral-800 rounded-lg bg-neutral-50 text-xl font-normal font-['Montserrat']">
                                    <div class="flex justify-between items-center">
                                        <button type="button" onclick="decrementQuantity()" id="decrementBtn"
                                            class="px-3 py-1 border border-neutral-800 rounded-lg">-</button>
                                        <input type="number" name="quantity" id="quantityInput" min="1"
                                            value="1" readonly
                                            class="w-12 text-center bg-neutral-50 focus:outline-none border-none">
                                        <button type="button" onclick="incrementQuantity()" id="incrementBtn"
                                            class="px-3 py-1 border border-neutral-800 rounded-lg">+</button>
                                    </div>
                                </div>
                                @error('quantity')
                                    <div class="w-full text-start text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Total Price Display -->
                            <div class="w-[600px] flex flex-col gap-2">
                                <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']">Total Harga</div>
                                <input id="totalPriceDisplay" name="price" value="Rp 15.000"
                                    class="p-5 border border-neutral-800 rounded-lg bg-neutral-50 text-xl font-normal font-['Montserrat']">
                            </div>

                            <!-- File Upload Field -->
                            <div class="w-[600px] flex flex-col gap-2">
                                <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']">Upload Gambar
                                </div>
                                <input type="file" name="print_images"
                                    class="w-full cursor-pointer p-5 bg-neutral-50 text-neutral-600 rounded-lg border border-neutral-800 text-xl font-normal font-['Montserrat']">
                                @error('print_images')
                                    <div class="w-full text-start text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit"
                                class="w-full h-[70px] py-5 justify-center items-center gap-2.5 inline-flex bg-neutral-800 rounded-lg">
                                <div class="text-center text-neutral-50 text-xl font-bold font-['Montserrat']">
                                    Tambahkan
                                    ke Keranjang</div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')
    </div>

    <script>
        const pricePerItem = 15000;
        const quantityInput = document.getElementById('quantityInput');
        const totalPriceDisplay = document.getElementById('totalPriceDisplay');

        function updateTotalPrice() {
            const quantity = parseInt(quantityInput.value, 10);
            const totalPrice = pricePerItem * quantity;
            totalPriceDisplay.value = 'Rp ' + totalPrice.toLocaleString('id-ID');
        }

        function incrementQuantity() {
            const currentQuantity = parseInt(quantityInput.value, 10);
            quantityInput.value = currentQuantity + 1;
            updateTotalPrice();
        }

        function decrementQuantity() {
            const currentQuantity = parseInt(quantityInput.value, 10);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
                updateTotalPrice();
            }
        }
    </script>
@endsection
