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
                    <div class="text-center text-neutral-800 text-[64px] font-normal font-['Montserrat']">Jasa Ketik
                        dan
                        Desain</div>
                    <div class=" text-center text-neutral-500 text-xl font-normal font-['Montserrat']">Kami
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
                        <div class=" text-neutral-100 text-2xl font-normal font-['Montserrat']">
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
@endsection
