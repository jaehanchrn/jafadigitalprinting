@extends('layouts.main')
@section('container')
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
                    @include('partials.akunsaya-navigasi')

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

@endsection
