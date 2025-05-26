<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    <div class="w-full px-4 mt-8">
        <div class="max-w-screen-md mx-auto flex flex-col gap-8">
            {{-- Left Column - Order Summary --}}
            <div class="bg-gray-50 rounded-md p-4 md:p-8 flex-1">
                <h2 class="text-[1.2rem] text-gray-700 font-semibold mb-6">Your order</h2>
                <div class="border border-gray-200 rounded-md">
                    {{-- Item 1 --}}
                    <div class="flex flex-col md:flex-row md:items-center gap-4 p-4">
                        <div class="border relative border-gray-200 w-max rounded-md bg-white">
                            <img src="https://i.ibb.co.com/x6fq6nC/Rectangle-516.png" alt="Nike Air Zoom Pegasus 39"
                                class="w-20 h-20 object-cover rounded" />
                        </div>
                        <div class="flex-1">
                            <h3 class="font-medium">Nike Air Zoom Pegasus 39</h3>
                            <div class="flex items-center gap-[30px] mt-2">
                                <p class="text-sm text-gray-500">Size: <b class="text-gray-800">XL</b></p>
                                <p class="text-sm text-gray-500">Color: <b class="text-gray-800">Blue</b></p>
                                <p class="text-sm text-gray-500">Jumlah: <b class="text-gray-800">100</b></p>
                            </div>
                        </div>
                        <span class="font-medium">$28.00</span>
                    </div>
            
                    {{-- Item 2 --}}
                    <div class="flex flex-col md:flex-row md:items-center gap-4 border-t p-4 border-gray-200">
                        <div class="border relative border-gray-200 w-max rounded-md bg-white">
                            <img src="https://i.ibb.co.com/VJKrBt5/Rectangle-519.png" alt="Nike React Pegasus Trail 4"
                                class="w-20 h-20 object-cover rounded" />
                        </div>
                        <div class="flex-1">
                            <h3 class="font-medium">Nike React Pegasus Trail 4</h3>
                            <div class="flex items-center gap-[30px] mt-2">
                                <p class="text-sm text-gray-500">Size: <b class="text-gray-800">XL</b></p>
                                <p class="text-sm text-gray-500">Color: <b class="text-gray-800">Blue</b></p>
                                <p class="text-sm text-gray-500">Jumlah: <b class="text-gray-800">100</b></p>
                            </div>
                        </div>
                        <span class="font-medium">$28.00</span>
                    </div>
                </div>
            
            
                {{-- Total Summary --}}
                <div class="flex justify-between border-t border-gray-200 pt-5 font-medium">
                    <span>Total</span>
                    <span class="text-[1rem] font-medium text-gray-800">$51.00</span>
                </div>
            </div>
            
            {{-- Right Column - Checkout Form --}}
            <div class="md:px-8 flex-1">
                <form method="#" action="#" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="text-[1rem] font-medium text-gray-800 mb-1">Email</label>
                        <input type="email" id="email" name="email" placeholder="joylawson@gmail.com"
                            class="w-full border rounded px-3 py-2 border-gray-200 hover:border-blue-700 outline-none mt-0.5" />
                    </div>
            
                    <div>
                        <label for="phone" class="text-[1rem] font-medium text-gray-800 mb-1">Phone number</label>
                        <input type="tel" name="phone" id="phone" placeholder="(201) 830-8210"
                            class="w-full border rounded px-3 py-2 border-gray-200 outline-none hover:border-blue-700 mt-0.5" />
                    </div>
            
                    {{-- Payment Method --}}
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label class="text-[1rem] font-medium text-gray-800">Payment method</label>
                            <a href="#" class="text-blue-700 text-[0.9rem] flex items-center gap-[5px]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                                </svg> Add new
                            </a>
                        </div>
                        <div class="flex flex-col md:flex-row gap-4">
                            <label class="flex-1 flex items-center justify-between gap-2 border-gray-200 border rounded-lg p-4">
                                <div>
                                    <input type="radio" name="payment" value="card" class="form-radio" checked />
                                    <span> **** 8304</span>
                                    <div class="flex items-center gap-1 pl-5 mt-1 text-[0.9rem] text-gray-500">
                                        <p>Visa •</p><a href="#" class="hover:border-blue-700 cursor-pointer">Edit</a>
                                    </div>
                                </div>
                                <img src="https://i.ibb.co.com/NFwm4jb/Visa.png" class="w-[50px]" alt="Visa">
                            </label>
            
                            <label class="flex-1 flex items-center justify-between gap-2 border-gray-200 border rounded-lg p-4">
                                <div>
                                    <input type="radio" name="payment" value="paypal" class="form-radio" />
                                    <span> **** 8304</span>
                                    <div class="flex items-center gap-1 pl-5 mt-1 text-[0.9rem] text-gray-500">
                                        <p>Paypal •</p><a href="#" class="hover:border-blue-700 cursor-pointer">Edit</a>
                                    </div>
                                </div>
                                <img src="https://i.ibb.co.com/W3ykxd5/paypal.png" class="w-[50px]" alt="PayPal">
                            </label>
                        </div>
                    </div>
            
                    {{-- More Inputs --}}
                    <div>
                        <label for="cardHolder" class="text-[1rem] font-medium text-gray-800 mb-1">Card holder name</label>
                        <input type="text" id="cardHolder" name="card_holder" placeholder="Ex. Jane Cooper"
                            class="w-full border rounded px-3 py-2 border-gray-200 outline-none hover:border-blue-700 mt-0.5" />
                    </div>
            
                    <div>
                        <label for="address" class="text-[1rem] font-medium text-gray-800 mb-1">Address</label>
                        <textarea name="address" id="address" placeholder="Address in here"
                            class="w-full border rounded px-3 py-2 border-gray-200 outline-none hover:border-blue-700 mt-0.5"></textarea>
                    </div>
            
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="zipCode" class="text-[1rem] font-medium text-gray-800 mb-1">Zip code</label>
                            <input type="text" id="zipCode" name="zip_code" placeholder="Ex. 73923"
                                class="w-full border rounded px-3 py-2 border-gray-200 outline-none hover:border-blue-500" />
                        </div>
                        <div>
                            <label for="city" class="text-[1rem] font-medium text-gray-800 mb-1">City</label>
                            <input type="text" id="city" name="city" placeholder="Ex. New York"
                                class="w-full border rounded px-3 py-2 border-gray-200 outline-none hover:border-blue-700 mt-0.5" />
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-blue-700 text-white py-3 rounded-lg hover:border-blue-700 mb-2">
                        Pay $51.00
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-layout>




