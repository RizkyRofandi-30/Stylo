<section class="bg-white py-8 antialiased md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Shopping Cart</h2>
        <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
            <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                <div class="space-y-6">
                    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm md:p-6">
                        <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                            <img class="h-20 w-20 object-cover" src="{{ asset('assets/images/accessories-03.png') }}"
                                alt="imac image" />
                            <label for="counter-input" class="sr-only">Choose quantity:</label>
                            <div class="flex items-center justify-between md:order-3 md:justify-end">
                                <div class="flex items-center">
                                    <button type="button" id="decrement-button"
                                        data-input-counter-decrement="counter-input"
                                        class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 ">
                                        <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>
                                    <input type="text" id="counter-input" data-input-counter
                                        class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 "
                                        placeholder="" value="2" required />
                                    <button type="button" id="increment-button"
                                        data-input-counter-increment="counter-input"
                                        class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 ">
                                        <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="text-end md:order-4 md:w-32">
                                    <p class="text-base font-bold text-gray-900">$1,499</p>
                                </div>
                            </div>

                            <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                <p class="text-base font-medium text-gray-900">PC
                                    system All in One APPLE iMac (2023) mqrq3ro/a, Apple M3, 24" Retina 4.5K, 8GB, SSD
                                    256GB, 10-core GPU, Keyboard layout INT</p>

                                <div class="flex items-center gap-4">
                                    <button type="button"
                                        class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline">
                                        <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                        </svg>
                                        Add to Favorites
                                    </button>

                                    <button type="button"
                                        class="inline-flex items-center text-sm font-medium text-red-600 hover:underline ">
                                        <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden xl:mt-8 xl:block">
                    <h3 class="text-2xl font-semibold text-gray-900">People also bought</h3>
                    <div class="mt-6 grid grid-cols-3 gap-4 sm:mt-8">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <div class="relative group">
                                <img src="{{ asset('assets/images/women-01.jpg') }}" alt="Air Force 1 X"
                                    class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                                <div
                                    class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                    <ul class="flex space-x-4">
                                        <li><a href="single-product.html" class="text-white text-lg"><i
                                                    class="fa fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-4 ms-2">
                                <h4 class="text-xl font-bold">New Green Jacket</h4>
                                <span class="text-gray-400 font-bold">$75.00</span>
                            </div>
                            <div class="m-6 flex items-center gap-2.5">
                                <button type="button"
                                    class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium  text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                    <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                    </svg>
                                    Add to cart
                                </button>
                            </div>
                        </div>
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <div class="relative group">
                                <img src="{{ asset('assets/images/women-01.jpg') }}" alt="Air Force 1 X"
                                    class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                                <div
                                    class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                    <ul class="flex space-x-4">
                                        <li><a href="single-product.html" class="text-white text-lg"><i
                                                    class="fa fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-4 ms-2">
                                <h4 class="text-xl font-bold">New Green Jacket</h4>
                                <span class="text-gray-400 font-bold">$75.00</span>
                            </div>
                            <div class="m-6 flex items-center gap-2.5">
                                <button type="button"
                                    class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium  text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                    <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                    </svg>
                                    Add to cart
                                </button>
                            </div>
                        </div>
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <div class="relative group">
                                <img src="{{ asset('assets/images/women-01.jpg') }}" alt="Air Force 1 X"
                                    class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                                <div
                                    class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                    <ul class="flex space-x-4">
                                        <li><a href="single-product.html" class="text-white text-lg"><i
                                                    class="fa fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-4 ms-2">
                                <h4 class="text-xl font-bold">New Green Jacket</h4>
                                <span class="text-gray-400 font-bold">$75.00</span>
                            </div>
                            <div class="m-6 flex items-center gap-2.5">
                                <button type="button"
                                    class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium  text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                    <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                    </svg>
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                    <p class="text-xl font-semibold text-gray-900">Order summary</p>
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500">Original price</dt>
                                <dd class="text-base font-medium text-gray-900">$7,592.00</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500">Savings</dt>
                                <dd class="text-base font-medium text-blue-600">-$299.00</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500">Store Pickup</dt>
                                <dd class="text-base font-medium text-gray-900">$99</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500">Tax</dt>
                                <dd class="text-base font-medium text-gray-900">$799</dd>
                            </dl>
                        </div>

                        <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                            <dt class="text-base font-bold text-gray-900">Total</dt>
                            <dd class="text-base font-bold text-gray-900">$8,191.00</dd>
                        </dl>
                    </div>

                    <a href="#"
                        class="flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Proceed
                        to Checkout</a>

                    <div class="flex items-center justify-center gap-2">
                        <span class="text-sm font-normal text-gray-500"> or </span>
                        <a href="#" title=""
                            class="inline-flex items-center gap-2 text-sm font-medium text-blue-700 underline hover:no-underline">
                            Continue Shopping
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Profile Content Start ===== -->
<main x-data="{ 'isProfileInfoModal': false, 'isProfileAddressModal': false }" class="px-4 lg:px-16">
    <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
        <!-- Breadcrumb Start -->
        <div x-data="{ pageName: `Profile` }">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
                <h2 class="text-xl font-semibold text-gray-800" x-text="pageName"></h2>
                <nav>
                    <ol class="flex items-center gap-1.5">
                        <li>
                            <a class="inline-flex items-center gap-1.5 text-sm text-gray-500" href="index.html">
                                Home
                                <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke=""
                                        stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                        <li class="text-sm text-gray-800" x-text="pageName"></li>
                    </ol>
                </nav>
            </div>

        </div>
        <!-- Breadcrumb End -->

        <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] lg:p-6">
            <h3 class="mb-5 text-lg font-semibold text-gray-800 lg:mb-7">
                Profile
            </h3>

            <div class="p-5 mb-6 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
                <div class="flex flex-col gap-5 xl:flex-row xl:items-center xl:justify-between">
                    <div class="flex flex-col items-center w-full gap-6 xl:flex-row">
                        <div
                            class="w-20 h-20 overflow-hidden border border-gray-200 rounded-full dark:border-gray-800">
                            <img src="./images/user/owner.jpg" alt="user" />
                        </div>
                        <div class="order-3 xl:order-2">
                            <h4 class="mb-2 text-lg font-semibold text-center text-gray-800 xl:text-left">
                                Musharof Chowdhury
                            </h4>
                            <div
                                class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
                                <p class="text-sm text-gray-500">
                                    Team Manager
                                </p>
                                <div class="hidden h-3.5 w-px bg-gray-300  xl:block"></div>
                                <p class="text-sm text-gray-500">
                                    Arizona, United States
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center order-2 gap-2 grow xl:order-3 xl:justify-end">
                            <button
                                class="flex h-11 w-11 items-center justify-center gap-2 rounded-full border border-gray-300 bg-white text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-200 hover:text-gray-800 ">
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.6666 11.2503H13.7499L14.5833 7.91699H11.6666V6.25033C11.6666 5.39251 11.6666 4.58366 13.3333 4.58366H14.5833V1.78374C14.3118 1.7477 13.2858 1.66699 12.2023 1.66699C9.94025 1.66699 8.33325 3.04771 8.33325 5.58342V7.91699H5.83325V11.2503H8.33325V18.3337H11.6666V11.2503Z"
                                        fill="" />
                                </svg>
                            </button>

                            <button
                                class="flex h-11 w-11 items-center justify-center gap-2 rounded-full border border-gray-300 bg-white text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-200 hover:text-gray-800">
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.1708 1.875H17.9274L11.9049 8.75833L18.9899 18.125H13.4424L9.09742 12.4442L4.12578 18.125H1.36745L7.80912 10.7625L1.01245 1.875H6.70078L10.6283 7.0675L15.1708 1.875ZM14.2033 16.475H15.7308L5.87078 3.43833H4.23162L14.2033 16.475Z"
                                        fill="" />
                                </svg>
                            </button>

                            <button
                                class="flex h-11 w-11 items-center justify-center gap-2 rounded-full border border-gray-300 bg-white text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-200 hover:text-gray-800">
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.78381 4.16645C5.78351 4.84504 5.37181 5.45569 4.74286 5.71045C4.11391 5.96521 3.39331 5.81321 2.92083 5.32613C2.44836 4.83904 2.31837 4.11413 2.59216 3.49323C2.86596 2.87233 3.48886 2.47942 4.16715 2.49978C5.06804 2.52682 5.78422 3.26515 5.78381 4.16645ZM5.83381 7.06645H2.50048V17.4998H5.83381V7.06645ZM11.1005 7.06645H7.78381V17.4998H11.0672V12.0248C11.0672 8.97475 15.0422 8.69142 15.0422 12.0248V17.4998H18.3338V10.8914C18.3338 5.74978 12.4505 5.94145 11.0672 8.46642L11.1005 7.06645Z"
                                        fill="" />
                                </svg>
                            </button>

                            <button
                                class="flex h-11 w-11 items-center justify-center gap-2 rounded-full border border-gray-300 bg-white text-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-200 hover:text-gray-800">
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.8567 1.66699C11.7946 1.66854 12.2698 1.67351 12.6805 1.68573L12.8422 1.69102C13.0291 1.69766 13.2134 1.70599 13.4357 1.71641C14.3224 1.75738 14.9273 1.89766 15.4586 2.10391C16.0078 2.31572 16.4717 2.60183 16.9349 3.06503C17.3974 3.52822 17.6836 3.99349 17.8961 4.54141C18.1016 5.07197 18.2419 5.67753 18.2836 6.56433C18.2935 6.78655 18.3015 6.97088 18.3081 7.15775L18.3133 7.31949C18.3255 7.73011 18.3311 8.20543 18.3328 9.1433L18.3335 9.76463C18.3336 9.84055 18.3336 9.91888 18.3336 9.99972L18.3335 10.2348L18.333 10.8562C18.3314 11.794 18.3265 12.2694 18.3142 12.68L18.3089 12.8417C18.3023 13.0286 18.294 13.213 18.2836 13.4351C18.2426 14.322 18.1016 14.9268 17.8961 15.458C17.6842 16.0074 17.3974 16.4713 16.9349 16.9345C16.4717 17.397 16.0057 17.6831 15.4586 17.8955C14.9273 18.1011 14.3224 18.2414 13.4357 18.2831C13.2134 18.293 13.0291 18.3011 12.8422 18.3076L12.6805 18.3128C12.2698 18.3251 11.7946 18.3306 10.8567 18.3324L10.2353 18.333C10.1594 18.333 10.0811 18.333 10.0002 18.333H9.76516L9.14375 18.3325C8.20591 18.331 7.7306 18.326 7.31997 18.3137L7.15824 18.3085C6.97136 18.3018 6.78703 18.2935 6.56481 18.2831C5.67801 18.2421 5.07384 18.1011 4.5419 17.8955C3.99328 17.6838 3.5287 17.397 3.06551 16.9345C2.60231 16.4713 2.3169 16.0053 2.1044 15.458C1.89815 14.9268 1.75856 14.322 1.7169 13.4351C1.707 13.213 1.69892 13.0286 1.69238 12.8417L1.68714 12.68C1.67495 12.2694 1.66939 11.794 1.66759 10.8562L1.66748 9.1433C1.66903 8.20543 1.67399 7.73011 1.68621 7.31949L1.69151 7.15775C1.69815 6.97088 1.70648 6.78655 1.7169 6.56433C1.75786 5.67683 1.89815 5.07266 2.1044 4.54141C2.3162 3.9928 2.60231 3.52822 3.06551 3.06503C3.5287 2.60183 3.99398 2.31641 4.5419 2.10391C5.07315 1.89766 5.67731 1.75808 6.56481 1.71641C6.78703 1.70652 6.97136 1.69844 7.15824 1.6919L7.31997 1.68666C7.7306 1.67446 8.20591 1.6689 9.14375 1.6671L10.8567 1.66699ZM10.0002 5.83308C7.69781 5.83308 5.83356 7.69935 5.83356 9.99972C5.83356 12.3021 7.69984 14.1664 10.0002 14.1664C12.3027 14.1664 14.1669 12.3001 14.1669 9.99972C14.1669 7.69732 12.3006 5.83308 10.0002 5.83308ZM10.0002 7.49974C11.381 7.49974 12.5002 8.61863 12.5002 9.99972C12.5002 11.3805 11.3813 12.4997 10.0002 12.4997C8.6195 12.4997 7.50023 11.3809 7.50023 9.99972C7.50023 8.61897 8.61908 7.49974 10.0002 7.49974ZM14.3752 4.58308C13.8008 4.58308 13.3336 5.04967 13.3336 5.62403C13.3336 6.19841 13.8002 6.66572 14.3752 6.66572C14.9496 6.66572 15.4169 6.19913 15.4169 5.62403C15.4169 5.04967 14.9488 4.58236 14.3752 4.58308Z"
                                        fill="" />
                                </svg>
                            </button>
                        </div>
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

            <div class="p-5 mb-6 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 lg:mb-6">
                            Personal Information
                        </h4>

                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-7 2xl:gap-x-32">
                            <div>
                                <p class="mb-2 text-xs leading-normal text-gray-500">
                                    First Name
                                </p>
                                <p class="text-sm font-medium text-gray-800">
                                    Musharof
                                </p>
                            </div>

                            <div>
                                <p class="mb-2 text-xs leading-normal text-gray-500">
                                    Last Name
                                </p>
                                <p class="text-sm font-medium text-gray-800">
                                    Chowdhury
                                </p>
                            </div>

                            <div>
                                <p class="mb-2 text-xs leading-normal text-gray-500">
                                    Email address
                                </p>
                                <p class="text-sm font-medium text-gray-800">
                                    randomuser@pimjo.com
                                </p>
                            </div>

                            <div>
                                <p class="mb-2 text-xs leading-normal text-gray-500">
                                    Phone
                                </p>
                                <p class="text-sm font-medium text-gray-800">
                                    +09 363 398 46
                                </p>
                            </div>

                            <div>
                                <p class="mb-2 text-xs leading-normal text-gray-500">
                                    Bio
                                </p>
                                <p class="text-sm font-medium text-gray-800">
                                    Team Manager
                                </p>
                            </div>
                        </div>
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
            <div class="p-5 border border-gray-200 rounded-2xl dark:border-gray-800 lg:p-6">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 lg:mb-6">
                            Address
                        </h4>

                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-7 2xl:gap-x-32">
                            <div>
                                <p class="mb-2 text-xs leading-normal text-gray-500">
                                    Country
                                </p>
                                <p class="text-sm font-medium text-gray-800">
                                    United States
                                </p>
                            </div>

                            <div>
                                <p class="mb-2 text-xs leading-normal text-gray-500">
                                    City/State
                                </p>
                                <p class="text-sm font-medium text-gray-800">
                                    Arizona, United States
                                </p>
                            </div>

                            <div>
                                <p class="mb-2 text-xs leading-normal text-gray-500">
                                    Postal Code
                                </p>
                                <p class="text-sm font-medium text-gray-800">
                                    ERT 2489
                                </p>
                            </div>

                            <div>
                                <p class="mb-2 text-xs leading-normal text-gray-500">
                                    TAX ID
                                </p>
                                <p class="text-sm font-medium text-gray-800">
                                    AS4568384
                                </p>
                            </div>
                        </div>
                    </div>

                    <button @click="isProfileAddressModal = true"
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
            <form class="flex flex-col">
                <div class="custom-scrollbar h-[450px] overflow-y-auto px-2">
                    <div class="items-center justify-center">
                        <div class="w-full max-w-xl">
                            <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                Foto Profile
                            </label>
                            <label for="file-upload"
                                class="block cursor-pointer hover:border-blue-700 border-1 border-dashed rounded-xl bg-white p-10 text-center hover:bg-blue-50 transition">
                                <div class="flex flex-col items-center space-y-4">
                                    <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                                        <svg class="fill-current" width="29" height="28" viewBox="0 0 29 28"
                                            fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.5 3.917a.75.75 0 0 0-.548.239L8.574 9.532a.75.75 0 0 0 1.06 1.061l4.118-4.116v12.19a.75.75 0 0 0 1.5 0V6.482l4.113 4.111a.75.75 0 0 0 1.06-1.06L15.084 4.194A.75.75 0 0 0 14.5 3.917ZM5.916 18.667a.75.75 0 0 0-1.5 0v3.167A2.25 2.25 0 0 0 6.666 24.084h15.667a2.25 2.25 0 0 0 2.25-2.25v-3.167a.75.75 0 0 0-1.5 0v3.167a.75.75 0 0 1-.75.75H6.666a.75.75 0 0 1-.75-.75v-3.167Z" />
                                        </svg>
                                    </div>
                                    <p class="text-lg font-semibold text-gray-700">Drag & Drop File Here</p>
                                    <p class="text-sm text-gray-500">Drag and drop your PNG, JPG, WebP, SVG images here
                                        or browse</p>
                                    <p class="text-blue-600 underline text-sm">Browse File</p>
                                </div>
                                <input id="file-upload" type="file" accept=".png,.jpg,.jpeg,.webp,.svg"
                                    class="hidden" />
                            </label>
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-5 text-lg font-medium text-gray-800 lg:mb-6">
                            Social Links
                        </h5>

                        <div class="grid grid-cols-1 gap-x-6 gap-y-5 lg:grid-cols-2">
                            <div>
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Facebook
                                </label>
                                <input type="text" value="https://facebook.com/PimjoHQ"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div>
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    X.com
                                </label>
                                <input type="text" value="https://x.com/PimjoHQ"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div>
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Linkedin
                                </label>
                                <input type="text" value="https://linkedin.com/PimjoHQ"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div>
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Instagram
                                </label>
                                <input type="text" value="https://instagram.com/PimjoHQ"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>
                        </div>
                    </div>
                    <div class="mt-7">
                        <h5 class="mb-5 text-lg font-medium text-gray-800 lg:mb-6">
                            Personal Information
                        </h5>

                        <div class="grid grid-cols-1 gap-x-6 gap-y-5 lg:grid-cols-2">
                            <div class="col-span-2 lg:col-span-1">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    First Name
                                </label>
                                <input type="text" value="Musharof"
                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div class="col-span-2 lg:col-span-1">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Last Name
                                </label>
                                <input type="text" value="Chowdhury"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div class="col-span-2 lg:col-span-1">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Email Address
                                </label>
                                <input type="text" value="randomuser@pimjo.com"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div class="col-span-2 lg:col-span-1">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Phone
                                </label>
                                <input type="text" value="+09 363 398 46"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>

                            <div class="col-span-2 mt-1">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Bio
                                </label>
                                <input type="text" value="Team Manager"
                                    class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-3 px-2 mt-6 lg:justify-end">
                    <button @click="isProfileInfoModal = false" type="button"
                        class="flex w-full justify-center rounded-lg border border-gray-600 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 sm:w-auto">
                        Close
                    </button>
                    <button type="button"
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


