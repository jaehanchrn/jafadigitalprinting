@extends('layouts.main')
@section('container')
    <div class="w-full h-fit relative bg-white">

        @include('partials.topheader')
        @include('partials.header')

        <!-- BODY -->

        <div class="w-full flex-col justify-center items-center flex py-16 gap-8">
            <div class="w-full flex-col flex justify-start items-start px-12">
                <div>
                    <span class="text-blue-500 text-xl font-normal font-montserrat">Beranda ></span>
                    <span class="text-blue-300 text-xl font-normal font-montserrat"> Ubah Password</span>
                </div>
            </div>

            <div class="w-full flex flex-row justify-between px-12 gap-12">
                <!-- Include AkunSaya Navigasi Partial View -->
                @include('partials.akunsaya-navigasi')

                <div class="w-full items-start">
                    <div class="w-full">
                        <div class="w-full justify-start items-start flex-col flex gap-9 pr-60">
                            <div
                                class=" justify-start items-start text-neutral-800 text-6xl font-normal font-['Montserrat']  ">
                                UBAH PASSWORD
                            </div>


                            <div class="w-full  justify-start items-start flex">
                                <div class="w-full rounded-full border-2 border-neutral-300  items-start inline-flex">
                                </div>
                            </div>

                            <!-- Password Form -->
                            <form action="{{ route('password.update') }}" method="POST" class="w-full flex flex-col gap-6">
                                @csrf
                                <!-- Remove @method('PUT') -->
                                <!-- New Password Field -->
                                <div class="w-full flex flex-col">
                                    <input type="password" name="password" id="password"
                                           class="w-full p-5 bg-neutral-50 text-neutral-700 text-2xl font-normal rounded-lg border border-neutral-500"
                                           placeholder="Password Baru" minlength="8" required>
                                    <button type="button" class="ph-eye-slash text-neutral-700 text-3xl"></button>
                                </div>
                                <!-- Confirm Password Field -->
                                <div class="w-full flex flex-col gap-1">
                                    <div class="flex-col justify-between items-start inline-flex">
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                               class="w-full p-5 bg-neutral-50 text-neutral-700 text-2xl font-normal rounded-lg border border-neutral-500"
                                               placeholder="Ulangi Password" minlength="8" required>
                                    </div>
                                </div>
                                <!-- Error Message -->
                                <div id="password-error" class="text-red-500 text-sm mt-1 hidden">
                                    Masukkan minimal 8 karakter dan kedua kolom password harus sama
                                </div>
                                <!-- Submit Button -->
                                <div class="w-full justify-start flex">
                                    <button type="submit" id="submit-button"
                                            class="px-7 py-4 bg-blue-500 rounded-[10px] inline-flex hover:opacity-75" disabled>
                                        <div class="text-neutral-50 text-2xl font-normal font-montserrat">
                                            Simpan
                                        </div>
                                    </button>
                                </div>
                            </form>
                            
                            <!-- Script for Validation -->

                            <script>
                                function validatePassword() {
                                    const passwordInput = document.getElementById('password');
                                    const passwordConfirmationInput = document.getElementById('password_confirmation');
                                    const submitButton = document.getElementById('submit-button');
                                    const errorDiv = document.getElementById('password-error');

                                    // Check password length
                                    if (passwordInput.value.length < 8) {
                                        errorDiv.classList.remove('hidden');
                                        submitButton.disabled = true;
                                    } else {
                                        // Check if passwords match
                                        if (passwordInput.value === passwordConfirmationInput.value) {
                                            errorDiv.classList.add('hidden');
                                            submitButton.disabled = false;
                                        } else {
                                            errorDiv.classList.remove('hidden');
                                            submitButton.disabled = true;
                                        }
                                    }
                                }

                                // Initial state: disable submit button
                                document.addEventListener('DOMContentLoaded', function() {
                                    const submitButton = document.getElementById('submit-button');
                                    submitButton.disabled = true;
                                });

                                // Event listeners for input validation
                                document.addEventListener('DOMContentLoaded', function() {
                                    const passwordInput = document.getElementById('password');
                                    const passwordConfirmationInput = document.getElementById('password_confirmation');

                                    passwordInput.addEventListener('input', validatePassword);
                                    passwordConfirmationInput.addEventListener('input', validatePassword);
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        @include('partials.footer')

    </div>
@endsection
