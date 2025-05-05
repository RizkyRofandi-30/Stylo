<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    <section class="bg-white py-4 antialiased md:py-8">
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
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
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
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="text-end md:order-4 md:w-32">
                                        <p class="text-base font-bold text-gray-900">$1,499</p>
                                    </div>
                                </div>

                                <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                    <p class="text-base font-medium text-gray-900">PC
                                        system All in One APPLE iMac (2023) mqrq3ro/a, Apple M3, 24" Retina 4.5K, 8GB,
                                        SSD
                                        256GB, 10-core GPU, Keyboard layout INT</p>

                                    <div class="flex items-center gap-4">
                                        <button type="button"
                                            class="inline-flex items-center text-sm font-medium text-red-600 hover:underline ">
                                            <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18 17.94 6M18 18 6.06 6" />
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
                                            <li><a href="single-product.html" class="text-white text-lg"><i
                                                        class="fa fa-shopping-cart"></i></a></li>~
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
                                    <dd class="text-base font-medium text-green-600">-$299.00</dd>
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

</x-layout>
