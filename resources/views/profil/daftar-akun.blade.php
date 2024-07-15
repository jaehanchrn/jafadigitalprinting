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
        <div class="w-full h-fit flex-col justify-start inline-flex py-20">


            <div>
                <div class="text-center text-gray-800 text-[64px] font-normal font-['Montserrat']">
                    Daftar Akun</div>
                <div class="top-[100px] text-center text-gray-500 text-2xl font-normal font-['Montserrat']">
                    Masukkan data yang sesuai</div>
            </div>

            <div class="w-full flex-col justify-center items-center flex pt-20">
                <div style="width: 1000px; height: 0px; border: 2px #BFBFBF solid"></div>
            </div>

            <div class="pt-20 pb-4 pl-64 text-blue-500  text-xl font-normal font-['Montserrat']">Beranda
                > Login/Daftar >
                <a class="text-blue-300 text-xl font-normal font-['Montserrat']">
                    Daftar Akun
                </a>
            </div>


            <div class="w-full flex px-60 ">
                <div class="w-full flex-col flex items-center bg-gray-200 py-24 px-56 gap-8 rounded-[32px]">
                    <form class="w-full flex flex-col items-center gap-8" method="POST"
                        action="{{ route('auth.daftar.register') }}">
                        @csrf
                        <div class="w-full flex flex-col gap-4">


                            <div class="w-full flex flex-col justify-between items-center">

                                <div
                                    class="w-full bg-gray-50 items-center rounded-lg border border-gray-500 flex">
                                    <input type="text" name="namalengkap"
                                        class="w-full text-gray-800 text-2xl font-normal font-['Montserrat'] p-5 rounded-lg outline-none"
                                        placeholder="Nama Lengkap">

                                </div>
                                @error('namalengkap')
                                    <div class="w-full text-start text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="w-full hidden flex-col justify-between items-center">

                                <div
                                    class="w-full bg-gray-50 items-center rounded-lg border border-gray-500 flex">
                                    <input type="hidden" name="tipe_akun" value="User"
                                        class="w-full text-gray-800 text-2xl font-normal font-['Montserrat'] p-5 rounded-lg outline-none"
                                        placeholder="Nama Lengkap">

                                </div>
                            </div>

                            <div class="w-full flex flex-col justify-between items-center">

                                <div
                                    class="w-full bg-gray-50 items-center rounded-lg border border-gray-500 flex">
                                    <input type="number" name="nomor_telepon"
                                        class="w-full text-gray-800 text-2xl font-normal font-['Montserrat'] p-5 rounded-lg outline-none"
                                        placeholder="Nomor Telepon">

                                </div>
                                @error('nomor_telepon')
                                    <div class="w-full text-start text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="w-full flex flex-col justify-between items-center">

                                <div
                                    class="w-full bg-gray-50 items-center rounded-lg border border-gray-500 flex">
                                    <input type="email" name="email"
                                        class="w-full text-gray-800 text-2xl font-normal font-['Montserrat'] p-5 rounded-lg outline-none"
                                        placeholder="Email">

                                </div>
                                @error('email')
                                    <div class="w-full text-start text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="w-full flex flex-col justify-between items-center">

                                <div
                                    class="w-full bg-gray-50 items-center rounded-lg border border-gray-500 pr-4 flex">
                                    <input type="password" name="password" id="password"
                                        class="w-full text-gray-800 text-2xl font-normal font-['Montserrat'] p-5 rounded-lg outline-none"
                                        placeholder="Password">

                                    <i class="ph ph-eye-slash  text-gray-700 text-3xl cursor-pointer"
                                        id="showPassword"></i>
                                </div>
                                @error('password')
                                    <div class="w-full text-start text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div
                            class=" text-gray-800 justify-center items-center text-center inline-flex text-l font-normal font-['Montserrat']">

                            Dengan menekan Daftar, saya telah menyetujui Syarat dan Ketentuan, serta Kebijakan
                            Privasi Jafa Digital Printing
                        </div>

                        <button type="submit"
                            class="w-fit px-7 py-4  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                            <div class=" text-gray-100 text-2xl font-normal font-['Montserrat'] ">
                                Daftar
                            </div>
                        </button>
                    </form>

                    <div class="w-full flex-col flex justify-center items-center gap-4">



                        <div class=" text-gray-800 text-xl font-bold font-['Montserrat']">
                            sudah punya akun?</div>

                        <button onclick="window.location.href='login-akun'"
                            class="text-blue-500 text-2xl hover:text-blue-400 font-normal font-['Montserrat'] underline">
                            Login Akun</button>

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
