@extends('layouts.main')
@section('container')
    <div class="w-full h-fit relative bg-white">
        @include('partials.topheader')
        @include('partials.header')

        <div class="w-full flex-col justify-center items-center flex py-16 gap-8">
            <div class="w-full flex-row flex justify-start items-start px-12 gap-1">
                @if (auth()->user()->tipe_akun === 'Admin')
                    <!-- Assuming 'is_admin' is a boolean field indicating if the user is an admin -->
                    <a href="{{ route('pesanan.index') }}"
                        class="text-blue-500 text-xl font-normal font-['Montserrat']">Riwayat Pesanan > </a>
                @else
                    <a href="{{ route('pesanan.index.history') }}"
                        class="text-blue-500 text-xl font-normal font-['Montserrat']">Riwayat Pesanan > </a>
                @endif
                <a class="text-blue-300 text-xl font-normal font-['Montserrat']">Detail</a>
            </div>

            <div class="w-full flex flex-row justify-between px-12 gap-12">
                <!-- STRUK DETAIL PESANAN -->
                <div
                    class="w-full h-fit flex-col flex relative bg-neutral-100 shadow-neutral-300 shadow-md p-5 gap-6 rounded-2xl ">
                    <div class="w-full h-fit justify-between items-center flex relative rounded-tr-2xl rounded-tl-2xl">
                        <img class="w-32 h-fit" src="{{ url('pictures/logo-jafa-warna.png') }}" />
                        <div class="text-3xl text-blue-500 font-normal font-['Montserrat']">DETAIL PESANAN</div>
                        <a href="{{ route('pesanan.index.history') }}" class="ph-bold ph-x text-3xl text-neutral-500"></a>
                    </div>

                    <div class="w-full rounded-full border-2 border-neutral-200 items-start inline-flex"></div>

                    <div class="w-full flex flex-col relative">
                        <div class="w-full flex flex-row relative justify-between">
                            <div class="text-xl text-neutral-800 font-bold font-['Montserrat']">Status</div>
                            <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">{{ $order->status }}
                            </div>
                        </div>
                        <div class="w-full flex flex-row relative justify-between">
                            <div class="text-xl text-neutral-800 font-bold font-['Montserrat']">No. Invoice</div>
                            <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">{{ $order->no_invoice }}
                            </div>
                        </div>
                        <div class="w-full flex flex-row relative justify-between">
                            <div class="text-xl text-neutral-800 font-bold font-['Montserrat']">Tanggal Pemesanan</div>
                            <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">
                                {{ $order->created_at->format('d F Y') }}</div>
                        </div>
                    </div>

                    <div class="w-full relative">
                        <div class="w-full relative rounded-xl flex-col inline-flex text-justify">
                            <div class="text-xl text-neutral-800 font-bold font-['Montserrat']">Alamat Pengiriman</div>
                            <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">
                                {{ $order->addressUser->address }},
                                {{ $order->addressUser->pricelist->name_city }},
                                {{ $order->addressUser->pricelist->name_disctrict }},
                                {{ $order->addressUser->zip_code }}
                            </div>
                        </div>
                    </div>

                    <div class="w-full flex flex-col relative">
                        <div class="w-full flex flex-col relative justify-start">
                            <div class="text-xl text-neutral-800 font-bold font-['Montserrat']">Nomor Telepon</div>
                            <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">
                                {{ $order->user->nomor_telepon }}</div>
                        </div>
                    </div>

                    <div class="w-full rounded-full border-2 border-neutral-200 items-start inline-flex"></div>

                    <div class="w-full flex flex-col relative gap-3">
                        <div class="text-xl text-neutral-800 font-bold font-['Montserrat']">Rincian Pesanan</div>

                        @foreach ($order->items as $item)
                            <div class="w-full flex flex-row relative justify-between gap-8">
                                <div class="w-fit flex flex-row relative justify-start gap-3">
                                    <div class="w-20 h-20">
                                        <img class="w-full h-full rounded-lg"
                                            src="{{ $item->product ? asset($item->product->image) : Storage::url($item->service->print_images) }}">
                                    </div>
                                    <div class="w-fit flex flex-col relative justify-start">
                                        <div class="text-xl text-neutral-800 font-bold font-['Montserrat']">
                                            {{ $item->product ? $item->product->name : $item->service->print_type }}
                                        </div>
                                        <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">
                                            {{ $item->product ? $item->product->description : $item->service->size }}
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">
                                    x{{ $item->quantity }}</div>
                                <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">Rp
                                    {{ number_format($item->product->price, 0, ',', '.') }}</div>
                            </div>
                        @endforeach
                    </div>

                    <div class="w-full flex flex-col relative gap-1">
                        <div class="w-full flex flex-row relative justify-between">
                            <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">Total Harga</div>
                            <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">Rp
                                {{ number_format($order->total_price_product, 0, ',', '.') }}</div>
                        </div>
                        <div class="w-full flex flex-row relative justify-between">
                            <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">Biaya Pengiriman</div>
                            <div class="text-xl text-neutral-800 font-normal font-['Montserrat']">Rp
                                {{ number_format($order->shipping_cost, 0, ',', '.') }}</div>
                        </div>
                        <div class="w-full flex flex-row relative justify-between">
                            <div class="text-xl text-neutral-800 font-bold font-['Montserrat']">Total Harga Keseluruhan
                            </div>
                            <div class="text-xl text-blue-500 font-bold font-['Montserrat']">Rp
                                {{ number_format($order->total_price_order, 0, ',', '.') }}</div>
                        </div>
                    </div>

                    <div class="w-full rounded-full border-2 border-neutral-200 items-start inline-flex"></div>

                    <div class="w-full flex flex-row relative items-center gap-3">
                        <div class="text-xl text-neutral-800 font-bold font-['Montserrat']">Bukti Pembayaran</div>
                        <a href="{{ Storage::url($order->payment_confirmation_image) }}"
                            class="text-2xl text-blue-500 cursor-pointer" target="_blank">Lihat Bukti Pembayaran</a>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')
    </div>
@endsection
