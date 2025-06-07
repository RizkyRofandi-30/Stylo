<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    @foreach ($products as $product)        
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
                    {!! nl2br(e($product->product_desc)) !!}
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
                <div class="mt-5">
                    {{-- Quantity btn --}}
                    <div class="mt-2">
                        <h3 class="text-sm font-medium text-gray-900">Jumlah</h3>
                        <div class="flex flex-col mt-2">
                            <div class="flex items-center ">
                                <div class="flex items-center border rounded-md px-1 py-1 border-gray-300">
                                    <button type="button" id="decreaseBtn-{{ $product->id }}"
                                        class="text-gray-500 w-10 h-4 flex items-center justify-center text-xl decreaseBtn">
                                        −
                                    </button>
                                    <input type="text" id="quantityInput-{{ $product->id }}" value="1"
                                        class="w-15 h-8 text-center border-white quantityInput" aria-label="Quantity" />
                                    <button type="button" id="increaseBtn-{{ $product->id }}"
                                        class="text-green-500 w-10 h-4 flex items-center justify-center text-xl increaseBtn">
                                        +
                                    </button>
                                </div>
                                <div class="stok" data-product-id="{{ $product->id }}">
                                    <div class="ml-4 font-medium">
                                        <span class="quantity-display">
                                            Stok: 
                                            @if ($firstSize === null)
                                                @php
                                                    $totalQuantity = $product->dataQuantities->sum('quantity');
                                                @endphp
                                                <span class="text-gray-500">{{ $totalQuantity }}</span>
                                            @elseif ($firstSize->quantity === 0)
                                                <span class="text-red-500">Habis</span>
                                            @else
                                                <span class="text-gray-500">{{ $firstSize->quantity }}</span>
                                            @endif
                                        </span>
                                    </div>
                                    <input type="hidden" name="quantity" class="selected-quantity" value="{{ $firstSize ? $firstSize->quantity : $totalQuantity }}">
                                </div>                                
                            </div>

                            <div id="errorMsg-{{ $product->id }}" class="text-red-500 text-sm mt-1 hidden errorMsg">
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

                        <fieldset aria-label="Choose a size" class="mt-4">
                            <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                @if ($product->dataQuantities !== null)
                                    @foreach ($product->dataQuantities->filter(fn($dq) => !is_null($dq) && !is_null($dq->size)) as $size)
                                        @if ($size->quantity === 0)
                                            <label class="group relative flex cursor-not-allowed items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium text-gray-200 uppercase hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                                                <input type="radio" name="size-choice-{{ $product->id }}" value="{{ $size->size }}" disabled class="sr-only">
                                                <span>{{ $size->size }}</span>
                                                <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                                    <svg class="absolute inset-0 size-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                                        <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                                                    </svg>
                                                </span>
                                            </label>
                                        @else
                                            <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 size-label"
                                                    data-product-id="{{ $product->id }}"
                                                    data-size="{{ $size->size }}">
                                                <input type="radio" 
                                                        name="size-choice-{{ $product->id }}" 
                                                        value="{{ $size->size }}"
                                                        data-size="{{ $size->size }}"
                                                        data-quantity="{{ $size->quantity }}"
                                                        data-product-id="{{ $product->id }}"
                                                        class="sr-only size-radio">
                                                <span>{{ $size->size }}</span>
                                                <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                            </label>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </fieldset>
                    </div>

                    {{-- Form Checkout and Form addToCart --}}
                    <div class="flex gap-2">
                        @if (Auth::check())
                            <form method="POST" action="{{ route('user.post_checkout', ['user_id' => Auth::user()->id]) }}"
                                    enctype="multipart/form-data"
                                    id="checkoutForm-{{ $product->product_id }}"
                                    class="checkoutForm"
                                    data-product-id="{{ $product->id }}"
                                    data-category="{{ $product->category }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                <input type="hidden" name="quantity" class="form-quantity" value="1">
                                <input type="hidden" name="size" class="form-size" value="">
                                <button type="submit" 
                                    class="mt-10 flex flex-grow items-center justify-center rounded-md border border-transparent bg-blue-700 px-30 py-3 text-base font-medium text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:outline-hidden">
                                    Checkout
                                </button>
                            </form>
                            <form method="POST" action="{{ route('user.add_to_cart', ['user_id' => Auth::user()->id]) }}" 
                                        enctype="multipart/form-data" 
                                        id="addToCartForm-{{ $product->product_id }}" 
                                        class="addToCartForm" 
                                        data-product-id="{{ $product->id }}"
                                        data-category="{{ $product->category }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                <input type="hidden" name="quantity" class="form-quantity" value="1">
                                <input type="hidden" name="size" class="form-size" value="">
                                <button type="submit" class="mt-10 flex items-center justify-center rounded-md border border-gray-300 bg-white px-6 py-6 text-base font-medium text-gray-700 hover:bg-gray-200 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:outline-hidden">
                                    <i class="fas fa-shopping-cart fa-lg"></i>
                                </button>
                            </form>
                        @else
                            <button type="button" onclick="window.location='{{ url("/checkout") }}'"
                                class="mt-10 flex flex-grow items-center justify-center rounded-md border border-transparent bg-blue-700 px-8 py-3 text-base font-medium text-white hover:bg-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:outline-hidden">
                                Checkout
                            </button>
                            <button type="button" onclick="window.location='{{ url("/cart") }}'"
                                class="mt-10 flex items-center justify-center rounded-md border border-gray-300 bg-white px-6 py-6 text-base font-medium text-gray-700 hover:bg-gray-200 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:outline-hidden">
                                <i class="fas fa-shopping-cart fa-lg"></i> 
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @php
            $categoryNeedsSize = $product->category;
        @endphp
    @endforeach
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle size selection
            document.querySelectorAll('.size-label').forEach(label => {
                label.addEventListener('click', function() {
                    const productId = this.dataset.productId;
                    const size = this.dataset.size;
                    const radio = this.querySelector('.size-radio');
                    
                    // Check the radio button
                    if (radio) {
                        radio.checked = true;
                        
                        // Update visual state
                        document.querySelectorAll(`input[name="size-choice-${productId}"]`).forEach(r => {
                            r.closest('label').classList.remove('ring-2', 'ring-blue-500');
                        });
                        this.classList.add('ring-2', 'ring-blue-500');
                        
                        // Handle size selection logic
                        handleSizeSelection(radio);
                    }
                });
            });

            // Handle quantity buttons for each product
            document.querySelectorAll('.decreaseBtn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const productId = this.id.split('-')[1];
                    const quantityInput = document.getElementById(`quantityInput-${productId}`);
                    const errorMsg = document.getElementById(`errorMsg-${productId}`);
                    
                    let value = parseInt(quantityInput.value, 10);
                    value = Math.max(1, value - 1); // Don't allow going below 1
                    quantityInput.value = value;
                    
                    if (value >= 1) {
                        errorMsg.classList.add('hidden');
                    }
                    
                    // Update form quantity
                    updateFormQuantity(productId, value);
                });
            });

            document.querySelectorAll('.increaseBtn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const productId = this.id.split('-')[1];
                    const quantityInput = document.getElementById(`quantityInput-${productId}`);
                    const errorMsg = document.getElementById(`errorMsg-${productId}`);
                    const stokContainer = document.querySelector(`.stok[data-product-id="${productId}"]`);
                    
                    let value = parseInt(quantityInput.value, 10);
                    
                    // Check available stock
                    if (stokContainer) {
                        const availableStock = parseInt(stokContainer.querySelector('.selected-quantity').value, 10);
                        if (value < availableStock) {
                            value = value + 1;
                            quantityInput.value = value;
                            errorMsg.classList.add('hidden');
                            updateFormQuantity(productId, value);
                        } else {
                            // Show stock limit error
                            errorMsg.textContent = `Stok tidak mencukupi (maksimal ${availableStock})`;
                            errorMsg.classList.remove('hidden');
                        }
                    } else {
                        value = value + 1;
                        quantityInput.value = value;
                        updateFormQuantity(productId, value);
                    }
                });
            });

            // Handle quantity input validation
            document.querySelectorAll('.quantityInput').forEach(input => {
                input.addEventListener('input', function(e) {
                    const productId = this.id.split('-')[1];
                    const errorMsg = document.getElementById(`errorMsg-${productId}`);
                    const value = e.target.value;
                    
                    if (value === '' || /^\d+$/.test(value)) {
                        const intValue = parseInt(value, 10);
                        if (isNaN(intValue) || intValue <= 0) {
                            errorMsg.textContent = 'Tidak boleh 0';
                            errorMsg.classList.remove('hidden');
                        } else {
                            errorMsg.classList.add('hidden');
                            updateFormQuantity(productId, intValue);
                        }
                    } else {
                        e.target.value = 1;
                        errorMsg.textContent = 'Hanya angka yang diperbolehkan';
                        errorMsg.classList.remove('hidden');
                    }
                });
            });

            // Handle checkout form submission
            document.querySelectorAll('.checkoutForm').forEach(form => {
                form.addEventListener('submit', function (e) {
                    const productId = this.dataset.productId;
                    const selectedSizeRadio = document.querySelector(`input[name="size-choice-${productId}"]:checked`);
                    const quantityInput = document.getElementById(`quantityInput-${productId}`);
                    const quantity = parseInt(quantityInput?.value) || 1;
                    const categoryNeedsSize = this.dataset.category;

                    // Validate size for categories that need it
                    if (!selectedSizeRadio && (categoryNeedsSize === 'Men' || categoryNeedsSize === 'Women')) {
                        e.preventDefault();
                        alert('Please select a size');
                        return false;
                    }

                    // Validate quantity
                    if (isNaN(quantity) || quantity < 1) {
                        e.preventDefault();
                        alert('Please enter a valid quantity');
                        return false;
                    }

                    // Update form inputs before submission
                    const formQuantityInput = this.querySelector('.form-quantity');
                    if (formQuantityInput) {
                        formQuantityInput.value = quantity;
                    }

                    const formSizeInput = this.querySelector('.form-size');
                    if (formSizeInput && selectedSizeRadio) {
                        formSizeInput.value = selectedSizeRadio.value;
                    }

                    // Debug: Log values being sent
                    console.log('Submitting checkout form with:', {
                        productId: productId,
                        size: selectedSizeRadio ? selectedSizeRadio.value : 'No size selected',
                        quantity: quantity,
                        category: categoryNeedsSize
                    });
                });
            });

            // Form Add To Cart handler
            document.querySelectorAll('.addToCartForm').forEach(form => {
                form.addEventListener('submit', function(e) {
                    const productId = this.dataset.productId;
                    const selectedSizeRadio = document.querySelector(`input[name="size-choice-${productId}"]:checked`);
                    const quantityInput = document.getElementById(`quantityInput-${productId}`);
                    const quantity = parseInt(quantityInput.value) || 1;
                    const categoryNeedsSize = this.dataset.category;
                    
                    // Validate size for categories that need it
                    if (!selectedSizeRadio && (categoryNeedsSize === 'Men' || categoryNeedsSize === 'Women')) {
                        e.preventDefault();
                        alert('Please select a size');
                        return false;
                    }
                    
                    // Validate quantity
                    if (isNaN(quantity) || quantity < 1) {
                        e.preventDefault();
                        alert('Please enter a valid quantity');
                        return false;
                    }
                    
                    // Update form inputs before submission
                    const formQuantityInput = this.querySelector('.form-quantity');
                    if (formQuantityInput) {
                        formQuantityInput.value = quantity;
                    }
                    
                    const formSizeInput = this.querySelector('.form-size');
                    if (formSizeInput && selectedSizeRadio) {
                        formSizeInput.value = selectedSizeRadio.value;
                    }
                    
                    // Debug: Log values being sent
                    console.log('Submitting form with:', {
                        productId: productId,
                        size: selectedSizeRadio ? selectedSizeRadio.value : 'No size selected',
                        quantity: quantity,
                        category: categoryNeedsSize
                    });
                });
            });
        });

        // Helper function to handle size selection
        function handleSizeSelection(radioElement) {
            const size = radioElement.dataset.size;
            const quantity = radioElement.dataset.quantity;
            const productId = radioElement.dataset.productId;

            // Update the form's hidden size input
            const form = document.querySelector(`#addToCartForm-${productId}`);
            if (form) {
                const formSizeInput = form.querySelector('.form-size');
                if (formSizeInput) {
                    formSizeInput.value = size;
                }
            }

            // Update stock display
            const stokContainer = document.querySelector(`.stok[data-product-id="${productId}"]`);
            if (!stokContainer) return;

            const quantityBox = stokContainer.querySelector('.quantity-display');
            const hiddenQuantityInput = stokContainer.querySelector('.selected-quantity');

            if (quantityBox) {
                if (parseInt(quantity) === 0) {
                    quantityBox.innerHTML = 'Stok: <span class="text-red-500">Habis</span>';
                } else {
                    quantityBox.innerHTML = `Stok: <span class="text-gray-500">${quantity}</span>`;
                }
            }

            if (hiddenQuantityInput) {
                hiddenQuantityInput.value = quantity;
            }
        }

        // Helper function to update form quantity
        function updateFormQuantity(productId, quantity) {
            const form = document.querySelector(`#addToCartForm-${productId}`);
            if (form) {
                const formQuantityInput = form.querySelector('.form-quantity');
                if (formQuantityInput) {
                    formQuantityInput.value = quantity;
                }
            }
        }
    </script>
</x-layout>