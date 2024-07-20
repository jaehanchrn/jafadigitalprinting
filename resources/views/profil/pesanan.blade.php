@extends('layouts.main')
@section('container')
<div class="w-full h-fit relative bg-white">

    @include('partials.topheader')
    @include('partials.header')

    <!-- BODY -->

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
            
        </div>

        <div class="w-full flex flex-row justify-between px-12 gap-12">
            @include('partials.akunsaya-navigasi')

            <div class="w-full items-start">
                <div class="w-full">
                    <div class="w-full justify-start items-start flex-col flex gap-9 pr-32">
                        <div class="justify-start items-start text-neutral-800 text-6xl font-normal font-['Montserrat']">
                            PESANAN CUSTOMER
                        </div>

                        <div class="w-full justify-start items-start flex">
                            <div class="w-full rounded-full border-2 border-neutral-300 items-start inline-flex">
                            </div>
                        </div>

                        <table class="w-full border-separate border-2 border-spacing-5 table-fixed text-xl font-normal font-['Montserrat'] text-neutral-800">
                            <thead class="font-bold">
                                <tr>
                                    <td>No</td>
                                    <td>No.Invoice</td>
                                    <td>Proses</td>
                                    <td>Lihat Detail</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $order->no_invoice }}</td>
                                        <td>
                                            <form action="{{ route('pesanan.update', $order->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <select name="status" onchange="this.form.submit()">
                                                    <option value="Proses Verifikasi" {{ $order->status == 'Proses Verifikasi' ? 'selected' : '' }}>Proses Verifikasi</option>
                                                    <option value="Sedang Dikerjakan" {{ $order->status == 'Sedang Dikerjakan' ? 'selected' : '' }}>Sedang Dikerjakan</option>
                                                    <option value="Sedang Dikirim oleh Kurir" {{ $order->status == 'Sedang Dikirim oleh Kurir' ? 'selected' : '' }}>Sedang Dikirim oleh Kurir</option>
                                                    <option value="Sudah Diterima oleh Penerima" {{ $order->status == 'Sudah Diterima oleh Penerima' ? 'selected' : '' }}>Sudah Diterima Penerima</option>
                                                    <option value="Pesanan Dibatalkan" {{ $order->status == 'Pesanan Dibatalkan' ? 'selected' : '' }}>Pesanan Dibatalkan</option>
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('pesanan.detail', $order->id) }}" class="text-blue-500 hover:text-blue-400 text-xl font-normal font-['Montserrat'] underline">Lihat Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- FOOTER -->
    @include('partials.footer')

</div>

@endsection
