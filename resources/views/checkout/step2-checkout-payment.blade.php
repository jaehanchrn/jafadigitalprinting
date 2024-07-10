@extends('layouts.main')
@section('container')
    <div class="w-full h-fit relative bg-white">
        @include('partials.topheader')
        @include('partials.header')

        <!-- BODY -->
        <div class="w-full flex-col justify-center items-end flex py-16 gap-8">
            <div class="w-full justify-start px-12">
                <div class="w-full flex-col flex justify-center items-start relative">
                    <div class="w-[600px] h-[95px] items-center flex bg-blue-500 rounded-tl-2xl rounded-tr-2xl">
                        <div class="pl-12 absolute text-neutral-50 text-[40px] font-normal font-['Montserrat']">
                            Pembayaran
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full justify-start items-start inline-flex px-24">
                <div>
                    <span class="text-yellow-500 text-xl font-semibold font-['Montserrat']">
                        1. Keranjang Pesanan >> 2. Data Penerima >> 3. Pembayaran
                    </span>
                </div>
            </div>

            <div class="w-full h-fit flex flex-col justify-between px-12">
                <div class="w-full self-stretch relative justify-start flex rounded-[20px] border border-zinc-500">
                    <div class="w-full p-8 flex-col flex">
                        <div class="w-full flex-col flex gap-6">
                            <!-- Form untuk upload bukti pembayaran -->
                            <form action="{{ route('checkout.payment.confirm') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="w-full text-neutral-800 text-2xl font-bold pb-2">UPLOAD BUKTI PEMBAYARAN</div>
                                <div class="w-[500px] text-neutral-800 text-xl font-normal pb-4"> => Silahkan Transfer
                                    sesuai
                                    nominal <a class="font-bold">Total Harga Keseluruhan</a> ke nomor rekening
                                    (042101082518506) a/n Almiranda Jaihan Chairani</div>
                                <div
                                    class="w-[500px] py-6 px-8 self-stretch relative justify-start items-start flex flex-col rounded-lg  bg-neutral-200">
                                    <!-- Payment proof upload field -->
                                    <input type="file" name="payment_proof" class="pb-4">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="total_price_product" value="{{ $total_price_product }}">
                                    <input type="hidden" name="shipping_cost" value="{{ $shipping_cost }}">
                                    <input type="hidden" name="address_id" value="{{ $selected_address_id }}">
                                    <input type="hidden" name="total_price_order" value="{{ $total_price_order }}">
                                    @error('payment_proof')
                                        {{ $message }}
                                    @enderror
                                    @error('total_price_product')
                                        {{ $message }}
                                    @enderror
                                    @error('shipping_cost')
                                        {{ $message }}
                                    @enderror
                                    @error('address_id')
                                        {{ $message }}
                                    @enderror
                                    @error('total_price_order')
                                        {{ $message }}
                                    @enderror

                                    <!-- Display payment form fields -->
                                    <div class="w-full flex justify-between">
                                        <div class="text-xl font-bold text-neutral-800 font-['montserrat']">
                                            Ongkos Kirim
                                        </div>
                                        <div class="text-xl font-bold text-blue-400 font-['montserrat']">
                                            Rp {{ number_format($shipping_cost, 0, ',', '.') }}

                                        </div>
                                    </div>
                                    <div class="w-full flex justify-between pb-4">
                                        <div class="text-xl font-bold text-neutral-800 font-['montserrat']">
                                            Total Harga Keseluruhan
                                        </div>
                                        <div class="text-xl font-bold text-blue-400 font-['montserrat']">
                                            Rp {{ number_format($total_price_order, 0, ',', '.') }}

                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="w-full flex justify-end">
                                        <button type="submit"
                                            class="font-bold text-neutral-50 hover:opacity-80 font-['Montserrat'] px-6 py-2 rounded-md bg-blue-500 ">Konfirmasi
                                            Pembayaran</button>
                                    </div>
                                </div>
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
