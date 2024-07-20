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
                    <div class="text-center text-neutral-800 text-[64px] font-normal font-['Montserrat']">Peralatan
                        Tulis
                        dan
                        Kantor</div>
                    <div class=" text-center text-neutral-500 text-xl font-normal font-['Montserrat']">Anda butuh
                        peralatan
                        tulis dan berbagai kebutuhan untuk kantor? Anda berada di tempat yang tepat! Harga dijamin
                        terjangkau untuk anda yang ingin membeli dalam jumlah yang banyak. Ingat kami hanya menjual
                        dalam
                        jumlah per pack ya.</div>
                </div>

            </div>

            <div class="w-full h-fit flex flex-row py-20 justify-between px-12">
                <div class=" flex-col inline-flex">
                    <div class="w-[600px] p-5 bg-blue-500 rounded-full justify-between items-start inline-flex">
                        <div class="text-neutral-50 text-2xl font-normal font-['Montserrat']">Mau cari produk apa?
                        </div>
                        <i class="ph-bold ph-magnifying-glass text-neutral-50 text-3xl"></i>
                    </div>
                </div>

                <div class=" flex-col inline-flex">
                    <button
                        class="w-[400px] p-5 bg-neutral-50 rounded-2xl border border-blue-500 justify-between items-start inline-flex">
                        <div class="text-blue-500 text-2xl font-normal font-['Montserrat']">Filter by
                        </div>
                        <i class="ph-fill ph-caret-down text-blue-500 text-3xl"></i>
                    </button>
                </div>
            </div>

            <div class="w-full h-fit flex flex-row justify-between px-12">
                <div class="w-[410px] h-fit flex flex-col justify-between">
                    <div class="w-[410px] self-stretch relative justify-start items-start flex rounded-[20px] bg-blue-100">

                        <div class="w-full flex-col flex gap-6">

                            <div class="w-full flex-col flex">

                                <div
                                    class="justify-center items-center flex-col flex text-neutral-50 bg-blue-500 rounded-tl-2xl rounded-tr-2xl py-6 text-[40px] font-normal font-['Montserrat']">
                                    Kategori Produk</div>

                                <div class="w-full p-8">
                                    <div class="w-full gap-6 flex-col flex">

                                        <button
                                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                            <div class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                                Alat
                                                Tulis
                                                dan Kantor</div>
                                        </button>
                                        <button
                                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                            <div class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                                Berbagai
                                                Jenis Kertas</div>
                                        </button>
                                        <button
                                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                            <div class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                                Berbagai
                                                Macam Buku</div>
                                        </button>
                                        <button
                                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                            <div class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                                Amplop
                                                dan
                                                Map</div>
                                        </button>
                                        <button
                                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                            <div class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                                Alat
                                                Mewarnai</div>
                                        </button>
                                        <button
                                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                            <div class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                                Aneka
                                                Stationary</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex-col gap-[40px] inline-flex">
                    <div class="flex-col justify-center items-start gap-[26px] inline-flex pt-28">
                        <div><span class="text-blue-500 text-xl font-normal font-['Montserrat']">Beranda> Peralatan
                                Tulis dan Kantor >
                            </span>
                            <span class="text-blue-300 text-xl font-normal font-['Montserrat']"> Alat Tulis dan
                                Kantor</span>
                        </div>
                        <div class="basis-0 justify-center items-start gap-[30px] flex flex-wrap">
                            @foreach ($products as $product)
                                <div
                                    class="w-72 h-fit relative flex flex-col shadow-md shadow-neutral-400 rounded-lg  justify-between ">
                                    <form action="{{ route('cart.addToCart', ['id' => $product->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <img class="w-72 h-fit rounded-tr-lg rounded-tl-lg" src="{{ url($product->image) }}"
                                            alt="{{ $product->name }}">
                                           
                                            <div class="w-72 py-6 bg-neutral-100 px-6 ">
                                            <div class="w-full text-blue-500 text-xl font-bold font-['Montserrat'] pb-2">
                                                {{ $product->name }}</div>
                                            <div class="w-full text-blue-300 text-l font-bold font-['Montserrat'] pb-2">
                                                Rp
                                                {{ number_format($product->price, 0, ',', '.') }}/pack</div>

                                                @if (auth()->user()->tipe_akun === 'User')
                                            <div
                                                class="w-full text-center font-normal text-neutral-800 font-['Montserrat'] text-sm flex flex-row gap-4 items-center">
                                                Jumlah
                                                <input type="number" name="quantity" id="quantity"
                                                    class="w-full font-bold font-['Montserrat'] py-1 text-l text-neutral-800 border-blue-500 border-2 bg-neutral-50 text-center rounded mt-1 "
                                                    min="1" value="1" required>
                                            </div>
                                            @endif
                                        </div>
                                        
                                        @if (auth()->user()->tipe_akun === 'User')
                                            <button type="submit"
                                                class="w-72 h-fit py-2 hover:opacity-80 bg-blue-500 text-neutral-50 font-normal font-['Montserrat'] rounded-bl-lg rounded-br-lg justify-center items-center flex">
                                                Tambah ke Keranjang
                                            </button>
                                        @endif

                                    </form>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="relative flex-row gap-4 justify-center items-center flex">
                        <button class="rounded-[10px] justify-center items-center gap-2.5 inline-flex">
                            <div
                                class="text-center text-blue-500 text-l hover:opacity-50 font-normal font-['Montserrat'] underline">
                                sebelumnya
                        </button>
                        <div class="rounded-[10px] justify-center items-center gap-2.5 inline-flex">
                            <div class="text-center text-neutral-800 text-xl font-bold font-['Montserrat']">
                                (1/20)</div>
                        </div>
                        <button class="rounded-[10px] justify-center items-center gap-2.5 inline-flex">
                            <div
                                class="text-center text-blue-500 text-l hover:opacity-50 font-normal font-['Montserrat'] underline">
                                selanjutnya</div>
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- FOOTER -->
    @include('partials.footer')
    </div>
@endsection
