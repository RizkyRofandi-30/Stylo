<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    @if ($carts && $carts->items->isNotEmpty())  
        <section class="bg-white py-4 antialiased md:py-8">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Shopping Cart</h2>
                <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                    <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                        <div class="space-y-6 mb-2">
                            @foreach ($carts->items as $item)
                                @php
        $cart_id = $item->cart_id;
        $size = $item->size;
                                @endphp    
                                <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm md:p-6">
                                    <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                        <img class="h-20 w-20 object-cover" src="{{ asset('storage/' . $item->product->product_img) }}"
                                            alt="imac image" />
                                        <label for="counter-input" class="sr-only">Choose quantity:</label>
                                        <div class="flex items-center justify-between md:order-3 md:justify-end">
                                            <div class="flex items-center" data-item-wrapper data-price="{{ $item->product->product_price }}">
                                                <button type="button"
                                                    class="decrement-btn inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                                    <!-- minus icon -->
                                                    <svg class="h-2.5 w-2.5 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                    </svg>
                                                </button>

                                                <input type="text"
                                                    class="quantity-input w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0"
                                                    data-price="{{ $item->product->product_price }}"
                                                    data-original="{{ $item->quantity }}"
                                                    value="{{ $item->quantity }}"
                                                    required />

                                                <button type="button"
                                                    class="increment-btn inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                                    <!-- plus icon -->
                                                    <svg class="h-2.5 w-2.5 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M9 1v16M1 9h16" />
                                                    </svg>
                                                </button>
                                                <div class="text-end md:order-4 md:w-32">
                                                    <p class="item-total text-base font-bold text-gray-900">
                                                        Rp {{ number_format($item->product->product_price * $item->quantity, 0, ',', '.') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                            <p class="text-base font-medium text-gray-900">
                                                {{ $item->product->product_name}}
                                            </p>

                                            <div class="flex items-center gap-4">
                                                <p class="-mt-1">Size: {{ $size ?? 'N/A' }} </p>
                                                <form action="{{ route('user.delete_item_cart', ['user_id' => Auth::user()->id, 'product_id' => $item->product_id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <!-- Only include size if your item has it -->
                                                    @if($item->size)
                                                        <input type="hidden" name="size" value="{{ $item->size }}">
                                                    @endif

                                                    <button type="submit" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline">
                                                        <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M6 18 17.94 6M18 18 6.06 6" />
                                                        </svg>
                                                        Remove
                                                    </button>                                         
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                        <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                            <div class="space-y-4">
                                <dl class="flex items-center justify-between gap-4 pt-2">
                                    <dt class="text-base font-bold text-gray-900">Total</dt>
                                    <dd id="total-price-display" class="text-base font-bold text-gray-900">Rp {{ number_format($totalPrice, 0, ',', '.') }}</dd>
                                </dl>
                            </div>
                            <form method="POST"
                                action="{{ route('user.post_checkout_cart', ['user_id' => Auth::user()->id, 'cart_id' => $cart_id]) }}"
                                enctype="multipart/form-data"
                                id="checkoutCartForm-{{ $cart_id }}"
                                class="checkoutCartForm"
                                data-cart-id="{{ $cart_id }}">
                                <input type="hidden" name="cart_id" value="{{ $cart_id }}">
                                <input type="hidden" name="quantity" id="form-quantity-{{ $item->product->product_id }}" value="{{ $item->quantity }}">
                                <input type="hidden" name="size" value="{{ $size }}">
                                <input type="hidden" name="product_id" value="{{ $item->product->product_id }}">
                                @csrf

                                <button type="submit"
                                    class="flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                    Checkout 
                                </button>
                            </form>
                            <div class="flex items-center justify-center gap-2">
                                <span class="text-sm font-normal text-gray-500"> or </span>
                                <a href="{{ url('/') }}" title=""
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
    @else
        {{-- Content if there is no cart_items --}}
        <section class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 py-12">
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
                    <a href="{{ url('/') }}"
                        class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-200 shadow-sm">
                        <i class="fa-solid fa-arrow-left mr-2 -ml-2"></i>
                        Continue Shopping
                    </a>

                    <a href="{{ url('/list-product') }}"
                        class="inline-flex items-center px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-50 transition-colors duration-200">
                        <i class="fas fa-th-large mr-2 -ml-2"></i>
                        Explore All Product
                    </a>
                </div>
            </div>
        </section>
    @endif

    <script>
        function formatRupiah(number) {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }).format(number);
            }
        function updateTotals() {
            let total = 0;

            document.querySelectorAll('[data-item-wrapper]').forEach(wrapper => {
                const input = wrapper.querySelector('.quantity-input');
                const quantity = parseInt(input.value) || 0;
                const price = parseInt(input.dataset.price) || 0;
                const itemTotal = quantity * price;

                // Update per-item total display
                const itemTotalEl = wrapper.querySelector('.item-total');
                if (itemTotalEl) {
                    itemTotalEl.textContent = formatRupiah(itemTotal);
                }

                total += itemTotal;
            });

            // Update overall total display
            document.getElementById('total-price-display').textContent = formatRupiah(total);
        }

        document.querySelectorAll('.increment-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const wrapper = btn.closest('[data-item-wrapper]');
                const input = wrapper.querySelector('.quantity-input');
                input.value = parseInt(input.value) + 1;
                updateTotals();
            });
        });

        document.querySelectorAll('.decrement-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const wrapper = btn.closest('[data-item-wrapper]');
                const input = wrapper.querySelector('.quantity-input');
                input.value = Math.max(1, parseInt(input.value) - 1);
                updateTotals();
            });
        });

        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', function () {
                const originalQty = parseInt(this.dataset.original);
                const currentQty = parseInt(this.value);

                if (currentQty !== originalQty) {
                    const wrapper = this.closest('[data-item-wrapper]');
                    const productId = this.closest('[data-item-wrapper]').querySelector('.quantity-input').dataset.productId;
                    const cartForm = document.querySelector(`#checkoutCartForm-${wrapper.dataset.cartId}`);

                    // Update hidden quantity input in form
                    const hiddenQtyInput = cartForm.querySelector(`#form-quantity-${productId}`);
                    if (hiddenQtyInput) hiddenQtyInput.value = currentQty;

                    cartForm.submit(); // Auto-submit
                }
            });
        });

        // Initial call
        updateTotals();
    </script>
</x-layout>