@extends('layouts.main')
@section('container')
    <div class="w-full h-fit relative bg-white">

        @include('partials.topheader')
        @include('partials.header')
        @php
            $total_price_product = session('total_price_product');

        @endphp
        <!-- BODY -->

        <div class="w-full flex-col justify-center items-end flex py-16 gap-8">

            <div class="w-full justify-start px-12">
                <div class="w-full flex-col flex justify-center items-start  relative ">
                    <div class="w-[600px] h-[95px] items-center flex bg-blue-500 rounded-tl-2xl rounded-tr-2xl">
                        <div class="pl-12 absolute text-neutral-50 text-[40px] font-normal font-['Montserrat']">
                           Alamat Penerima</div>
                    </div>
                </div>
            </div>

            <div class="w-full justify-start items-start inline-flex px-24">
                <div><span class="text-yellow-500 text-xl font-semibold font-['Montserrat']">1. Keranjang Pesanan >> 2.
                        Alamat Penerima
                    </span>
                    <span class="text-neutral-300 text-xl font-semibold font-['Montserrat']"> >>
                        3. Pembayaran</span>
                </div>
            </div>

            <div class="w-full h-fit flex flex-col justify-between px-12">
                <div
                    class="w-full self-stretch relative justify-start items-center flex rounded-[20px] border border-zinc-500 ">
                    {{-- <div class=" absolute text-center  text-zinc-500 text-2xl font-normal font-['Montserrat']">Mohon
                        maaf, belum ada produk atau jasa yang ditambahkan.</div> --}}

                    <div class="w-full p-8 flex-col flex ">

                        <div class="w-full flex-col flex gap-6">
                            <div class="relative flex flex-row ">
                                <div class="w-full gap-6 flex-row flex">
                                    <div class="w-full  ">
                                        <div class=" text-2xl text-neutral-800 font-bold font-['montserrat']">DETAIL PENERIMA
                                        </div>
                                    </div>
                                    <div class="w-full relative">
                                        <a href="{{ route('checkout.address.form') }}"
                                            class="text-center text-blue-500 hover:text-blue-400  text-xl font-normal font-['Montserrat'] underline">
                                            +Tambah Alamat
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('checkout.address.select') }}" method="POST" class="flex flex-col gap-4 ">
                                @csrf
                                @foreach (auth()->user()->addresses as $address)
                                    <!-- Display address details and select button -->
                                    <div class="">{{ $address->name }}</div>
                                    <!-- Other address details -->
                                    <div
                                        class="w-[500px] py-6 px-8 self-stretch relative justify-start items-start flex flex-col rounded-lg  bg-neutral-200 shadow-md shadow-neutral-400 ">
                                        <div class="text-2xl text-blue-500 font-bold font-['montserrat']"> {{ auth()->user()->namalengkap }} ( {{ auth()->user()->nomor_telepon }} )
                                            {{ $address->name }}</div>
                                        <div class="text-l text-neutral-800 font-['montserrat'] pt-2">Alamat Lengkap :
                                            {{ $address->address }}</div>
                                        <div class="text-l text-neutral-800 font-['montserrat']">Kota :
                                            {{ $address->pricelist->name_city }}</div>
                                        <div class="text-l text-neutral-800 font-['montserrat'] pb-2">Kecamatan :
                                            {{ $address->pricelist->name_disctrict }}</div>

                                        <input type="hidden" name="total_price_product"
                                            value="{{ $total_price_product }}">
                                        <input type="hidden" name="total_price_order"
                                            value="{{ $total_price_product + $address->pricelist->price }}">


                                        <!-- Tampilkan ongkos kirim -->
                                        <div class="w-full flex justify-between">
                                            <div class="text-xl font-bold text-neutral-800 font-['montserrat']">
                                                Ongkos Kirim
                                            </div>
                                            <div class="text-xl font-bold text-blue-400 font-['montserrat']">
                                                Rp
                                                {{ number_format($address->pricelist->price, 0, ',', '.') }}
                                            </div>
                                        </div>

                                        <div class="w-full flex justify-between pb-6">
                                            <div class="text-xl font-bold text-neutral-800 font-['montserrat']">
                                                Total Harga Keseluruhan
                                            </div>
                                            <div class="text-xl font-bold text-blue-400 font-['montserrat']">
                                                Rp
                                                {{ number_format($address->pricelist->price + $total_price_product), 0, ',', '.' }}
                                            </div>
                                        </div>

                                        <div class="w-full flex justify-end gap-6">
                                            <!-- Ubah Alamat/Pilih Alamat -->
                                            <button onclick="window.location.href='/'"
                                                class="text-blue-500 hover:text-blue-400 text-l font-normal font-['Montserrat'] underline pb-2">
                                                Ubah Alamat
                                            </button>
                                            <button type="submit" name="address_id" value="{{ $address->id }}"
                                                class="font-bold text-neutral-50 hover:opacity-80 font-['Montserrat'] px-6 py-2 rounded-md bg-blue-500 "
                                                data-shipping-cost="{{ $address->pricelist->price }} ">Pilih
                                                Alamat</button>
                                        </div>
                                    </div>
                                @endforeach
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <!-- FOOTER -->
        @include('partials.footer')

    </div>
@endsection