@php
// Set current step: 1 = Checkout, 2 = Package Order, 3 = Sent, 4 = Delivered
$currentStep = 3;
$steps = [
    1 => 'Checkout',
    2 => 'Package Order',
    3 => 'Sent',
    4 => 'Delivered',
    5 => 'Completed',
];
@endphp

<div class="w-full max-w-4xl mx-auto mt-8 px-4">
    <!-- Progress tracker container -->
    <div class="flex items-center justify-center">
        <!-- Step indicators with connecting lines -->
        <div class="flex items-center w-full">
            @foreach ($steps as $step => $label)
                <!-- Step indicator -->
                <div class="flex flex-col items-center relative flex-1">
                    <!-- Step number circle -->
                    <div
                        class="{{ $currentStep >= $step ? 'bg-blue-600 text-white' : 'bg-gray-300 text-gray-700' }} 
                              w-10 h-10 flex items-center justify-center rounded-full z-10 font-medium">
                        {{ $step }}
                    </div>

                    <!-- Step label -->
                    <span
                        class="mt-2 text-sm {{ $currentStep >= $step ? 'text-blue-600 font-medium' : 'text-gray-500' }}">
                        {{ $label }}
                    </span>

                    <!-- Connecting line (not for the last step) -->
                    @if ($step < count($steps))
                        <div
                            class="absolute top-5 left-1/2 w-full h-1
                                 {{ $currentStep > $step ? 'bg-blue-600' : ($currentStep == $step ? 'bg-blue-300' : 'bg-gray-300') }}">
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>



