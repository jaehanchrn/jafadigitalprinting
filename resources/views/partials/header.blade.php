<!-- HEADER -->
<div class="w-full px-20 py-8 bg-blue-500 justify-center items-center inline-flex">
    <div class="w-fit flex-col justify-start items-start gap-2.5 inline-flex">
        <img onclick="window.location.href='/beranda' " class="w-64 h-fit hover:opacity-75"
            src="{{ url('pictures/logo-jafa-putih.png') }}" />
    </div>

    <div class="w-full justify-between items-between flex ml-40">
        <div class="flex-col justify-start items-center gap-1 inline-flex">
            <button onclick="window.location.href='/beranda' "
                class="group/button-active text-neutral-100  hover:text-yellow-500 text-2xl font-normal font-['Montserrat'] inline-flex items-center">
                <span class="mr-1">Beranda</span>
            </button>
        </div>

       
        <div class=" flex-col justify-start items-center inline-flex">
            <div class=" dropdown inline-block relative">
                <button
                    class=" text-neutral-100 hover:text-yellow-500 hover:group/button-active text-2xl font-normal font-['Montserrat'] inline-flex items-center">
                    <span class="mr-1">Jasa dan Produk</span>
                </button>
                <ul
                    class="w-full z-50 group-hover/button-active:text-yellow-500 dropdown-menu absolute hidden text-center rounded-lg shadow-md shadow-neutral-300 bg-neutral-100 py-2">
                    <button class="w-full">
                        <li class=""><a
                                class="rounded-t-lg bg-neutral-100 text-blue-500 hover:text-blue-300 py-2 px-4 text-md font-normal font-['Montserrat'] block whitespace-no-wrap"
                                onclick="window.location.href='/jasa-ketik' ">Jasa Ketik &
                                Desain</a></li>
                        <li class=""><a
                                class="bg-neutral-100 text-blue-500 hover:text-blue-300 py-2 px-4 text-md font-normal font-['Montserrat'] block whitespace-no-wrap"
                                onclick="window.location.href='/alat-tulis' ">Alat Tulis &
                                Kantor</a></li>
                        <li class=""><a
                                class="rounded-b-lg bg-neutral-100 text-blue-500 hover:text-blue-300 py-2 px-4 text-md font-normal font-['Montserrat'] block whitespace-no-wrap"
                               href="{{ route ('jasa-cetak-foto.index')}}">Jasa Cetak</a>
                        </li>
                    </button>
                </ul>
            </div>
        </div>

        <div class="flex-col justify-start items-center gap-1 inline-flex">
            <button class="text-neutral-100 hover:text-yellow-500 text-2xl font-normal font-['Montserrat']"
            onclick="window.location.href='/caraorder'">Cara
                Order</button>
        </div>

        <div class="flex-col justify-start items-center gap-1 inline-flex">
            <button class="text-neutral-100 hover:text-yellow-500 text-2xl font-normal font-['Montserrat']"
            onclick="window.location.href='/jarakantar'">Jarak Antar</button>
        </div>

        <div class="flex-col justify-start items-center gap-1 inline-flex">
            <button class="text-neutral-100 hover:text-yellow-500 text-2xl font-normal font-['Montserrat']"
            onclick="window.location.href='/tentangkami'">Tentang
                Kami</button>
        </div>
    </div>
</div>