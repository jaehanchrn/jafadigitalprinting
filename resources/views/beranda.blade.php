<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <div class="w-full h-fit relative bg-white">
        @include('partials.whatsapp')
        @include('partials.topheader')
        @include('partials.header')

        <!-- BODY -->
        {{-- Section 1 Headline Berita --}}
        <div class="w-full h-fit relative items-center justify-center pb-12 flex">
            {{-- ISI BERITA --}}
            <div class="headline-container w-1480 relative flex-col justify-center items-center flex ">
                {{-- Placeholder for headline content --}}
                <div class="headline-item z-30 w-full h-fit flex flex-col justify-center items-center transition-transform  duration-500 ease-in-out"
                    data-index="0">
                    <div class="w-full flex bg-netral-100 shadow-card  justify-center items-center relative">
                        <!-- Mengubah justify-center -->
                        <img class="w-full h-full overflow-clip " src="{{ url('pictures/banner-01.jpg') }}"
                            alt="Image" />
                    </div>
                </div>
                <div class="headline-item z-30 w-full h-fit flex flex-col justify-center items-center transition-transform duration-500 ease-in-out"
                    data-index="1">
                    <div class="w-full flex bg-netral-100 shadow-card  justify-center items-center relative">
                        <!-- Mengubah justify-center -->
                        <img class="w-full h-full overflow-clip " src="{{ url('pictures/banner-02.jpg') }}"
                            alt="Image" />
                    </div>
                </div>
                {{-- End of headline content --}}

                {{-- Button nextnews & prevnewsious --}}
                <div class="w-fit h-full z-40 px-8 pb-8 left-0  absolute justify-center items-center inline-flex">
                    <i
                        class="text-5xl ph ph-caret-left text-gray-100 cursor-pointer prevnews-btn p-2 bg-netral-100 rounded-full shadow-card-m"></i>
                </div>
                <div class="w-fit h-full z-40 px-8 pb-8 right-0  absolute justify-center items-center inline-flex">
                    <i
                        class="text-5xl ph ph-caret-right text-gray-100 cursor-pointer nextnews-btn p-2 bg-netral-100 rounded-full shadow-card-m"></i>
                </div>

                {{-- Stepper --}}

                {{-- <div class="w-full px-4 justify-center items-center gap-4 flex flex-row">
                    <div class="w-fit relative">
                        <div
                            class=" z-10 w-32 px-4 py-1 bg-blue-500 rounded-full flex-row justify-center items-center list-indicator hidden">
                        </div>
                        <div
                            class="inset-x-0 top-0 z-0 w-16 px-4 py-1 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
                        </div>
                    </div>
                    <div class="w-fit flex flex-col relative">
                        <div
                            class="z-10 w-32 px-4 py-1 bg-blue-500 rounded-full flex-row justify-center items-center list-indicator hidden">
                        </div>
                        <div
                            class="inset-x-0 top-0 z-0 w-16 px-4 py-1 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
                        </div>
                    </div>
                    <div class="w-fit flex flex-col relative">
                        <div
                            class="z-10 w-32 px-4 py-1 bg-blue-500 rounded-full flex-row justify-center items-center list-indicator hidden">
                        </div>
                        <div
                            class="inset-x-0 top-0 z-0 w-16 px-4 py-1 bg-netral-300 rounded-full flex-row justify-center items-center list-indicator-default">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const prevnewsBtn = document.querySelector('.prevnews-btn');
                const nextnewsBtn = document.querySelector('.nextnews-btn');
                const headlineItems = document.querySelectorAll('.headline-item');
                const listIndicators = document.querySelectorAll('.list-indicator');
                const defaultlistIndicators = document.querySelectorAll('.list-indicator-default');
                let currentIndex = 0;

                function showheadlineItem(index) {
                    headlineItems.forEach((item, i) => {
                        if (i === index) {
                            item.classList.remove('hidden');
                        } else {
                            item.classList.add('hidden');
                        }
                    });
                    updatelistIndicators(index);
                }

                function showprevnewsItem() {
                    if (currentIndex > 0) {
                        currentIndex--;
                        showheadlineItem(currentIndex);
                        updateNavBtn();
                        updatelistIndicators(currentIndex); // Tambahkan ini
                    }
                }

                function shownextnewsItem() {
                    if (currentIndex < headlineItems.length - 1) {
                        currentIndex++;
                        showheadlineItem(currentIndex);
                        updateNavBtn();
                        updatelistIndicators(currentIndex); // Tambahkan ini
                    }
                }

                function updateNavBtn() {
                    if (currentIndex === 0) {
                        prevnewsBtn.classList.add('disabled', 'opacity-10');
                    } else {
                        prevnewsBtn.classList.remove('disabled', 'opacity-10');
                    }

                    if (currentIndex === headlineItems.length - 1) {
                        nextnewsBtn.classList.add('disabled', 'opacity-10');
                    } else {
                        nextnewsBtn.classList.remove('disabled', 'opacity-10');
                    }
                }

                function updatelistIndicators(index) {
                    // Mengambil penanda tahun yang sesuai dengan indeks carousel
                    const currentListIndicator = listIndicators[index];

                    // Menghapus kelas 'active' dari semua penanda tahun
                    listIndicators.forEach(indicator => {
                        indicator.classList.add('hidden');
                    });

                    // Menambahkan kelas 'active' hanya pada penanda tahun yang sesuai
                    currentListIndicator.classList.remove('hidden');
                }

                function updatelistIndicators(index) {
                    listIndicators.forEach((indicator, i) => {
                        if (i === index) {
                            indicator.classList.remove('hidden');

                        } else {
                            indicator.classList.add('hidden');

                        }
                    });
                    defaultlistIndicators.forEach((indicator, i) => {
                        if (i === index) {
                            indicator.classList.add('hidden');

                        } else {
                            indicator.classList.remove('hidden');
                        }
                    });
                }

                prevnewsBtn.addEventListener('click', showprevnewsItem);
                nextnewsBtn.addEventListener('click', shownextnewsItem);

                showheadlineItem(currentIndex);
                updateNavBtn();
            });
        </script>

