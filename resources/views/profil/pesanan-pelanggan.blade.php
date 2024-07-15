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

        @include('partials.topheader')
        @include('partials.header')

        <!-- BODY -->

        <div class="w-full flex-col justify-center items-center flex py-16 gap-8">

            <div class="w-full flex-col flex justify-start items-start px-12 ">
                <div><span class="text-blue-500 text-xl font-normal font-['Montserrat']">Beranda >
                    </span>
                    <span class="text-blue-300 text-xl font-normal font-['Montserrat']"> Riwayat Pesanan
                    </span>
                </div>
            </div>

            <div class="w-full flex flex-row justify-between px-12 gap-12">
                @include('partials.akunsaya-navigasi')

                <div class="w-full items-start">
                    <div class="w-full">
                        <div class="w-full justify-start items-start flex-col flex gap-9 pr-32">
                            <div
                                class=" justify-start items-start text-neutral-800 text-6xl font-normal font-['Montserrat']  ">
                                PESANAN CUSTOMER
                            </div>


                            <div class="w-full  justify-start items-start flex">
                                <div class="w-full rounded-full border-2 border-neutral-300  items-start inline-flex">
                                </div>
                            </div>


                            <table
                                class=" w-full border-separate border-2 border-spacing-5 table-fixed text-xl font-normal font-['Montserrat'] text-neutral-800">
                                <thead class="font-bold">
                                    <tr>
                                        <td>No</td>
                                        <td>No.Invoice</td>
                                        <td>Proses</td>
                                        <td>Move to</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>The Sliding Mr. Bones</td>
                                        <td>Malcolm Lockyer</td>
                                        <td>1961</td>
                                        <td>1961</td>
                                    </tr>
                                    <tr>
                                        <td>Witchy Woman</td>
                                        <td>The Eagles</td>
                                        <td>1972</td>
                                        <td>1961</td>
                                    </tr>
                                    <tr>
                                        <td>Shining Star</td>
                                        <td>Earth, Wind, and Fire</td>
                                        <td>1975</td>
                                        <td>1961</td>
                                    </tr>

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

</body>


</html>
