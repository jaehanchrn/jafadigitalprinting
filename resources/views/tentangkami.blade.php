@extends('layouts.main')
@section('container')
    <div class="w-full h-fit relative bg-white">
        @include('partials.whatsapp')
        @include('partials.topheader')
        @include('partials.header')

        <!-- BODY -->
        <div class="w-full h-fit flex-col justify-start inline-flex py-20 px-16 gap-4">

            <div class="pb-4 text-blue-500  text-xl font-normal font-['Montserrat']">Beranda
                >
                <a class="text-blue-300 text-xl font-normal font-['Montserrat']">
                    Tentang Kami
                </a>
            </div>

            <div
                class="w-full justify-center items-center flex relative bg-neutral-100 shadow-md shadow-neutral-300 border-neutral-200 border-2 rounded-[32px]">
                <div class="w-full flex-col flex relative justify-center items-center py-12">
                    <div
                        class="w-full flex justify-center items-center text-neutral-50  text-5xl font-bold font-['Montserrat'] bg-blue-500 py-6 mt-6">
                        JAFA DIGITAL PRINTING
                    </div>

                    <div class="w-full flex justify-center items-center">
                        <img class="w-full" src="{{ url('pictures/banner-photo.jpg') }}" alt="Image" />
                    </div>

                    <div
                        class="w-full flex-col flex relative justify-start items-start text-neutral-800  text-3xl font-bold font-['Montserrat'] px-20 py-12">

                        <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']"> <a class="font-bold">
                                Jafa Digital Printing </a> adalah sebuah usaha yang bergerak di
                            bidang jasa percetakan, desain grafis, pengetikan, fotokopi, dan penjualan alat tulis kantor
                            (ATK). Usaha ini sudah berdiri sejak tahun 2012, dimana mengawali dari usaha Jafa Fotokopi
                            dan kini ingin berkembang lebih luas menjadi Jafa Digital Printing.
                        </div>
                        <br>

                        <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']">
                            Dalam menjalani usaha ini, kami terus <a class="font-bold"> memberikan pelayanan
                                yang terbaik </a> dan berkomitmen
                            memberikan hasil yang maksimal kepada para pelanggan kami.
                        </div>
                        <br>
                        <br>

                        <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']">
                            <a class="font-bold"> Hubungi Kami </a><br>
                            No.Telp : 6281317554872 (Suhartono)<br>
                            Email : jafadigitalprinting@gmail.com
                        </div>
                        <br>

                        <div class="text-neutral-800 text-2xl font-normal font-['Montserrat']">
                            <a class="font-bold"> Alamat </a><br>
                            Jl. Raya Sukahati, Sukahati, Kec. Cibinong, Kabupaten Bogor, Jawa Barat 16913
                        </div>
                        
                    </div>



                </div>
            </div>

        </div>

        <!-- FOOTER -->
        @include('partials.footer')
    </div>
@endsection