{{-- Kenapa harus --}}
        <div class="w-full h-fit flex flex-row py-8">
            <div class="w-full px-20 flex-col flex">

                <div class=" text-gray-800 text-[64px] font-normal font-['Montserrat']"> Kenapa harus</div>
                <div class=" pb-8 text-5xl font-normal font-['Montserrat'] relative w-fit">
                    <div class=" text-gray-100 text-5xl font-normal font-['Montserrat'] relative z-10">Jafa Digital
                        Printing </div>
                    <div class="w-[480px] h-12 left-0 top-0 absolute bg-blue-500 z-0"></div>
                    <div
                        class=" text-gray-800 text-[200px] font-normal font-['Manjari'] bottom-0 -right-20 absolute">
                        ?
                    </div>
                </div>
                <div class="  text-gray-800 text-lg font-normal font-['Montserrat']">
                    Berlokasi di Sukahati, Cibinong, Kabupaten Bogor dan sudah berdiri sejak tahun 2012, melayani
                    kebutuhan dalam percetakan, jasa desain grafis, pengetikan dengan layanan yang berkualitas dan
                    terpercaya.
                    Kami terus membangun hubungan baik dengan konsumen untuk menjalin kerjasama yang berkelanjutan.
                </div>
                <div class="w-full flex flex-row justify-between pt-8">
                    <div class="w-fit  flex-col justify-center items-center gap-[18px] inline-flex">
                        <div class="w-28 h-28 justify-center flex items-center">
                            <img class="w-fit h-full" src="pictures/why-1.png" />
                        </div>
                        <div class="text-gray-800 text-xl font-normal font-['Montserrat']">Good Quality</div>
                    </div>
                    <div class="w-fit  flex-col justify-center items-center gap-7 inline-flex group/jasa ">
                        <div class="w-28 h-28 justify-center flex items-center">
                            <img class="w-fit h-full" src="pictures/why-2.png" />
                        </div>
                        <div class="text-gray-800 text-xl font-normal font-['Montserrat']">Harga Terjangkau</div>
                    </div>
                    <div class="w-fit flex-col justify-center items-center gap-7 inline-flex">
                        <div class="w-28 h-28 justify-center flex items-center">
                            <img class="w-fit h-full" src="pictures/why-3.png" />
                        </div>
                        <div class="text-gray-800 text-xl font-normal font-['Montserrat']">Cepat dan Aman</div>
                    </div>
                </div>


            </div>
            <img class="w-[650px] h-[540px]" src="pictures/banner-photo-crop.jpg" />
        </div>

        <div class="w-full flex-col flex relative justify-center items-center gap-10 py-8 px-16 mb-8">

            {{-- Jasa Cetak  --}}
            <div class="w-fit flex-col flex relative justify-center items-center gap-6 ">
                <div class="w-full flex flex-col justify-start items-start relative">
                    <div class=" text-gray-800 text-3xl font-bold font-['Montserrat']">
                        Mau cari Jasa Cetak
                        apa?
                    </div>
                </div>


                <div class="w-full h-fit flex-row flex relative gap-6  justify-start items-start ">
                    <div
                        class="w-72 h-fit relative flex flex-col shadow-md shadow-gray-300 rounded-xl justify-between">

                        <img class="w-72 h-full  rounded-tl-xl rounded-tr-xl"
                            src="{{ url('pictures/jasa-cetak/cetak-photo.jpg') }}" />
                        <div class="w-72 py-6 bg-blue-500 shadow-md shadow-gray-400 px-6 rounded-br-xl rounded-bl-xl">
                            <div class="w-full   text-gray-100 text-xl font-bold font-['Montserrat']">Cetak Photo
                                Berbagai Ukuran</div>
                            <div class="w-full  text-blue-100 font-normal font-['Montserrat']">Rp
                                10.000/Lembar
                                A4</div>
                        </div>
                    </div>
                    <div
                        class="w-72 h-fit relative flex flex-col shadow-md shadow-gray-300 rounded-xl justify-between">

                        <img class="w-72 h-full  rounded-tl-xl rounded-tr-xl"
                            src="{{ url('pictures/jasa-cetak/cetak-sertifikat.jpg') }}" />
                        <div class="w-72 py-6 bg-blue-500 shadow-md shadow-gray-400 px-6 rounded-br-xl rounded-bl-xl">
                            <div class="w-full   text-gray-100 text-xl font-bold font-['Montserrat']">Cetak Sertifikat Ukuran A4 </div>
                            <div class="w-full  text-blue-100 font-normal font-['Montserrat']">Rp
                               5.000/Lembar
                                A4</div>
                        </div>
                    </div>
                    <div
                        class="w-72 h-fit relative flex flex-col shadow-md shadow-gray-300 rounded-xl justify-between">

                        <img class="w-72 h-full  rounded-tl-xl rounded-tr-xl"
                            src="{{ url('pictures/jasa-cetak/cetak-kartu.jpg') }}" />
                        <div class="w-72 py-6 bg-blue-500 shadow-md shadow-gray-400 px-6 rounded-br-xl rounded-bl-xl">
                            <div class="w-full   text-gray-100 text-xl font-bold font-['Montserrat']">Cetak Kartu Nama dan Kartu Ucapan
                            </div>
                            <div class="w-full  text-blue-100 font-normal font-['Montserrat']">Rp
                                10.000/Lembar
                                A4</div>
                        </div>
                    </div>
                </div>

                <div class="w-full flex flex-col justify-end items-end relative">
                    <button
                        class="text-blue-500 text-xl font-bold hover:text-blue-300 font-['Montserrat'] underline" 
                        onclick="window.location.href='/jasa-cetak'">Jasa
                        Cetak Lainnya...</button>
                </div>
            </div>

            {{-- Produk  --}}
            <div class="w-fit flex-col flex relative justify-center items-center gap-6 ">
                <div class="w-full flex flex-col justify-start items-start relative">
                    <div class=" text-gray-800 text-3xl font-bold font-['Montserrat']">
                        Berbagai Pilihan Produk
                    </div>
                </div>

                <div class="w-full h-fit flex-row flex relative gap-6  justify-start items-start ">
                    <div
                        class="w-72 h-fit relative flex flex-col shadow-md shadow-gray-300 rounded-xl justify-between">

                        <img class="w-72 h-full  rounded-tl-xl rounded-tr-xl"
                            src="{{ url('pictures/alat-tulis/pulpen-standard-hitam.jpg') }}" />
                        <div class="w-72 py-6 bg-blue-500 shadow-md shadow-gray-400 px-6 rounded-br-xl rounded-bl-xl">
                            <div class="w-full   text-gray-100 text-xl font-bold font-['Montserrat']">Pulpen Standard AE7 Hitam (12 pcs)</div>
                            <div class="w-full  text-blue-100 font-normal font-['Montserrat']">Rp
                                22.000/pack</div>
                        </div>
                    </div>
                    <div
                        class="w-72 h-fit relative flex flex-col shadow-md shadow-gray-300 rounded-xl justify-between">

                        <img class="w-72 h-full  rounded-tl-xl rounded-tr-xl"
                            src="{{ url('pictures/alat-tulis/pulpen-standard-biru.jpg') }}" />
                        <div class="w-72 py-6 bg-blue-500 shadow-md shadow-gray-400 px-6 rounded-br-xl rounded-bl-xl">
                            <div class="w-full   text-gray-100 text-xl font-bold font-['Montserrat']">Pulpen Standard AE7 Biru (12 pcs)</div>
                            <div class="w-full  text-blue-100 font-normal font-['Montserrat']">Rp
                                22.000/pack</div>
                        </div>
                    </div>
                    <div
                        class="w-72 h-fit relative flex flex-col shadow-md shadow-gray-300 rounded-xl justify-between">

                        <img class="w-72 h-full  rounded-tl-xl rounded-tr-xl"
                            src="{{ url('pictures/alat-tulis/pulpen-standard-merah.jpg') }}" />
                        <div class="w-72 py-6 bg-blue-500 shadow-md shadow-gray-400 px-6 rounded-br-xl rounded-bl-xl">
                            <div class="w-full   text-gray-100 text-xl font-bold font-['Montserrat']">Pulpen Standard AE7 Merah (12 pcs)</div>
                            <div class="w-full  text-blue-100 font-normal font-['Montserrat']">Rp
                                22.000/pack</div>
                        </div>
                    </div>
                </div>

                <div class="w-full h-fit flex-row flex relative gap-6  justify-start items-start ">
                    <div
                        class="w-72 h-fit relative flex flex-col shadow-md shadow-gray-300 rounded-xl justify-between">

                        <img class="w-72 h-full  rounded-tl-xl rounded-tr-xl"
                            src="{{ url('pictures/alat-tulis/pulpen-kenko-k1.jpg') }}" />
                        <div class="w-72 py-6 bg-blue-500 shadow-md shadow-gray-400 px-6 rounded-br-xl rounded-bl-xl">
                            <div class="w-full   text-gray-100 text-xl font-bold font-['Montserrat']">Pulpen Kenko Gel Pen K-1 Hitam (12 pcs)</div>
                            <div class="w-full  text-blue-100 font-normal font-['Montserrat']">Rp
                                54.000/pack</div>
                        </div>
                    </div>
                    <div
                        class="w-72 h-fit relative flex flex-col shadow-md shadow-gray-300 rounded-xl justify-between">

                        <img class="w-72 h-full  rounded-tl-xl rounded-tr-xl"
                            src="{{ url('pictures/alat-tulis/buku-sidu-58.jpg') }}" />
                        <div class="w-72 py-6 bg-blue-500 shadow-md shadow-gray-400 px-6 rounded-br-xl rounded-bl-xl">
                            <div class="w-full   text-gray-100 text-xl font-bold font-['Montserrat']">Buku Sinar Dunia 58halaman (10 pcs) </div>
                            <div class="w-full  text-blue-100 font-normal font-['Montserrat']">Rp
                                40.000/pack</div>
                        </div>
                    </div>
                    <div
                        class="w-72 h-fit relative flex flex-col shadow-md shadow-gray-300 rounded-xl justify-between">

                        <img class="w-72 h-full  rounded-tl-xl rounded-tr-xl"
                            src="{{ url('pictures/alat-tulis/buku-sidu-38.jpg') }}" />
                        <div class="w-72 py-6 bg-blue-500 shadow-md shadow-gray-400 px-6 rounded-br-xl rounded-bl-xl">
                            <div class="w-full   text-gray-100 text-xl font-bold font-['Montserrat']">Buku Sinar Dunia 38halaman (10 pcs) </div>
                            <div class="w-full  text-blue-100 font-normal font-['Montserrat']">Rp
                                35.000/pack</div>
                        </div>
                    </div>
                </div>

                <div class="w-full flex flex-col justify-end items-end relative">
                    <button
                        class=" text-blue-500 text-xl font-bold hover:text-blue-300 font-['Montserrat'] underline"
                        onclick="window.location.href='/alat-tulis'">Produk
                        Lainnya...</button>
                </div>
            </div>

        </div>
    </div>




    </div>

    <!-- FOOTER -->
    @include('partials.footer')
    </div>
    
