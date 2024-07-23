@extends('layouts.main')
@section('container')
    <div class="w-full h-fit relative bg-white">
        @include('partials.topheader')
        @include('partials.header')

        <div class="w-full flex-col justify-center items-center flex py-16 gap-8">
            <div class="w-full flex-col flex justify-start items-start px-12 ">
                <div>
                    <span class="text-blue-300 text-xl font-normal font-['Montserrat']"> Riwayat Pesanan</span>
                </div>
            </div>

            <div class="w-full flex flex-row justify-between px-12 gap-12">
                @include('partials.akunsaya-navigasi')

                <div class="w-full items-start">
                    <div class="w-full">
                        <div class="w-full justify-start items-start flex-col flex gap-9">
                            <div class="justify-start items-start text-neutral-800 text-6xl font-normal font-['Montserrat']">
                                RIWAYAT PESANAN
                            </div>

                            <div class="w-full justify-start items-start flex">
                                <div class="w-full rounded-full border-2 border-neutral-300 items-start inline-flex"></div>
                            </div>

                            @if ($orders->isEmpty())
                                <div
                                    class="w-full relative bg-neutral-100 shadow-neutral-300 shadow-md rounded-xl flex-col inline-flex p-8 text-justify">
                                    <div class="text-red-500 text-xl font-normal font-['Montserrat']">Mohon maaf, saat ini
                                        belum ada pesanan.</div>
                                </div>
                            @else
                                @foreach ($orders as $order)
                                    <div
                                        class="w-full relative bg-neutral-100 shadow-neutral-300 shadow-md rounded-xl flex-col inline-flex py-8">
                                        <div class="w-full relative bg-neutral-100 flex-col inline-flex gap-4">
                                            <div
                                                class="w-full relative bg-orange-500 flex-row flex justify-center items-center px-10 py-2 font-semibold text-l text-neutral-50 font-['Montserrat']">
                                                <div class="w-full relative justify-start items-center flex">
                                                    {{ $order->created_at->format('d F Y') }}</div>
                                                <div class="w-full relative justify-end items-center flex">
                                                    {{ $order->no_invoice }}</div>
                                            </div>

                                            <div
                                                class="w-full relative flex-col flex justify-start items-start px-10 gap-1 font-normal font-['Montserrat']">
                                                <div class="w-full relative text-xl text-blue-500 font-semibold ">
                                                    {{ $order->user->namalengkap ?? 'Unknown User' }}
                                                </div>

                                                @php
                                                    $itemDisplayed = false;
                                                @endphp

                                                <div class="w-full relative text-l text-blue-400">
                                                    @foreach ($order->items as $item)
                                                        @if (!$itemDisplayed)
                                                            <div class="w-full flex flex-row items-center gap-4 py-2">
                                                                @if ($item->product)
                                                                    <div class="w-20 h-20">
                                                                        <img class="w-full h-full rounded-lg"
                                                                            src="{{ asset($item->product->image) }}"
                                                                            alt="{{ $item->product->name }}">
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <div class="text-xl text-neutral-800 font-bold">
                                                                            {{ $item->product->name }}</div>
                                                                        <div class="text-xl text-neutral-800">Qty:
                                                                            {{ $item->quantity }}</div>
                                                                        <div class="text-xl text-neutral-800">Price: Rp
                                                                            {{ number_format($item->product->price, 0, ',', '.') }}
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->service)
                                                                    <div class="w-20 h-20">
                                                                        <img class="w-full h-full rounded-lg"
                                                                            src="{{ Storage::url($item->service->print_images) }}"
                                                                            alt="{{ $item->service->print_type }}">
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <div class="text-xl text-neutral-800 font-bold">
                                                                            {{ $item->service->print_type }} -
                                                                            {{ $item->service->size }}</div>
                                                                        <div class="text-xl text-neutral-800">Qty:
                                                                            {{ $item->quantity }}</div>
                                                                        <div class="text-xl text-neutral-800">Price: Rp
                                                                            {{ number_format($item->service->price, 0, ',', '.') }}
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            @php
                                                                $itemDisplayed = true;
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                </div>

                                                <div class="w-full relative text-l text-neutral-800">
                                                    {{ $order->addressUser->address }},
                                                    {{ $order->addressUser->pricelist->name_city }},
                                                    {{ $order->addressUser->pricelist->name_disctrict }},
                                                    {{ $order->addressUser->zip_code }}</div>
                                            </div>

                                            <div class="w-full relative justify-end items-end flex px-10">
                                                <div class="justify-center items-center flex flex-col">
                                                    <div
                                                        class="w-full relative justify-center flex text-l text-neutral-800">
                                                        Total Harga Keseluruhan</div>
                                                    <div
                                                        class="w-full relative justify-center flex text-3xl font-bold text-neutral-800">
                                                        Rp {{ number_format($order->total_price_order, 0, ',', '.') }}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w-full relative flex-row flex px-8 gap-8">
                                                <div class="w-full h-full flex">
                                                    @if ($order->status == 'Proses Verifikasi')
                                                        <div
                                                            class="text-center text-green-500 text-xl font-bold font-['Montserrat']">
                                                            Proses Verifikasi</div>
                                                    @elseif($order->status == 'Sedang Dikerjakan')
                                                        <div
                                                            class="text-center text-green-500 text-xl font-bold font-['Montserrat']">
                                                            Sedang Dikerjakan</div>
                                                    @elseif($order->status == 'Sedang Dikirim oleh Kurir')
                                                        <div
                                                            class="text-center text-green-500 text-xl font-bold font-['Montserrat']">
                                                            Sedang Dikirim oleh Kurir</div>
                                                    @elseif($order->status == 'Sudah Diterima oleh Penerima')
                                                        <div
                                                            class="text-center text-green-500 text-xl font-bold font-['Montserrat']">
                                                            Sudah Diterima oleh Penerima</div>
                                                    @elseif($order->status == 'Pesanan Dibatalkan')
                                                        <div
                                                            class="text-center text-red-500 text-xl font-bold font-['Montserrat']">
                                                            Pesanan Dibatalkan</div>
                                                    @endif
                                                </div>
                                                @if ($order->status == 'Proses Verifikasi')
                                                    <form id="cancel-form-{{ $order->id }}"
                                                        action="{{ route('order.cancel', $order->id) }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                        <button type="submit" id="cancel-button-{{ $order->id }}"
                                                            class="w-fit h-fit px-5 py-3 gap-4 bg-neutral-50 rounded-[10px] border-2 border-blue-500 inline-flex hover:opacity-75">
                                                            <div
                                                                class="text-center text-nowrap text-blue-500 text-xl font-bold font-['Montserrat']">
                                                                Batalkan Pesanan
                                                            </div>
                                                        </button>
                                                    </form>

                                                    <button type="button"
                                                        onclick="confirmCancellation({{ $order->id }})"
                                                        class="w-fit h-fit px-5 py-3 gap-4 bg-neutral-50 rounded-[10px] border-2 border-blue-500 inline-flex hover:opacity-75">
                                                        <div
                                                            class="text-center text-nowrap text-blue-500 text-xl font-bold font-['Montserrat']">
                                                            Batalkan Pesanan
                                                        </div>
                                                    </button>
                                                @endif
                                                <div class="w-fit relative justify-end items-center flex gap-6">
                                                    <a href="{{ route('pesanan.index.history.detail', $order->id) }}"
                                                        class="text-center  text-nowrap text-blue-500 hover:text-blue-400 text-xl font-normal font-['Montserrat'] underline">Detail
                                                        Pesanan</a>

                                                    <button
                                                        class="px-5 py-3 bg-blue-500 rounded-[10px] inline-flex hover:opacity-75" onclick="window.location.href='https:/wa.me/6281317554872'">
                                                        <div
                                                            class="text-neutral-100  text-nowrap text-xl font-normal font-['Montserrat'] ">
                                                            Chat Kami</div>
                                                    </button>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')
    </div>
@endsection
<script>
    function confirmCancellation(orderId) {
        if (confirm('Apakah Anda yakin ingin membatalkan pesanan ini?')) {
            document.getElementById('cancel-form-' + orderId).submit();
        }
    }
</script>   