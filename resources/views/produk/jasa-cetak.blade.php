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

<body class="w-full h-full antialiased">

    <div class="w-full h-fit relative bg-white">
        @include('partials.whatsapp')
        @include('partials.topheader')
        @include('partials.header')

        <!-- BODY -->


        <div class="w-full flex-col justify-center items-center flex py-16">
            <div class="w-[1000px] h-fit flex-col flex items-center relative  gap-20">
                <div class="w-full flex-col flex justify-center items-center">
                    <div class="text-center text-neutral-800 text-[64px] font-normal font-['Montserrat']">Jasa Cetak
                    </div>
                    <div class=" text-center text-neutral-500 text-xl font-normal font-['Montserrat']">Ingin cetak dalam
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
                            Photo</div>
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
                        {{-- <div class="w-[600px] justify-start items-center inline-flex">
                            <div class="gap-20 inline-flex">
                                <button class="flex-col justify-start items-start inline-flex">
                                    <div
                                        class="text-blue-500 hover:text-blue-300 text-2xl font-normal font-['Montserrat']">
                                        Deskripsi</div>
                                </button>
                               <button class="flex-col justify-start items-center inline-flex">
                                    <div
                                        class="text-blue-500 hover:text-blue-300 text-2xl font-normal font-['Montserrat']">
                                        Harga</div>
                                </button>
                                <button class="flex-col justify-start items-center inline-flex">
                                    <div
                                        class="text-blue-500 hover:text-blue-300 text-2xl font-normal font-['Montserrat']">
                                        Ulasan (0)</div>
                                </button>
                            </div>
                        </div> --}}

                        {{-- <div class="w-full  justify-start items-start flex">
                            <div class="w-[600px] rounded-full border-2 border-neutral-400  items-start inline-flex">
                            </div>
                        </div> --}}

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
                        <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data"
                            class="w-full justify-start items-start flex-col flex gap-8">
                            @csrf
                            <div
                                class=" justify-start items-start text-neutral-800 text-5xl font-normal font-['Montserrat']  ">
                                Cetak Photo Berbagai Ukuran
                            </div>

                            <div class="w-full flex-col justify-start items-start flex">
                                <div
                                    class="w-[600px] rounded-full border-2 border-neutral-300  items-start inline-flex">
                                </div>
                            </div>

                            <div class="w-full flex flex-col justify-start items-start gap-8">

                                <div class="w-[600px] flex flex-col gap-2">
                                    <div class="text-neutral-800 text-2xl font-bold font-['Montserrat']">
                                        UKURAN</div>
                                    {{-- <div class="text-neutral-500 text-l font-normal font-['Montserrat']">
                                   *dalam meter</div> --}}
                                    <div class=" dropdown inline-block relative ">
                                        <select name="size"
                                            class="w-full cursor-pointer p-5 bg-neutral-50 text-neutral-600 rounded-lg border border-neutral-800 text-xl font-normal font-['Montserrat'] focus:group/button-active  justify-between items-start inline-flex ">
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="" disabled selected>Select Size</option>
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="Pas Photo (4 cm x 6 cm)">Pas Photo (4 cm x 6 cm) - 1 lembar dapat
                                                20 photo</option>
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="2R (6 cm x 9 cm)">2R (6 cm x 9 cm) - 1 lembar dapat 9 photo
                                            </option>
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="3R (8.9 cm x 12.7 cm)">3R (8.9 cm x 12.7 cm) - 1 lembar dapat 4
                                                photo</option>
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="4R (10.2 cm x 15.2 cm)">4R (10.2 cm x 15.2 cm) - 1 lembar dapat 2
                                                photo</option>
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="5R (12.7 cm x 17.78 cm)">5R (12.7 cm x 17.78 cm) - 1 lembar dapat
                                                2 photo</option>
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="8R (20.32 cm x 25.4 cm)">8R (20.32 cm x 25.4 cm) - 1 lembar dapat
                                                1 photo</option>
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="Postcard (10 cm x 15 cm)">Postcard (10 cm x 15 cm) - 1 lembar
                                                dapat 2 photo</option>
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="Polaroid (7.2 cm x 9.8 cm)">Polaroid (7.2 cm x 9.8 cm) - 1 lembar
                                                dapat 5 photo</option>

                                        </select>

                                    </div>
                                    @error('size')
                                        <div class="w-full text-start text-red-500">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="w-[600px] flex flex-col gap-2">
                                    <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']">
                                        Jenis Kertas</div>
                                    {{-- <div class="text-neutral-500 text-l font-normal font-['Montserrat']">
                                   *dalam meter</div> --}}
                                    <div class=" dropdown inline-block relative ">
                                        <select name="paper_type"
                                            class="w-full cursor-pointer p-5 bg-neutral-50 text-neutral-600 rounded-lg border border-neutral-800 text-xl font-normal font-['Montserrat'] focus:group/button-active  justify-between items-start inline-flex ">
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="" disabled selected>Select Paper Type</option>
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="Photo Paper Glossy">Photo Paper Glossy</option>
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="Photo Paper Matte">Photo Paper Matte</option>
                                            <option
                                                class="rounded-t-lg bg-neutral-200 text-neutral-800 hover:text-blue-300 py-2 px-4 text-xl font-normal font-['Montserrat'] block whitespace-no-wrap"
                                                value="AC 260gsm">AC 260gsm</option>
                                        </select>
                                    </div>
                                    @error('paper_type')
                                        <div class="w-full text-start text-red-500">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="w-[600px]  flex flex-col gap-2">
                                    <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']">
                                        Jumlah</div>
                                    <div
                                        class="p-5 border border-neutral-800 rounded-lg bg-neutral-50 text-xl font-normal font-['Montserrat']">
                                        <div class="flex justify-between items-center gap-x-1.5">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-neutral-200 bg-blue-500 hover:bg-blue-300"
                                                id="decrementButton">
                                                <svg class="ph-bold ph-minus text-3xl text-neutral-50" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                </svg>
                                            </button>
                                            <input type="number" name="quantity" id="quantity" min="1"
                                                value="1"
                                                class="p-0 w-fit bg-transparent border-0 text-neutral-600 text-center focus:ring-0"
                                                data-hs-input-number-input="">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-neutral-200 bg-blue-500 hover:bg-blue-300"
                                                id="incrementButton">
                                                <svg class="ph-bold ph-minus text-3xl text-neutral-50" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5v14"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-[600px]  flex flex-col gap-2">
                                    <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']">
                                        Upload File</div>
                                    <div class="flex-col justify-between items-start inline-flex">
                                        <input type="file" name="file" id="file"
                                            class="block w-full p-3  text-neutral-600 border border-neutral-500 rounded-lg cursor-pointer text-xl font-normal font-['Montserrat'] "
                                            id="file_input" type="file">
                                        {{-- <div class="text-red-500 text-l italic font-normal font-['Montserrat']">
                                            *maksimal 50mb (silahkan upload file dalam bentuk rar/winrar)</div> --}}
                                    </div>
                                    @error('file')
                                        <div class="w-full text-start text-red-500">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="w-[600px]  flex flex-col gap-2">
                                    <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']">
                                        Catatan Tambahan</div>
                                    {{-- <div class="text-neutral-500 text-l font-normal font-['Montserrat']">
                                   *dalam meter</div> --}}
                                    <div class="flex-col justify-between items-start inline-flex">
                                        <textarea name="notes" id="notes" type="tulis-catatan" id="helper-text"
                                            aria-describedby="helper-text-explanation"
                                            class="bg-neutral-50 border border-neutral-500 text-neutral-600 rounded-lg 
                                            block w-full h-[300px] p-5 text-xl font-normal font-['Montserrat'] "
                                            placeholder="Tulis Catatan..."></textarea>
                                    </div>
                                    @error('notes')
                                        <div class="w-full text-start text-red-500">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>

                            <div class="w-full h-fit justify-between bg-orange-500 flex flex-row py-4 px-12">
                                <div
                                    class="w-full  items-center flex  text-neutral-50 text-2xl font-bold font-['Montserrat']">
                                    Total Harga</div>
                               <input type="number" name="total_price_product" id="total_price_product"
                                    class="w-full bg-orange-500 rounded text-neutral-50 text-2xl font-bold font-['Montserrat']" readonly>
                                </input>
                            </div>



                            <div class="w-full justify-center items-center flex">
                                <button type="submit"
                                    class="px-7 py-4  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                                    <div class=" text-neutral-100 text-2xl font-normal font-['Montserrat']">
                                        Tambah ke Keranjang
                                    </div>
                                </button>

                            </div>

                        </form>
                    </div>
                </div>

            </div>


        </div>

        <!-- FOOTER -->
        @include('partials.footer')


    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const decrementButton = document.getElementById('decrementButton');
            const incrementButton = document.getElementById('incrementButton');
            const numberInput = document.getElementById('quantity');
            const total_price_productInput = document.getElementById('total_price_product');

            // Function to update total price
            function updatetotal_price_product() {
                const quantity = parseInt(numberInput.value);

                if (!isNaN(quantity)) {
                    const total_price_product = quantity * 10000; // Ganti faktor pengali sesuai kebutuhan
                    total_price_productInput.value = total_price_product;
                }
            }

            // Initial update on page load
            updatetotal_price_product();

            // Event listener for decrement button
            decrementButton.addEventListener('click', () => {
                let currentValue = parseInt(numberInput.value);
                if (currentValue > 1) {
                    numberInput.value = currentValue - 1;
                    updatetotal_price_product(); // Update total price when decrementing
                }
            });

            // Event listener for increment button
            incrementButton.addEventListener('click', () => {
                let currentValue = parseInt(numberInput.value);
                numberInput.value = currentValue + 1;
                updatetotal_price_product(); // Update total price when incrementing
            });

            // Event listener for quantity input change (optional, if you want to handle manual input)
            numberInput.addEventListener('input', () => {
                updatetotal_price_product();
            });
        });
    </script>
</body>


</html>
