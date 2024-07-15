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
                    <span class="text-blue-300 text-xl font-normal font-['Montserrat']"> Profil Saya
                    </span>
                </div>
            </div>

            <div class="w-full flex flex-row justify-between px-12 gap-12">
                @include('partials.akunsaya-navigasi')

                <div class="w-full items-start">
                    <div class="w-full">
                        <div class="w-full justify-start items-start flex-col flex gap-9 pr-60">
                            <div
                                class=" justify-start items-start text-neutral-800 text-6xl font-normal font-['Montserrat']  ">
                                PROFIL SAYA
                            </div>


                            <div class="w-full  justify-start items-start flex">
                                <div class="w-full rounded-full border-2 border-neutral-300  items-start inline-flex">
                                </div>
                            </div>

                            <div class="w-full flex flex-col">
                                <form action="{{ route('profil.update') }}" method="POST" class="flex flex-col gap-6">
                                    @csrf
                            
                                    <div class="w-full flex flex-col">
                                        <div class="flex-col justify-between items-start inline-flex">
                                            <input
                                                class="w-full font-['Montserrat'] justify-between p-5 bg-neutral-50 text-neutral-700 text-2xl font-normal  rounded-lg border border-neutral-500 items-start inline-flex"
                                                value="{{ auth()->user()->namalengkap }}" name="namalengkap" id="namalengkap">
                                        </div>
                                    </div>
                            
                                    <div class="w-full flex flex-col">
                                        <div class="flex-col justify-between items-start inline-flex">
                                            <input
                                                class="w-full font-['Montserrat'] justify-between p-5 bg-neutral-50 text-neutral-700 text-2xl font-normal  rounded-lg border border-neutral-500 items-start inline-flex"
                                                value="{{ auth()->user()->nomor_telepon }}" name="nomor_telepon" id="nomor_telepon">
                                        </div>
                                    </div>
                            
                                    <div class="w-full flex flex-col">
                                        <div class="flex-col justify-between items-start inline-flex">
                                            <input
                                                class="w-full font-['Montserrat']  p-5 bg-neutral-400 text-neutral-700 text-2xl font-normal  rounded-lg inline-flex"
                                                value="{{ auth()->user()->email }}" name="email" id="email" readonly>
                                        </div>
                                    </div>
                            
                                    <div class="w-full justify-start flex">
                                        <button type="submit" class="px-7 py-4  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                                            <div class=" text-neutral-50 text-2xl font-normal font-['Montserrat']">
                                                Simpan
                                            </div>
                                        </button>
                                    </div>
                                </form>
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
