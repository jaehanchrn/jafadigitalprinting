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
                    <span class="text-blue-300 text-xl font-normal font-['Montserrat']"> Log Out
                    </span>
                </div>
            </div>

            <div class="w-full flex flex-row justify-between px-12 gap-12">
                <div class="w-[410px] h-fit flex flex-col justify-between">
                    <div
                        class="w-[410px] self-stretch relative justify-start items-start flex rounded-[20px] bg-blue-100">

                        <div class="w-full flex-col flex gap-6">

                            <div class="w-full flex-col flex">

                                <div
                                    class="justify-center items-center flex-col flex text-neutral-50 bg-blue-500 rounded-tl-2xl rounded-tr-2xl py-6 text-[40px] font-normal font-['Montserrat']">
                                    Akun Saya</div>

                                <div class="w-full p-8">
                                    <div class="w-full gap-6 flex-col flex">

                                        <button onclick="window.location.href='/edit-profil'"
                                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                            <div
                                                class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                                Profil Saya</div>
                                        </button>
                                        <button onclick="window.location.href='/ubah-password'"
                                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                            <div
                                                class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                                Ubah Password</div>
                                        </button>
                                        <button onclick="window.location.href='/riwayat-pesanan'"
                                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                            <div
                                                class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                                Riwayat Pesanan</div>
                                        </button>
                                        <button onclick="window.location.href='/logout-akun'"
                                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                            <div
                                                class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                                Logout</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="w-full items-start">
                    <div class="w-full">
                        <div class="w-full justify-start items-start flex-col flex gap-9 pr-60">
                            <div
                                class=" justify-start items-start text-neutral-800 text-6xl font-normal font-['Montserrat']  ">
                                LOGOUT
                            </div>


                            <div class="w-full  justify-start items-start flex">
                                <div class="w-full rounded-full border-2 border-neutral-300  items-start inline-flex">
                                </div>
                            </div>

                            <div class="w-full justify-start items-start flex-col flex gap-4 ">
                                <div
                                    class="justify-start items-start text-neutral-800 text-2xl font-normal font-['Montserrat'] ">
                                    Anda yakin ingin keluar akun?
                                </div>
                                <form action="{{ route('auth.keluar.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="px-5 py-3  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                                        <div class=" text-neutral-100 text-xl font-normal font-['Montserrat']">
                                            Yakin
                                        </div>
                                    </button>
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
