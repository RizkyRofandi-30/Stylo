<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    @if($checkoutItems->isNotEmpty())
        <div class="w-full px-4 mt-8">
            <div class="max-w-screen-md mx-auto flex flex-col gap-8">
                {{-- Left Column - Order Summary --}}
                <div class="bg-gray-50 rounded-md p-4 md:p-8 flex-1">
                    <h2 class="text-[1.2rem] text-gray-700 font-semibold mb-6">Your order</h2>
                    <div class="border border-gray-200 rounded-md">
                        @foreach ($checkoutItems as $item)
                            {{-- Item \--}}
                            <div class="flex flex-col md:flex-row md:items-center gap-4 p-4">
                                <div class="border relative border-gray-200 w-max rounded-md bg-white">
                                    <img src="{{ asset('storage/' . $item['product']->product_img) }}" alt="Nike Air Zoom Pegasus 39"
                                        class="w-20 h-20 object-cover rounded" />
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-medium">{{ $item['product']->product_name }}</h3>
                                    <div class="flex items-center gap-[30px] mt-2">
                                        <p class="text-sm text-gray-500">Size: <b class="text-gray-800">{{ $item['size'] ?? 'N/A' }}</b></p>
                                        <p class="text-sm text-gray-500">Jumlah: <b class="text-gray-800">{{ $item['quantity'] }}</b></p>
                                    </div>
                                </div>
                                <span class="font-medium">Rp {{ number_format($item['product']->product_price * $item['quantity'], 0, ',', '.') }}</span>
                            </div>
                        @endforeach
                    </div>


                    {{-- Total Summary --}}
                    <div class="flex justify-between border-t border-gray-200 pt-5 font-medium">
                        <span>Total</span>
                        <span class="text-[1rem] font-medium text-gray-800">Rp {{ number_format($totalPrice, 0, ',', '.') }}</span>
                    </div>
                </div>

                {{-- Right Column - Checkout Form --}}
                <div class="md:px-8 flex-1">
                    <form method="POST" action="{{ route('user.postPayment', Auth::user()->id) }}" class="space-y-6" id="checkout-form"
                        enctype="multipart/form-data">
                        @csrf
                        @foreach ($checkoutItems as $index => $item)
                            <input type="hidden" name="items[{{ $index }}][product_id]" value="{{ $item['product']->id }}">
                            <input type="hidden" name="items[{{ $index }}][size]" value="{{ $item['size'] }}">
                            <input type="hidden" name="items[{{ $index }}][quantity]" value="{{ $item['quantity'] }}">
                            <input type="hidden" name="items[{{ $index }}][price]" value="{{ $item['product']->product_price }}">
                        @endforeach
                        <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                        <div>
                            <label for="email" class="text-[1rem] font-medium text-gray-800 mb-1">Email</label>
                            <input type="email" id="email" name="email" value="{{ Auth::user()->email }}"
                                class="w-full border rounded px-3 py-2 border-gray-200 hover:border-blue-700 outline-none mt-0.5" />
                        </div>
                        <div>
                            <label for="phone" class="text-[1rem] font-medium text-gray-800 mb-1">Phone number</label>
                            <input type="tel" name="phone" id="phone" value="{{ Auth::user()->phone }}"
                                class="w-full border rounded px-3 py-2 border-gray-200 outline-none hover:border-blue-700 mt-0.5" />
                        </div>
                        <div>
                            <label for="address" class="text-[1rem] font-medium text-gray-800 mb-1">Address</label>
                            <textarea name="address" id="address" rows="4"
                                class="w-full border rounded px-3 py-2 border-gray-200 outline-none hover:border-blue-700 mt-0.5">{{ Auth::user()->address }}</textarea>
                        </div>
                        <div>
                            <label for="postal_code" class="text-[1rem] font-medium text-gray-800 mb-1">Postal Code</label>
                            <input type="text" id="postal_code" name="postal_code" value="{{ Auth::user()->postal_code }}"
                                class="w-full border rounded px-3 py-2 border-gray-200 outline-none hover:border-blue-500" />
                        </div>
                        <button type="button" id="pay-button"
                            class="w-full bg-blue-700 text-white py-3 rounded-lg hover:border-blue-700 mb-2">
                            Bayar
                        </button>           
                    </form>
                </div>
            </div>
        </div>
    @else
        <p>Tidak ada item di checkout</p>
    @endif
    
    
    <script type="text/javascript">
        document.getElementById('pay-button').addEventListener('click', function (e) {
            // Disable button to prevent double click
            e.target.disabled = true;

            window.snap.pay('{{ $paymentToken }}', {
                onSuccess: function (result) {
                    // Optional: Add payment details to the form as hidden inputs
                    var form = document.getElementById('checkout-form');
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'transaction_id';
                    input.value = result.transaction_id;
                    form.appendChild(input);

                    // Submit form after successful payment
                    form.submit();
                },
                onPending: function (result) {
                    window.location.href = '/payment/pending';
                },
                onError: function (result) {
                    window.location.href = '/payment/error';
                },
                onClose: function () {
                    // Re-enable button if payment popup is closed without completing
                    e.target.disabled = false;
                }
            });
        });
    </script>
</x-layout>




