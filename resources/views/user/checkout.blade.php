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
                    <form method="#" action="#" class="space-y-6">
                        @csrf
                        <div>
                            <label for="email" class="text-[1rem] font-medium text-gray-800 mb-1">Email</label>
                            <input type="email" id="email" name="email" placeholder="{{ Auth::user()->email }}"
                                class="w-full border rounded px-3 py-2 border-gray-200 hover:border-blue-700 outline-none mt-0.5" />
                        </div>

                        <div>
                            <label for="phone" class="text-[1rem] font-medium text-gray-800 mb-1">Phone number</label>
                            <input type="tel" name="phone" id="phone" placeholder="{{ Auth::user()->phone }}"
                                class="w-full border rounded px-3 py-2 border-gray-200 outline-none hover:border-blue-700 mt-0.5" />
                        </div>

                        <div>
                            <label for="address" class="text-[1rem] font-medium text-gray-800 mb-1">Address</label>
                            <textarea name="address" id="address" placeholder="{{ Auth::user()->address }}" rows="4"
                                class="w-full border rounded px-3 py-2 border-gray-200 outline-none hover:border-blue-700 mt-0.5"></textarea>
                        </div>
                        <div>
                            <label for="zipCode" class="text-[1rem] font-medium text-gray-800 mb-1">Zip code</label>
                            <input type="text" id="zipCode" name="zip_code" placeholder="{{ Auth::user()->postal_code }}"
                                class="w-full border rounded px-3 py-2 border-gray-200 outline-none hover:border-blue-500" />
                        </div>
                        <button type="submit" class="w-full bg-blue-700 text-white py-3 rounded-lg hover:border-blue-700 mb-2">
                            Bayar Rp {{ number_format($totalPrice, 0, ',', '.') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @else
        <p>Tidak ada item di checkout</p>
    @endif

</x-layout>




