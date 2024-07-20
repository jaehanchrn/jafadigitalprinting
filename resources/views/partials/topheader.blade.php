<!-- TOP HEADER -->
<div class="w-full h-fit bg-neutral-200  px-20 py-4 justify-center flex items-center  flex-row">

    <div class="w-full flex flex-row gap-10">

        <div class="justify-start items-center gap-2.5 flex w-fit h-fit">
            <i class="ph-fill text-neutral-500 ph-phone text-2xl"></i>
            <div class="text-neutral-500 text-base font-normal font-['Montserrat']">6281317554872</div>
        </div>

        <div class="justify-start items-center gap-2.5 flex w-fit h-fit">
            <i class="ph-fill text-neutral-500 ph-house text-2xl"></i>
            <div class="text-neutral-500 text-base font-normal font-['Montserrat']">Jl. Raya Sukahati,
                Kabupaten Bogor, Jawa Barat 16913</div>
        </div>

        <div class="justify-start items-center gap-2.5 flex w-fit h-fit">
            <i class="ph-bold text-neutral-500 ph-clock text-2xl"></i>
            <div class="text-center text-neutral-500 text-base font-normal font-['Montserrat']">Senin - Sabtu |
                08.00 - 18.00 WIB</div>
        </div>
    </div>

    <div class="w-fit h-fit flex flex-row gap-20">
        <button onclick="window.location.href='/cart'">
            <i class="ph-bold text-blue-500 hover:text-blue-400 ph-shopping-cart text-3xl"></i>
        </button>

        @auth
        <div class="w-fit h-fit justify-center items-center flex">
            <button onclick="window.location.href='{{ route('profil.edit') }}'"
                class="text-center text-nowrap text-blue-500 hover:text-blue-400  text-xl font-normal font-['Montserrat'] underline">
                Akun Profil
            </button>
        </div>

        @endauth

        @guest
            <div class="w-fit h-fit justify-center items-center flex">
                <button onclick="window.location.href='login-akun'"
                    class="text-center text-nowrap text-blue-500 hover:text-blue-400  text-xl font-normal font-['Montserrat'] underline">
                    Login/Daftar
                </button>
            </div>
        @endguest
    </div>

</div>
