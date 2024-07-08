<div class="w-[410px] h-fit flex flex-col justify-between">
    <div
        class="w-[410px] self-stretch relative justify-start items-start flex rounded-[20px] bg-blue-100">

        <div class="w-full flex-col flex gap-6">

            <div class="w-full flex-col flex">

                <div
                    class="justify-center items-center flex-col flex text-neutral-50 bg-blue-500 rounded-tl-2xl rounded-tr-2xl py-6 text-[40px] font-normal font-['Montserrat']">
                    Akun Saya</div>

                <div class="w-full p-8">
                    <div class="w-full gap-6 flex-col flex">

                        <button onclick="window.location.href='/edit-profil'"
                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                            <div
                                class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                Profil Saya</div>
                        </button>
                        <button onclick="window.location.href='/ubah-password'"
                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                            <div
                                class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                Ubah Password</div>
                        </button>

                        @if (auth()->user()->tipe_akun === 'User')
                            <button onclick="window.location.href='/riwayat-pesanan'"
                                class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                <div
                                    class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                    Riwayat Pesanan</div>
                            </button>
                        @else
                            <button onclick="window.location.href='/pesanan-pelanggan'"
                                class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                                <div
                                    class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                    Pesanan Customer</div>
                            </button>
                        @endif
                        <button onclick="window.location.href='/logout-akun'"
                            class="self-stretch grow shrink basis-0 px-5 py-2.5 hover:bg-blue-200 justify-center items-center gap-2.5 inline-flex">
                            <div
                                class="text-center text-blue-500 text-2xl font-normal font-['Montserrat']">
                                Logout</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>