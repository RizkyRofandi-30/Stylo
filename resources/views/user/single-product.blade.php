<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    @foreach ($products as $product )        
        <div
            class="mx-auto max-w-2xl px-4 pt-4 pb-16 sm:px-6 lg:max-w-7xl lg:grid lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pb-24 ">
            <!-- Image on large screens -->
            <div class="lg:col-span-1 lg:row-span-2">
                <img src="{{ asset('storage/' . $product->product_img) }}" alt="Model wearing plain white basic tee."
                    class="w-full h-auto aspect-[4/5] object-cover sm:rounded-lg" />
            </div>

            <!-- Text section -->
            <div class="lg:col-span-2  lg:pr-8">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->product_name }}</h1>
                <p class="text-3xl tracking-tight text-gray-900">Rp {{ number_format($product->product_price, 0, ',', '.') }}</p>
                <p class="overflow-auto h-20 mt-2">
                    {{ $product->product_desc }}
                </p>
            </div>

            @php
                $firstSize = $product->dataQuantities
                    ? $product->dataQuantities->filter(fn($dq) => !is_null($dq) && !is_null($dq->size))->first()
                    : null;
            @endphp


            <!-- Your new content on the right -->
            <div class="mt-4 lg:col-span-1 lg:row-span-3 lg:mt-0">
                <!-- Your content here -->
                <form class="mt-5">
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
                                <div class="stok" data-product-id="{{ $product->id }}">
                                    <div class="ml-4 font-medium">
                                        <span class="quantity-display">
                                            Stok: 
                                            @if ($firstSize === null)
                                                @foreach ($product->dataQuantities as $dq)
                                                    <span class="text-gray-500">{{ $dq->quantity }}</span>
                                                @endforeach
                                            @elseif ($firstSize->quantity === 0)
                                                <span class="text-red-500">Habis</span>
                                            @else
                                                <span class="text-gray-500">{{ $firstSize->quantity }}</span>
                                            @endif
                                        </span>
                                    </div>
                                    <input type="hidden" name="quantity" class="selected-quantity" value="{{ $firstSize?->quantity ?? 0 }}">
                                </div>                                
                            </div>

                            <div id="errorMsg" class="text-red-500 text-sm mt-1 hidden">
                                Tidak boleh 0
                            </div>
                        </div>
                    </div>

                    <!-- Sizes -->
                    <div class="mt-10">
                        @if ($firstSize)
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm font-medium text-gray-900">Size</h3>
                            </div>
                        @endif

                        <fieldset aria-label="Choose a size" class="mt-4" x-data="{ active: '' }">
                            <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                <!-- Active: "ring-2 ring-indigo-500" -->
                                @if ($product->dataQuantities !== null)
                                    @foreach ($product->dataQuantities->filter(fn($dq) => !is_null($dq) && !is_null($dq->size)) as $size)
                                        @if ($size->quantity === 0)
                                            <label
                                                class="group relative flex cursor-not-allowed items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium text-gray-200 uppercase hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                                                <input type="radio" name="size-choice" value="{{ $size->size }}" disabled class="sr-only">
                                                <span>{{ $size->size }}</span>
                                                <span aria-hidden="true"
                                                    class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                                    <svg class="absolute inset-0 size-full stroke-2 text-gray-200"
                                                        viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                                        <line x1="0" y1="100" x2="100" y2="0"
                                                            vector-effect="non-scaling-stroke" />
                                                    </svg>
                                                </span>
                                            </label>
                                        @else
                                            <label
                                                class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6"
                                                :class="{ 'ring-2 ring-blue-500': active === '{{ $size->size }}' }"
                                                @click="active = '{{ $size->size }}'">
                                                <input type="radio" name="size-choice"
                                                    value="{{ $size->size }}"
                                                    data-size="{{ $size->size }}"
                                                    data-quantity="{{ $size->quantity }}"
                                                    data-product-id="{{ $product->id }}" class="sr-only"
                                                    onclick="handleSizeClick(this)">
                                                <span>{{ $size->size }}</span>
                                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                                    aria-hidden="true"></span>
                                            </label>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </fieldset>
                    </div>

                    <button type="submit"
                        class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-blue-700 px-8 py-3 text-base font-medium text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:outline-hidden">Checkout</button>
                </form>
            </div>
        </div>
    @endforeach

    <script>
        function handleSizeClick(button) {
            const size = button.dataset.size;
            const quantity = button.dataset.quantity;
            const productId = button.dataset.productId;

            // Get the corresponding stok container using data-product-id
            const stokContainer = document.querySelector(`.stok[data-product-id="${productId}"]`);
            if (!stokContainer) return;

            const quantityBox = stokContainer.querySelector('.quantity-display');
            const hiddenQuantityInput = stokContainer.querySelector('.selected-quantity');

            if (quantityBox) {
                if (parseInt(quantity) === 0) {
                    quantityBox.innerHTML = 'Stok: <span class="text-red-500">Habis</span>';
                } else {
                    quantityBox.textContent = `Stok: ${quantity}`;
                }
            }

            if (hiddenQuantityInput) hiddenQuantityInput.value = quantity;

            console.log(`Product ${productId} | Size: ${size} | Quantity: ${quantity}`);
        }
    </script>
    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInput = document.getElementById('quantityInput');
            const decreaseBtn = document.getElementById('decreaseBtn');
            const increaseBtn = document.getElementById('increaseBtn');
            const errorMsg = document.getElementById('errorMsg');

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
</x-layout>