<div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold mb-6 text-center">Lupa Password</h2>

        <form method="POST" action="#">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                <input type="email" name="email"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 font-semibold transition duration-300">
                Submit
            </button>
        </form>
    </div>
</div>

<div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold mb-6 text-center">OTP Verification</h2>

        @if (session('error'))
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        {{-- @if (session('status'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif --}}

        {{-- @if (session('otp.resend'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif --}}

        <form method="POST" action="#">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Enter OTP</label>
                <input type="text" name="otp" inputmode="numeric" pattern="[0-9]*"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required
                    placeholder="Enter 6-digit code" maxlength="6" autofocus>
                {{-- @error('otp')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror --}}
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 font-semibold transition duration-300">
                Verify OTP
            </button>
        </form>

        <div class="mt-4 text-center">
            <form method="POST" action="#">
                @csrf
                <button type="submit" class="text-blue-500 hover:text-blue-700 font-medium">
                    Resend OTP
                </button>
            </form>
        </div>
    </div>
</div>

<div class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-xl">
        <h2 class="text-xl font-semibold mb-4">Dropzone</h2>

        <label for="file-upload"
            class="block cursor-pointer hover:border-blue-700 hover:border-1 hover:border-dashed rounded-xl bg-white p-10 text-center hover:bg-blue-50 transition">
            <div class="flex flex-col items-center space-y-4">
                <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                    <svg class="fill-current" width="29" height="28" viewBox="0 0 29 28" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.5 3.917a.75.75 0 0 0-.548.239L8.574 9.532a.75.75 0 0 0 1.06 1.061l4.118-4.116v12.19a.75.75 0 0 0 1.5 0V6.482l4.113 4.111a.75.75 0 0 0 1.06-1.06L15.084 4.194A.75.75 0 0 0 14.5 3.917ZM5.916 18.667a.75.75 0 0 0-1.5 0v3.167A2.25 2.25 0 0 0 6.666 24.084h15.667a2.25 2.25 0 0 0 2.25-2.25v-3.167a.75.75 0 0 0-1.5 0v3.167a.75.75 0 0 1-.75.75H6.666a.75.75 0 0 1-.75-.75v-3.167Z" />
                    </svg>
                </div>
                <p class="text-lg font-semibold text-gray-700">Drag & Drop File Here</p>
                <p class="text-sm text-gray-500">Drag and drop your PNG, JPG, WebP, SVG images here or browse</p>
                <p class="text-blue-600 underline text-sm">Browse File</p>
            </div>
            <input id="file-upload" type="file" accept=".png,.jpg,.jpeg,.webp,.svg" class="hidden" />
        </label>
    </div>
</div>


<!-- Main Content -->
<main class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center w-full max-w-4xl mx-auto">
        <!-- Empty Cart Icon -->
        <div class="mb-8">
            <div class="mx-auto w-32 h-32 bg-gray-100 rounded-full flex items-center justify-center">
                <i class="fas fa-shopping-cart text-5xl text-gray-400"></i>
            </div>
        </div>

        <!-- Heading -->
        <h1 class="text-3xl font-bold text-gray-900 mb-4">Your cart is empty</h1>

        <!-- Description -->
        <p class="text-lg text-gray-600 mb-8 max-w-md mx-auto">
            Looks like you haven't added any items to your cart yet. Start shopping to fill it up!
        </p>

        <!-- Call to Action Buttons -->
        <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
            <a href="#"
                class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-200 shadow-sm">
                <i class="fas fa-shopping-bag mr-2"></i>
                Continue Shopping
            </a>

            <a href="#"
                class="inline-flex items-center px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-50 transition-colors duration-200">
                <i class="fas fa-th-large mr-2"></i>
                Browse Categories
            </a>
        </div>
    </div>
</main>




