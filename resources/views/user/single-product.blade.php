<x-user-components.layout>
    <nav aria-label="Breadcrumb">
        <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 pt-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <li>
                <div class="flex items-center">
                    <a href="#" class="mr-2 text-sm font-medium text-gray-900">Men</a>
                    <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                        class="h-5 w-4 text-gray-300">
                        <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                    </svg>
                </div>
            </li>
            <li class="text-sm">
                <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">Basic
                    Tee 6-Pack</a>
            </li>
        </ol>
    </nav>

    <div
        class="mx-auto max-w-2xl px-4 pt-4 pb-16 sm:px-6 lg:max-w-7xl lg:grid lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pb-24 ">
        <!-- Image on large screens -->
        <div class="lg:col-span-1 lg:row-span-2">
            <img src="{{ asset('assets/images/accessories-04.jpeg') }}" alt="Model wearing plain white basic tee."
                class="w-full h-auto aspect-[4/5] object-cover sm:rounded-lg" />
        </div>

        <!-- Text section -->
        <div class="lg:col-span-2  lg:pr-8">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Basic Tee 6-Pack</h1>
            <p class="text-3xl tracking-tight text-gray-900">$192</p>
            <p class="overflow-auto h-30 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                asperiores
                tempora
                nulla soluta illum,
                laboriosam fugiat excepturi aperiam cum molestias maiores vel! Veritatis qui iusto, praesentium
                molestias
                corporis excepturi maiores Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos cumque
                repellat
                unde. Eveniet qui corporis recusandae cupiditate, sed totam blanditiis possimus doloremque? Quas
                necessitatibus, in assumenda nobis labore vero. Neque! Lorem ipsum dolor sit amet consectetur,
                adipisicing
                elit. Reprehenderit dolore, adipisci consequuntur doloremque saepe eaque fugit minus, molestias, a
                obcaecati
                corrupti blanditiis dolor cupiditate enim vitae dolorem. Neque, doloribus perferendis.</p>
        </div>

        <!-- Your new content on the right -->
        <div class="mt-4 lg:col-span-1 lg:row-span-3 lg:mt-0">
            <!-- Your content here -->
            <form class="mt-5">
                <!-- Colors -->
                <div x-data="{ active: '' }">
                    <h3 class="text-sm font-medium text-gray-900">Color</h3>

                    <fieldset aria-label="Choose a color" class="mt-4">
                        <div class="flex flex-wrap items-center gap-x-1 max-w-full lg:max-w-[400px]">
                            <label
                                class="group relative inline-flex cursor-not-allowed items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium text-gray-200 hover:bg-gray-50 focus:outline-none h-10 mb-2">
                                <input type="radio" name="size-choice" value="Putih" disabled class="sr-only">
                                <span>Putih</span>
                                <span aria-hidden="true"
                                    class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                    <svg class="absolute inset-0 size-full stroke-2 text-gray-200" viewBox="0 0 100 100"
                                        preserveAspectRatio="none" stroke="currentColor">
                                        <line x1="0" y1="100" x2="100" y2="0"
                                            vector-effect="non-scaling-stroke" />
                                    </svg>
                                </span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label
                                class="group relative inline-flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-none h-10 mb-2"
                                :class="{ 'ring-2 ring-blue-500': active === 'Hitam' }" @click="active = 'Hitam'">
                                <input type="radio" name="size-choice" value="Hitam" class="sr-only">
                                <span>Hitam</span>
                                <!--
                                    Active: "border", Not Active: "border-2"
                                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                    aria-hidden="true"></span>
                            </label>
                            <label
                                class="group relative inline-flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-none h-10 mb-2"
                                :class="{ 'ring-2 ring-blue-500': active === 'Coklat' }" @click="active = 'Coklat'">
                                <input type="radio" name="size-choice" value="Coklat" class="sr-only">
                                <span>Coklat</span>
                                <!--
                                    Active: "border", Not Active: "border-2"
                                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                    aria-hidden="true"></span>
                            </label>
                            <label
                                class="group relative inline-flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-none h-10 mb-2"
                                :class="{ 'ring-2 ring-blue-500': active === 'Biru' }" @click="active = 'Biru'">
                                <input type="radio" name="size-choice" value="Biru" class="sr-only">
                                <span>Biru</span>
                                <!--
                                    Active: "border", Not Active: "border-2"
                                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                    aria-hidden="true"></span>
                            </label>
                            <label
                                class="group relative inline-flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-none h-10 mb-2"
                                :class="{ 'ring-2 ring-blue-500': active === 'Hijau' }" @click="active = 'Hijau'">
                                <input type="radio" name="size-choice" value="Hijau" class="sr-only">
                                <span>Hijau</span>
                                <!--
                                    Active: "border", Not Active: "border-2"
                                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                    aria-hidden="true"></span>
                            </label>
                        </div>
                    </fieldset>
                </div>

                <div class="mt-2">
                    <h3 class="text-sm font-medium text-gray-900">Jumlah</h3>
                    <div class="flex flex-col mt-2">
                        <div class="flex items-center ">
                            <div class="flex items-center border rounded-md px-1 py-1 border-gray-300">
                                <button type="button" id="decreaseBtn"
                                    class="text-gray-500 w-10 h-4 flex items-center justify-center text-xl">
                                    −
                                </button>
                                <input type="text" id="quantityInput" value="1"
                                    class="w-15 h-8 text-center border-white" aria-label="Quantity" />
                                <button type="button" id="increaseBtn"
                                    class="text-green-500 w-10 h-4 flex items-center justify-center text-xl ">
                                    +
                                </button>
                            </div>
                            <div class="ml-4 font-medium">
                                Stok: <span id="stock">947</span>
                            </div>
                        </div>

                        <div id="errorMsg" class="text-red-500 text-sm mt-1 hidden">
                            Tidak boleh 0
                        </div>
                    </div>
                </div>

                <!-- Sizes -->
                <div class="mt-10">
                    <div class="flex items-center justify-between">
                        <h3 class="text-sm font-medium text-gray-900">Size</h3>
                    </div>

                    <fieldset aria-label="Choose a size" class="mt-4" x-data="{ active: '' }">
                        <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label
                                class="group relative flex cursor-not-allowed items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium text-gray-200 uppercase hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                                <input type="radio" name="size-choice" value="XXS" disabled class="sr-only">
                                <span>XXS</span>
                                <span aria-hidden="true"
                                    class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                    <svg class="absolute inset-0 size-full stroke-2 text-gray-200"
                                        viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                        <line x1="0" y1="100" x2="100" y2="0"
                                            vector-effect="non-scaling-stroke" />
                                    </svg>
                                </span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label
                                class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6"
                                :class="{ 'ring-2 ring-blue-500': active === 'XS' }" @click="active = 'XS'">
                                <input type="radio" name="size-choice" value="XS" class="sr-only">
                                <span>XS</span>
                                <!--
                                            Active: "border", Not Active: "border-2"
                                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                    aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label
                                class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6"
                                :class="{ 'ring-2 ring-blue-500': active === 's' }" @click="active = 's'">
                                <input type="radio" name="size-choice" value="S" class="sr-only">
                                <span>S</span>
                                <!--
                                            Active: "border", Not Active: "border-2"
                                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                    aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label
                                class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6"
                                :class="{ 'ring-2 ring-blue-500': active === 'M' }" @click="active = 'M'">
                                <input type="radio" name="size-choice" value="M" class="sr-only">
                                <span>M</span>
                                <!--
                                            Active: "border", Not Active: "border-2"
                                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                                        -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                    aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label
                                class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6"
                                :class="{ 'ring-2 ring-blue-500': active === 'L' }" @click="active = 'L'">
                                <input type="radio" name="size-choice" value="L" class="sr-only">
                                <span>L</span>
                                <!--
                                    Active: "border", Not Active: "border-2"
                                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                    aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label
                                class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6"
                                :class="{ 'ring-2 ring-blue-500': active === 'XL' }" @click="active = 'XL'">
                                <input type="radio" name="size-choice" value="XL" class="sr-only">
                                <span>XL</span>
                                <!--
                                    Active: "border", Not Active: "border-2"
                                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                    aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label
                                class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6"
                                :class="{ 'ring-2 ring-blue-500': active === '2XL' }" @click="active = '2XL'">
                                <input type="radio" name="size-choice" value="2XL" class="sr-only">
                                <span>2XL</span>
                                <!--
                                    Active: "border", Not Active: "border-2"
                                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                    aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label
                                class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6"
                                :class="{ 'ring-2 ring-blue-500': active === '3XL' }" @click="active = '3XL'">
                                <input type="radio" name="size-choice" value="3XL" class="sr-only">
                                <span>3XL</span>
                                <!--
                                    Active: "border", Not Active: "border-2"
                                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                    aria-hidden="true"></span>
                            </label>
                        </div>
                    </fieldset>
                </div>

                <button type="submit"
                    class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-blue-700 px-8 py-3 text-base font-medium text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:outline-hidden">Checkout</button>
            </form>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInput = document.getElementById('quantityInput');
            const decreaseBtn = document.getElementById('decreaseBtn');
            const increaseBtn = document.getElementById('increaseBtn');
            const errorMsg = document.getElementById('errorMsg');
            const stock = 947;

            function validateQuantity(value) {
                const intValue = parseInt(value, 10);
                if (isNaN(intValue) || intValue <= 0) {
                    errorMsg.classList.remove('hidden');
                    return false;
                } else {
                    errorMsg.classList.add('hidden');
                    return true;
                }
            }

            quantityInput.addEventListener('input', function(e) {
                const value = e.target.value;
                if (value === '' || /^\d+$/.test(value)) {
                    validateQuantity(value);
                } else {
                    e.target.value = 1;
                    errorMsg.classList.remove('hidden');
                }
            });

            decreaseBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value, 10);
                value = isNaN(value) ? 1 : value - 1;
                quantityInput.value = value;
                validateQuantity(value);
            });

            increaseBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value, 10);
                value = isNaN(value) ? 1 : value + 1;
                quantityInput.value = value;
                validateQuantity(value);
            });
        });
    </script>
</x-user-components.layout>