</body>

</html>

{{-- 
<!-- FOOTER -->
<div class="w-full h-[735px] absolute bg-blue-500">
    <div class="w-full flex flex-row justify-self-auto pt-8">

        <div class="w-fit  flex-col justify-left items-left gap-7 inline-flex">
            <img class="w-[270px] h-[103.24px] left-[70px] top-[53px] absolute"
                src="{{ url('pictures/logo-jafa-putih.png') }}" />
            <div
                class="w-[410px] left-[70px] top-[180px] absolute text-white text-xl font-normal font-['Montserrat']">
                Jafa Digital Printing adalah sebuah usaha yang bergerak di bidang jasa percetakan, desain
                grafis,
                pengetikan, fotokopi, dan penjualan alat tulis kantor (ATK). Usaha ini sudah berdiri sejak tahun
                2012,
                dimana berawal dari usaha Jafa Fotokopi dan kini berkembang lebih besar menjadi Jafa Digital
                Printing.
            </div>
            <div class="left-[70px] top-[530px] absolute justify-start items-center gap-5 inline-flex">
                <div class="text-white text-2xl font-bold font-['Montserrat']">Follow Us</div>
                <div class="w-[46px] h-[46px] justify-center flex items-center bg-gray-300 rounded-full">
                    <i class="ph-bold ph-instagram-logo text-gray-500 text-3xl "></i>
                </div>
            </div>
        </div>

        <div class="w-fit  flex-col justify-left items-left gap-7 inline-flex group/jasa ">
            <div class="left-[536px] top-[120px] absolute text-white text-3xl font-bold font-['Montserrat']">
                Jam
                Operasional</div>
            <div
                class="w-[337px] h-12 left-[536px] top-[180px] absolute justify-center items-start inline-flex">
                <div class="w-36 text-white text-xl font-normal font-['Montserrat']">Senin - Sabtu<br />Minggu
                </div>
                <div class=" text-white text-xl font-normal font-['Montserrat']">: 08.00 - 18.00
                    WIB<br />:
                    Libur</div>
            </div>

            <div
                class="left-[536px] top-[261px] absolute text-center text-white text-3xl font-bold font-['Montserrat']">
                Pembayaran</div>
            <img class="w-40 h-[96.10px] left-[536px] top-[318px] absolute"
                src="{{ url('pictures/logo-pembayaran-bri.png') }}" />

            <div
                class="left-[536px] top-[451px] absolute text-center text-white text-3xl font-bold font-['Montserrat']">
                Kurir</div>
            <img class="w-40 h-[96.10px] left-[536px] top-[508px] absolute"
                src="{{ url('pictures/logo-kurir-jne.png') }}" />
        </div>

        <div class="w-fit flex-col justify-left items-left gap-7 inline-flex">
            <div
                class="left-[928px] top-[120px] absolute text-center text-white text-3xl font-bold font-['Montserrat']">
                Hubungi Kami</div>

            <div
                class="left-[928px] top-[180px] absolute flex-col justify-start items-start gap-2.5 inline-flex">

                <div class="w-[425px] text-white text-xl font-normal font-['Montserrat']">Phone : 6281317554872
                </div>
                <div class="w-[452px] text-white text-xl font-normal font-['Montserrat']">Email :
                    jafadigitalprinting@gmail.com</div>
                <div class="w-[436px] text-white text-xl font-normal font-['Montserrat']">Address : <br />Jl.
                    Raya
                    Sukahati, Sukahati, Kec. Cibinong, Kabupaten Bogor, Jawa Barat 16913</div>
            </div>
        </div>
    </div>

    <div class="w-full h-20 left-0 top-[655px] flex justify-center items-center absolute">
        <div class="w-full h-20 left-0 top-0 bg-sky-950"></div>
        <div class=" absolute text-center text-white text-xl font-normal font-['Montserrat']">
            © 2024 jafadigitalprinting.com | All Rights Reserved.</div>
    </div>
</div> --}}
