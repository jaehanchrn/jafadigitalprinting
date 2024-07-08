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
        <div class="w-full h-fit flex-col justify-start inline-flex py-20 px-32 gap-4">

            <div class="pb-4 text-blue-500  text-xl font-normal font-['Montserrat']">Beranda
                >
                <a class="text-blue-300 text-xl font-normal font-['Montserrat']">
                    Jarak Antar
                </a>
            </div>

            <div
                class="w-full justify-center items-center flex relative bg-neutral-100 shadow-md shadow-neutral-300 border-neutral-200 border-2 rounded-[32px]">
                <div class="w-full flex-col inline-flex relative justify-center items-center px-20 py-12 gap-12">
                    <div
                        class="w-full flex flex-col text-center text-blue-500 text-3xl font-bold font-['Montserrat']">
                        JARAK PENGANTARAN MAKSIMAL
                        yang dapat kami layani <br> (20 km dari Jafa Digital Printing)
                    </div>

                    <div
                        class="w-full flex-col flex relative justify-start items-start text-neutral-800  text-3xl font-bold font-['Montserrat']">

                        <table
                        class=" w-full border-separate border-2 border-spacing-y-2 table-fixed text-xl font-normal font-['Montserrat'] text-neutral-800">
                        <thead class="font-bold bg-blue-500 text-neutral-50 py-8">
                            <tr class="text-center">
                                <td class="w-[60px]">No</td>
                                <td>Kabupaten/Kota</td>
                                <td>Kecamatan</td>
                                <td class="w-[300px]">Tarif Biaya</td>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td >1</td>
                                <td>Kabupaten Bogor</td>
                                <td>Babakan Madang</td>
                                <td>Rp 24.000</td>
                            </tr>
                            <tr>
                                <td >2</td>
                                <td>Kabupaten Bogor</td>
                                <td>Bojonggede</td>
                                <td >Rp 7.000</td>
                            </tr>
                            <tr>
                                <td >3</td>
                                <td>Kabupaten Bogor</td>
                                <td>Ciampea</td>
                                <td >Rp 36.000</td>
                            </tr>
                            <tr>
                                <td >4</td>
                                <td>Kabupaten Bogor</td>
                                <td>Cibinong</td>
                                <td >Rp 8.000</td>
                            </tr>
                            <tr>
                                <td >5</td>
                                <td>Kabupaten Bogor</td>
                                <td>Ciomas</td>
                                <td >Rp 30.000</td>
                            </tr>
                            <tr>
                                <td >6</td>
                                <td>Kabupaten Bogor</td>
                                <td>Ciseeng</td>
                                <td >Rp 34.000</td>
                            </tr>
                            <tr>
                                <td >7</td>
                                <td>Kabupaten Bogor</td>
                                <td>Citeureup</td>
                                <td >Rp 18.000</td>
                            </tr>
                            <tr>
                                <td >8</td>
                                <td>Kabupaten Bogor</td>
                                <td>Dramaga</td>
                                <td >Rp 30.000</td>
                            </tr>
                            <tr>
                                <td >9</td>
                                <td>Kabupaten Bogor</td>
                                <td>Gunung Putri</td>
                                <td >Rp 34.000</td>
                            </tr>
                            <tr>
                                <td >10</td>
                                <td>Kabupaten Bogor</td>
                                <td>Kemang</td>
                                <td >Rp 22.000</td>
                            </tr>
                            <tr>
                                <td >11</td>
                                <td>Kabupaten Bogor</td>
                                <td>Parung</td>
                                <td >Rp 30.000</td>
                            </tr>
                            <tr>
                                <td >12</td>
                                <td>Kabupaten Bogor</td>
                                <td>Rancabungur</td>
                                <td >Rp 32.000</td>
                            </tr>
                            <tr>
                                <td >13</td>
                                <td>Kabupaten Bogor</td>
                                <td>Sukaraja</td>
                                <td >Rp 9.000</td>
                            </tr>
                            <tr>
                                <td >14</td>
                                <td>Kabupaten Bogor</td>
                                <td>Tajurhalang</td>
                                <td >Rp 22.000</td>
                            </tr>
                            <tr>
                                <td >15</td>
                                <td>Kota Bogor</td>
                                <td>Bogor Barat</td>
                                <td >Rp 24.000</td>
                            </tr>
                            <tr>
                                <td >16</td>
                                <td>Kota Bogor</td>
                                <td>Bogor Selatan</td>
                                <td >Rp 32.000</td>
                            </tr>
                            <tr>
                                <td >17</td>
                                <td>Kota Bogor</td>
                                <td>Bogor Tengah</td>
                                <td >Rp 26.000</td>
                            </tr>
                            <tr>
                                <td >18</td>
                                <td>Kota Bogor</td>
                                <td>Bogor Timur</td>
                                <td >Rp 30.000</td>
                            </tr>
                            <tr>
                                <td >19</td>
                                <td>Kota Bogor</td>
                                <td>Bogor Utara</td>
                                <td >Rp 18.000</td>
                            </tr>
                            <tr>
                                <td >20</td>
                                <td>Kota Bogor</td>
                                <td>Tanah Sereal</td>
                                <td >Rp 20.000</td>
                            </tr>

                        </tbody>
                    </table>

                    </div>

                </div>
            </div>

        </div>

        <!-- FOOTER -->
        @include('partials.footer')
    </div>
</body>

</html>
