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
                    <span class="text-blue-300 text-xl font-normal font-['Montserrat']"> Ubah Password
                    </span>
                </div>
            </div>

            <div class="w-full flex flex-row justify-between px-12 gap-12">
                @include('partials.akunsaya-navigasi')

                <div class="w-full items-start">
                    <div class="w-full">
                        <div class="w-full justify-start items-start flex-col flex gap-9 pr-60">
                            <div
                                class=" justify-start items-start text-gray-800 text-6xl font-normal font-['Montserrat']  ">
                                UBAH PASSWORD
                            </div>


                            <div class="w-full  justify-start items-start flex">
                                <div
                                    class="w-full rounded-full border-2 border-gray-300  items-start inline-flex">
                                </div>
                            </div>

                            <div class="w-full flex flex-col justify-start items-start gap-6">

                                <div class="w-full flex flex-col gap-1">
                                    {{-- <div class="text-gray-700 text-2xl font-normal font-['Montserrat']">
                                            Jenis Bahan</div> --}}
                                    <div class="flex-col justify-between items-start inline-flex">
                                        <div
                                            class="w-full justify-between p-5 bg-gray-50 rounded-lg border border-gray-500 items-start inline-flex">
                                            <div class="text-gray-300 text-2xl font-normal font-['Montserrat']">
                                                Password Baru
                                            </div>
                                            <button class="ph-fill ph-eye-slash  text-gray-700 text-3xl"></button>
                                            {{-- <button class="ph-fill ph-eye"></button> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="text-gray-500 text-l font-normal font-['Montserrat']">
                                            *maksimal 10 huruf</div> --}}
                                </div>

                                <div class="w-full flex flex-col gap-1">
                                    {{-- <div class="text-gray-700 text-2xl font-normal font-['Montserrat']">
                                            Jenis Bahan</div> --}}
                                    <div class="flex-col justify-between items-start inline-flex">
                                        <div
                                            class="w-full justify-between p-5 bg-gray-50 rounded-lg border border-gray-500 items-start inline-flex">
                                            <div class="text-gray-300 text-2xl font-normal font-['Montserrat']">
                                                Ulangi Password
                                            </div>
                                            <button class="ph-fill ph-eye-slash  text-gray-700 text-3xl"></button>
                                            {{-- <button class="ph-fill ph-eye"></button> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="text-gray-500 text-l font-normal font-['Montserrat']">
                                            *maksimal 10 huruf</div> --}}
                                </div>

                            </div>

                            <div class="w-full justify-start flex">
                                <button class="px-7 py-4  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                                    <div class=" text-gray-50 text-2xl font-normal font-['Montserrat']">
                                        Simpan
                                    </div>
                                </button>
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
