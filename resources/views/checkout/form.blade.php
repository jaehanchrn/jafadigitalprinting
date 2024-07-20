@extends('layouts.main')
@section('container')

    <div class="w-full flex-col justify-center items-center flex  ">
        <div class="w-[1000px] h-fit flex-col flex items-center relative bg-neutral-200 rounded-2xl ">
            <div
                class="w-[1000px] h-fit justify-center items-center flex py-8 relative bg-blue-500 rounded-tr-2xl rounded-tl-2xl">
                <div class="py-6 text-5xl text-neutral-50 font-normal font-['Montserrat'] ">
                    Alamat Penerima
                </div>
            </div>

            <div class="w-full flex flex-col gap-28 py-24">

                <form action="{{ route('checkout.address.form.save') }}" method="POST"
                    class="w-full flex flex-col gap-8 py-4 px-20">
                    @csrf
                    <!-- Hidden Field untuk user_id -->
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <!-- Alamat -->
                    <div class="w-full flex flex-col justify-between items-center">
                        <div class="w-full bg-neutral-50 items-center rounded-lg border border-neutral-500 flex">
                            <textarea name="address" id="text"
                                class="w-full text-neutral-800 text-2xl font-normal font-['Montserrat'] p-5 rounded-lg outline-none"
                                placeholder="Alamat Lengkap"></textarea>
                        </div>
                        @error('address')
                            <div class="w-full text-start text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Dropdown Pricelist - Kota/Kabupaten -->
                    <div class="w-full flex flex-col justify-between items-center">
                        <div
                            class="w-full bg-neutral-50 px-4 py-2 items-center rounded-lg border border-neutral-500 flex">
                            <select name="pricelist_id"
                                class="text-neutral-800 rounded-lg text-2xl font-normal font-['Montserrat']">
                                @php
                                    $cities = [];
                                @endphp
                                @foreach ($pricelists as $pricelist)
                                    @if (!in_array($pricelist->name_city, $cities))
                                        <option value="{{ $pricelist->id }}">{{ $pricelist->name_city }}</option>
                                        @php
                                            $cities[] = $pricelist->name_city;
                                        @endphp
                                    @endif
                                @endforeach
                            </select>
                            {{-- <i class="ph-fill ph-caret-down text-neutral-500 text-3xl "></i> --}}
                        </div>
                        @error('pricelist_id')
                            <div class="w-full text-start text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Dropdown Pricelist - Kecamatan -->
                    <div class="w-full flex flex-col justify-between items-center">
                        <div
                            class="w-full bg-neutral-50 px-4 py-2 items-center rounded-lg border border-neutral-500 flex">
                            <select name="pricelist_id"
                                class="text-neutral-800 rounded-lg text-2xl font-normal font-['Montserrat']">
                                @foreach ($pricelists as $pricelist)
                                    <option value="{{ $pricelist->id }}">{{ $pricelist->name_disctrict }}</option>
                                @endforeach
                            </select>
                            {{-- <i class="ph-fill ph-caret-down text-neutral-500 text-3xl "></i> --}}
                        </div>
                        @error('pricelist_id')
                            <div class="w-full text-start text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <!-- Kode Pos -->
                    <div class="w-full flex flex-col justify-between items-center">
                        <div class="w-full bg-neutral-50 items-center rounded-lg border border-neutral-500 flex">
                            <input type="text" name="zip_code" id="text"
                                class="w-full text-neutral-800 text-2xl font-normal font-['Montserrat'] p-5 rounded-lg outline-none"
                                placeholder="Kode Pos">
                        </div>
                        @error('zip_code')
                            <div class="w-full text-start text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Tombol Simpan Alamat -->
                    <div class="w-full flex-col flex justify-center items-center gap-8 py-8 pb-20">
                        <button type="submit"
                            class="px-7 py-4  bg-blue-500 rounded-[10px] inline-flex hover:opacity-75">
                            <div class="text-neutral-100 text-2xl font-normal font-['Montserrat']">
                                Simpan Alamat
                            </div>
                        </button>
                        <a href="{{ route('checkout.address.index') }}"
                            class="px-7 py-4  bg-neutral-50 rounded-[10px] border-blue-500 border-2 inline-flex hover:opacity-75">
                            <div class="text-blue-500 text-2xl font-normal font-['Montserrat']">
                                Batal
                            </div>
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

{{-- <!-- Dropdown Pricelist - Kota/Kabupaten -->
                    <div class="w-full flex flex-col justify-between items-center">
                        <div class="w-full bg-neutral-50 px-4 py-2 items-center rounded-lg border border-neutral-500 flex">
                            <select name="pricelist_city" class="text-neutral-800 rounded-lg text-2xl font-normal font-['Montserrat']">
                                @foreach ($uniqueCities as $city)
                                    <option value="{{ $city }}">{{ $city }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('pricelist_city')
                            <div class="w-full text-start text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Dropdown Pricelist - Kecamatan -->
                    <div class="w-full flex flex-col justify-between items-center">
                        <div class="w-full bg-neutral-50 px-4 py-2 items-center rounded-lg border border-neutral-500 flex">
                            <select name="pricelist_district" class="text-neutral-800 rounded-lg text-2xl font-normal font-['Montserrat']">
                                @foreach ($uniqueDistricts as $district)
                                    <option value="{{ $district }}">{{ $district }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('pricelist_district')
                            <div class="w-full text-start text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
