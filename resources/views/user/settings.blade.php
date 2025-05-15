<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    <!-- ===== Profile Content Start ===== -->
    <main x-data="{ 'isProfileInfoModal': false, 'isProfileAddressModal': false }" x-init="@if (session('isProfileInfoModal')) isProfileInfoModal = true; @endif" class="px-4 lg:px-16">
        <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
            <div
                class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] lg:p-6">
                <h3 class="mb-5 text-lg font-semibold text-gray-800 lg:mb-7">
                    Profile
                </h3>

                <div class="p-5 mb-6 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
                    <div class="flex flex-col gap-5 xl:flex-row xl:items-center xl:justify-between">
                        <div class="flex flex-col items-center w-full gap-6 xl:flex-row">
                            @if (Auth::user()->id)
                                @foreach ($profiles as $profile)
                                    @if ($profile->img)
                                        <div
                                            class="w-20 h-20 overflow-hidden rounded-full border border-gray-200 dark:border-gray-800">
                                            <img src="{{ asset('storage/' . $profile->img) }}"
                                                alt="User profile picture"
                                                class="w-full h-full object-cover object-center" />
                                        </div>
                                    @else
                                        <div
                                            class="w-20 h-20 overflow-hidden border border-gray-200 rounded-full dark:border-gray-800">
                                            <img src="{{ asset('assets/profile/Profile.jpg') }}"
                                                alt="User profile picture" />

                                        </div>
                                    @endif
                                    <div class="order-3 xl:order-2">
                                        <h4 class="mb-2 text-lg font-semibold text-center text-gray-800 xl:text-left">
                                            {{ $profile->name }}
                                        </h4>
                                        <div
                                            class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
                                            <p class="text-sm text-gray-500">
                                                Role: {{ $profile->role }}
                                            </p>
                                            <div class="hidden h-3.5 w-px bg-gray-600  xl:block"></div>
                                            <p class="text-sm text-gray-500">
                                                Address: {{ $profile->address }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <div class="p-5 mb-6 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
                    <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800 lg:mb-6">
                                Personal Information
                            </h4>
                            @if (Auth::user()->id)
                                @foreach ($profiles as $profile)
                                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-7 2xl:gap-x-32 mt-5">
                                        <div>
                                            <p class="mb-2 text-xs leading-normal text-gray-500">
                                                Email address
                                            </p>
                                            <p class="text-sm font-medium text-gray-800">
                                                {{ $profile->email }}
                                            </p>
                                        </div>

                                        <div>
                                            <p class="mb-2 text-xs leading-normal text-gray-500">
                                                Phone
                                            </p>
                                            <p class="text-sm font-medium text-gray-800">
                                                {{ $profile->phone }}
                                            </p>
                                        </div>

                                        <div>
                                            <p class="mb-2 text-xs leading-normal text-gray-500">
                                                Postal Code
                                            </p>
                                            <p class="text-sm font-medium text-gray-800">
                                                {{ $profile->postal_code }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="mb-2 text-xs leading-normal text-gray-500">
                                                Address
                                            </p>
                                            <p class="text-sm font-medium text-gray-800">
                                                {{ $profile->address }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <button @click="isProfileInfoModal = true"
                            class="flex w-full items-center justify-center gap-2 rounded-full border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-200 hover:text-gray-800 lg:inline-flex lg:w-auto">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.0911 2.78206C14.2125 1.90338 12.7878 1.90338 11.9092 2.78206L4.57524 10.116C4.26682 10.4244 4.0547 10.8158 3.96468 11.2426L3.31231 14.3352C3.25997 14.5833 3.33653 14.841 3.51583 15.0203C3.69512 15.1996 3.95286 15.2761 4.20096 15.2238L7.29355 14.5714C7.72031 14.4814 8.11172 14.2693 8.42013 13.9609L15.7541 6.62695C16.6327 5.74827 16.6327 4.32365 15.7541 3.44497L15.0911 2.78206ZM12.9698 3.84272C13.2627 3.54982 13.7376 3.54982 14.0305 3.84272L14.6934 4.50563C14.9863 4.79852 14.9863 5.2734 14.6934 5.56629L14.044 6.21573L12.3204 4.49215L12.9698 3.84272ZM11.2597 5.55281L5.6359 11.1766C5.53309 11.2794 5.46238 11.4099 5.43238 11.5522L5.01758 13.5185L6.98394 13.1037C7.1262 13.0737 7.25666 13.003 7.35947 12.9002L12.9833 7.27639L11.2597 5.55281Z"
                                    fill="" />
                            </svg>
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== Modal Edit Personal Information Start ===== -->
        <div x-show="isProfileInfoModal"
            class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
            <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
            <div @click.outside="isProfileInfoModal = false"
                class="no-scrollbar relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 lg:p-11">
                <!-- close btn -->
                <button @click="isProfileInfoModal = false"
                    class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-50 text-gray-400 hover:bg-gray-200 hover:text-gray-600 ">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.04289 16.5418C5.65237 16.9323 5.65237 17.5655 6.04289 17.956C6.43342 18.3465 7.06658 18.3465 7.45711 17.956L11.9987 13.4144L16.5408 17.9565C16.9313 18.347 17.5645 18.347 17.955 17.9565C18.3455 17.566 18.3455 16.9328 17.955 16.5423L13.4129 12.0002L17.955 7.45808C18.3455 7.06756 18.3455 6.43439 17.955 6.04387C17.5645 5.65335 16.9313 5.65335 16.5408 6.04387L11.9987 10.586L7.45711 6.04439C7.06658 5.65386 6.43342 5.65386 6.04289 6.04439C5.65237 6.43491 5.65237 7.06808 6.04289 7.4586L10.5845 12.0002L6.04289 16.5418Z"
                            fill="" />
                    </svg>
                </button>
                <div class="px-2 pr-14">
                    <h4 class="mb-2 text-2xl font-semibold text-gray-800">
                        Edit Personal Information
                    </h4>
                    <p class="mb-6 text-sm text-gray-500 lg:mb-7">
                        Update your details to keep your profile up-to-date.
                    </p>
                </div>
                {{-- Erorr message --}}
                @if (session('isProfileInfoModal'))
                    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                        role="alert">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="flex flex-col" method="POST" action="{{ route('settings.update', Auth::user()->id) }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="custom-scrollbar h-[450px] overflow-y-auto px-2">
                        <div class="items-center justify-center">
                            <div class="w-full max-w-xl mb-5">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Foto Profile
                                </label>
                                <label for="img_profile"
                                    class="block cursor-pointer hover:border-blue-700 border-1 border-dashed rounded-xl bg-white p-10 text-center hover:bg-blue-50 transition">
                                    <div class="flex flex-col items-center space-y-4">
                                        <div
                                            class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                                            <svg class="fill-current" width="29" height="28"
                                                viewBox="0 0 29 28" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.5 3.917a.75.75 0 0 0-.548.239L8.574 9.532a.75.75 0 0 0 1.06 1.061l4.118-4.116v12.19a.75.75 0 0 0 1.5 0V6.482l4.113 4.111a.75.75 0 0 0 1.06-1.06L15.084 4.194A.75.75 0 0 0 14.5 3.917ZM5.916 18.667a.75.75 0 0 0-1.5 0v3.167A2.25 2.25 0 0 0 6.666 24.084h15.667a2.25 2.25 0 0 0 2.25-2.25v-3.167a.75.75 0 0 0-1.5 0v3.167a.75.75 0 0 1-.75.75H6.666a.75.75 0 0 1-.75-.75v-3.167Z" />
                                            </svg>
                                        </div>
                                        <p class="text-lg font-semibold text-gray-700">Drag & Drop File Here</p>
                                        <p class="text-sm text-gray-500">Drag and drop your PNG, JPG, WebP, SVG
                                            images here
                                            or browse</p>
                                        <p class="text-blue-600 underline text-sm">Browse File</p>
                                    </div>
                                    <input id="img_profile" name="img_profile" type="file"
                                        accept=".png,.jpg,.jpeg,.svg" class="hidden" />
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-x-6 gap-y-5 lg:grid-cols-2">
                            <div class="col-span-2 lg:col-span-1">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Email Address
                                </label>
                                <input type="email" name="email" placeholder="{{ Auth::user()->email }}" 
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div class="col-span-2 lg:col-span-1">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Phone
                                </label>
                                <input type="text" name="phone" placeholder="{{ Auth::user()->phone }}"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div class="col-span-2 lg:col-span-1">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Postal Code
                                </label>
                                <input type="text" name="postal_code"
                                    placeholder="{{ Auth::user()->postal_code }}"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div class="col-span-2 lg:col-span-1">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Address
                                </label>
                                <input type="text" name="address" placeholder="{{ Auth::user()->address }}"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>
                        </div>

                    </div>
                    <div class="flex items-center gap-3 px-2 mt-6 lg:justify-end">
                        <button @click="isProfileInfoModal = false" type="button"
                            class="flex w-full justify-center rounded-lg border border-gray-600 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 sm:w-auto">
                            Close
                        </button>
                        <button type="submit"
                            class="flex w-full justify-center rounded-lg border border-blue-700 bg-blue-700 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-800 sm:w-auto">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- ===== Modal Edit Personal Information End ===== -->

        <!-- ===== Modal Edit Address Start ===== -->
        <div x-show="isProfileAddressModal"
            class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
            <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
            <div @click.outside="isProfileAddressModal = false"
                class="no-scrollbar relative flex w-full max-w-[700px] flex-col overflow-y-auto rounded-3xl bg-white p-6 lg:p-11">
                <!-- close btn -->
                <button @click="isProfileAddressModal = false"
                    class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-50 text-gray-400 hover:bg-gray-200 hover:text-gray-600 ">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.04289 16.5418C5.65237 16.9323 5.65237 17.5655 6.04289 17.956C6.43342 18.3465 7.06658 18.3465 7.45711 17.956L11.9987 13.4144L16.5408 17.9565C16.9313 18.347 17.5645 18.347 17.955 17.9565C18.3455 17.566 18.3455 16.9328 17.955 16.5423L13.4129 12.0002L17.955 7.45808C18.3455 7.06756 18.3455 6.43439 17.955 6.04387C17.5645 5.65335 16.9313 5.65335 16.5408 6.04387L11.9987 10.586L7.45711 6.04439C7.06658 5.65386 6.43342 5.65386 6.04289 6.04439C5.65237 6.43491 5.65237 7.06808 6.04289 7.4586L10.5845 12.0002L6.04289 16.5418Z"
                            fill="" />
                    </svg>
                </button>

                <div class="px-2 pr-14">
                    <h4 class="mb-2 text-2xl font-semibold text-gray-800">
                        Edit Address
                    </h4>
                    <p class="mb-6 text-sm text-gray-500 lg:mb-7">
                        Update your details to keep your profile up-to-date.
                    </p>
                </div>
                <form class="flex flex-col">
                    <div class="px-2 overflow-y-auto custom-scrollbar">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-5 lg:grid-cols-2">
                            <div>
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Country
                                </label>
                                <input type="text" value="United States"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div>
                                <label class="mb-1.5 block text-sm font-medium text-gray-700 ">
                                    City/State
                                </label>
                                <input type="text" value="Arizona, United States"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div>
                                <label class="mb-1.5 block text-sm font-medium text-gray-700 ">
                                    Postal Code
                                </label>
                                <input type="text" value="ERT 2489"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div>
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    TAX ID
                                </label>
                                <input type="text" value="AS4568384"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 mt-6 lg:justify-end">
                        <button @click="isProfileAddressModal = false" type="button"
                            class="flex w-full justify-center rounded-lg border border-gray-600 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 sm:w-auto">
                            Close
                        </button>
                        <button type="button"
                            class="flex w-full justify-center rounded-lg bg-blue-700 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-800 sm:w-auto">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- ===== Modal Edit Address Start ===== -->

    </main>
    <!-- ===== Profile Content End ===== -->
</x-layout>
