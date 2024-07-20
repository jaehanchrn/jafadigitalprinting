<div class="w-full h-fit flex flex-row py-20 justify-center px-12 ">
    <div class="relative flex-col inline-flex ">
        <div class=" dropdown inline-block relative ">
            <button
                class="w-[400px] p-5 bg-neutral-50 rounded-2xl border border-blue-500 hover:group/button-active  justify-between items-start inline-flex hover:opacity-70 ">
                <div class="text-blue-500 text-2xl font-normal font-['Montserrat'] ">{{ $dropdown_aktif }}
                </div>
                <i class="ph-fill ph-caret-down text-blue-500 text-3xl"></i>
            </button>
            <ul
                class="w-full group-hover/button-active:text-yellow-500 z-50 dropdown-menu absolute hidden text-center rounded-lg shadow-md shadow-neutral-400 bg-neutral-100 py-2">
                <button class="w-full">
                    <li class=""><a
                            class="bg-neutral-100 text-blue-500 hover:text-blue-300 py-2 px-4 text-lg font-normal font-['Montserrat'] block whitespace-no-wrap"
                            href="{{ route ('jasa-cetak-foto.index')}}">Cetak Foto</a>
                    </li>
                    <li class=""><a
                            class="rounded-b bg-neutral-100 text-blue-500 hover:text-blue-300 py-2 px-4 text-lg font-normal font-['Montserrat'] block whitespace-no-wrap"
                            href="{{ route ('jasa-cetak-sertifikat.index')}}">Cetak
                            Sertifikat</a>
                    </li>
                    <li class=""><a
                            class="rounded-b bg-neutral-100 text-blue-500 hover:text-blue-300 py-2 px-4 text-lg font-normal font-['Montserrat'] block whitespace-no-wrap"
                            href="{{ route ('jasa-cetak-kartu-nama.index')}}">Kartu Nama dan Kartu
                            Ucapan</a>
                    </li>
                </button>
            </ul>
        </div>
    </div>
</div>
