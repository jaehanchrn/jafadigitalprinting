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
        <div class="w-full flex-col justify-center items-center flex py-16">
            <div class="w-[1000px] h-fit flex-col flex items-center relative  gap-20">

                <div class="w-full flex-col flex justify-center items-center">
                    <div class="text-center text-gray-800 text-[64px] font-normal font-['Montserrat']">Jasa Ketik
                        dan
                        Desain</div>
                    <div class=" text-center text-gray-500 text-xl font-normal font-['Montserrat']">Kami
                        siap
                        melayani pengetikan dan juga desain yang ada butuhkan. <br> belum ada referensi atau ide untuk
                        desain? Tenang kami akan bantu solusikan <br> apa yang anda inginkan!</div>
                </div>

                <div class="flex-col justify-center items-center inline-flex gap-12">
                    <img class="w-[650px] h-[509.35px]" src="{{ url('pictures/pic-store.png') }}" />
                    <div class="text-center text-sky-800 text-3xl font-normal font-['Montserrat']">Mohon
                        maaf
                        untuk saat ini hanya melayani melalui datang ke toko langsung atau menghubungi whatsapp kami
                        melalui nomor dibawah ini</div>
                    <button class="px-7 py-4  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                        <div class=" text-gray-100 text-2xl font-normal font-['Montserrat']">
                            Kirim Pesan
                            melalui Whatsapp
                        </div>
                    </button>

                </div>
            </div>

        </div>
        
        <!-- FOOTER -->
        @include('partials.footer')
    </div>
</body>

</html>
