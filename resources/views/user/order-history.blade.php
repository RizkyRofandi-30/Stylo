<x-user-components.layout>
    {{-- Order Progress Start --}}
    <div class="container mx-auto px-4 py-8 max-w-7xl">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Order Progress</h1>
        </div>
        {{-- Progress order Start --}}
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
        {{-- Progress order end --}}

        <!-- Step indicators with connecting lines -->
        <div class="flex flex-col sm:flex-row items-center sm:justify-center w-full">
            @foreach ($steps as $step => $label)
                <div class="flex sm:flex-col flex-row items-center sm:relative flex-1 w-full sm:w-auto mb-4 sm:mb-0">
                    <!-- Step number circle -->
                    <div
                        class="{{ $currentStep >= $step ? 'bg-blue-600 text-white' : 'bg-gray-300 text-gray-700' }}
                    w-10 h-10 flex items-center justify-center rounded-full z-10 font-medium">
                        {{ $step }}
                    </div>

                    <!-- Step label -->
                    <span
                        class="sm:mt-2 sm:text-sm text-xs ml-3 sm:ml-0 {{ $currentStep >= $step ? 'text-blue-600 font-medium' : 'text-gray-500' }}">
                        {{ $label }}
                    </span>

                    <!-- Connecting line (not for the last step) -->
                    @if ($step < count($steps))
                        <div
                            class="sm:absolute sm:top-5 sm:left-1/2 sm:w-full sm:h-1 sm:block hidden 
                        {{ $currentStep > $step ? 'bg-blue-600' : ($currentStep == $step ? 'bg-blue-300' : 'bg-gray-300') }}">
                        </div>

                        <!-- Mobile vertical line -->
                        <div
                            class="sm:hidden h-4 w-1 mx-auto bg-gray-300
                        {{ $currentStep > $step ? 'bg-blue-600' : ($currentStep == $step ? 'bg-blue-300' : 'bg-gray-300') }}">
                        </div>
                    @endif
                </div>
            @endforeach
        </div>


        <div class="space-y-4 mt-4">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 pt-2 transition-all hover:shadow-md">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mt-4">
                    <div class="flex items-center gap-4">
                        <div class="h-16 w-16 bg-blue-50 rounded-lg flex items-center justify-center">
                            <img src="{{ asset('assets/images/accessories-04.jpeg') }}" alt="Product"
                                class="h-12 w-12 object-cover rounded">
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Order #1234</p>
                            <p class="font-semibold text-gray-800">Nike Air Max 2023</p>
                            <p class="text-sm text-gray-500">Placed on July 12, 2023</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                        <div class="text-right">
                            <p class="font-semibold text-gray-800">$299.99</p>
                            <p class="text-sm text-gray-500">2 items</p>
                        </div>
                        <div class="px-4 py-2 bg-green-50 rounded-full">
                            <p class="text-sm text-green-600 font-medium">Delivered</p>
                        </div>
                    </div>
                </div>
                <!-- ***** Section Devider ***** -->
                <div class="mx-auto h-1 bg-gray-100 rounded-full m-4"></div>

                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="h-16 w-16 bg-blue-50 rounded-lg flex items-center justify-center">
                            <img src="{{ asset('assets/images/accessories-02.jpeg') }}" alt="Product"
                                class="h-12 w-12 object-cover rounded">
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Order #1235</p>
                            <p class="font-semibold text-gray-800">Smart Watch Pro</p>
                            <p class="text-sm text-gray-500">Placed on July 10, 2023</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                        <div class="text-right">
                            <p class="font-semibold text-gray-800">$199.99</p>
                            <p class="text-sm text-gray-500">1 item</p>
                        </div>
                        <div class="px-4 py-2 bg-blue-50 rounded-full">
                            <p class="text-sm text-blue-600 font-medium">In Transit</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 transition-all hover:shadow-md">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="h-16 w-16 bg-blue-50 rounded-lg flex items-center justify-center">
                            <img src="{{ asset('assets/images/accessories-02.jpeg') }}" alt="Product"
                                class="h-12 w-12 object-cover rounded">
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Order #1235</p>
                            <p class="font-semibold text-gray-800">Smart Watch Pro</p>
                            <p class="text-sm text-gray-500">Placed on July 10, 2023</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                        <div class="text-right">
                            <p class="font-semibold text-gray-800">$199.99</p>
                            <p class="text-sm text-gray-500">1 item</p>
                        </div>
                        <div class="px-4 py-2 bg-blue-50 rounded-full">
                            <p class="text-sm text-blue-600 font-medium">In Transit</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 transition-all hover:shadow-md">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="h-16 w-16 bg-blue-50 rounded-lg flex items-center justify-center">
                            <img src="{{ asset('assets/images/accessories-03.png') }}" alt="Product"
                                class="h-12 w-12 object-cover rounded">
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Order #1236</p>
                            <p class="font-semibold text-gray-800">Smart Speaker</p>
                            <p class="text-sm text-gray-500">Placed on July 8, 2023</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                        <div class="text-right">
                            <p class="font-semibold text-gray-800">$149.99</p>
                            <p class="text-sm text-gray-500">1 item</p>
                        </div>
                        <div class="px-4 py-2 bg-gray-50 rounded-full">
                            <p class="text-sm text-gray-600 font-medium">Processing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Order Progress end --}}

    {{-- Order history Start --}}
    <div class="container mx-auto px-4 py-8 max-w-7xl">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Order History</h1>
            <div class="flex flex-col sm:flex-row gap-2 sm:gap-4">
                <div class="relative flex-grow">
                    <input type="text" placeholder="Search orders..."
                        class="w-full pl-5 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="bx bx-search absolute left-3 top-3.5 text-gray-400"></i>
                </div>
                <select
                    class="border border-gray-200 rounded-lg pl-5 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full sm:w-auto">
                    <option>Sort by date</option>
                    <option>Newest first</option>
                    <option>Oldest first</option>
                </select>
            </div>
        </div>
        <div class="space-y-4">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 pt-2 transition-all hover:shadow-md">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mt-4">
                    <div class="flex items-center gap-4">
                        <div class="h-16 w-16 bg-blue-50 rounded-lg flex items-center justify-center">
                            <img src="{{ asset('assets/images/accessories-04.jpeg') }}" alt="Product"
                                class="h-12 w-12 object-cover rounded">
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Order #1234</p>
                            <p class="font-semibold text-gray-800">Nike Air Max 2023</p>
                            <p class="text-sm text-gray-500">Placed on July 12, 2023</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                        <div class="text-right">
                            <p class="font-semibold text-gray-800">$299.99</p>
                            <p class="text-sm text-gray-500">2 items</p>
                        </div>
                        <div class="px-4 py-2 bg-green-50 rounded-full">
                            <p class="text-sm text-green-600 font-medium">Delivered</p>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
                                aria-label="Buy Again">Buy Again</button>
                            <button
                                class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors"
                                aria-label="View Details">View Details</button>
                        </div>
                    </div>
                </div>
                <!-- ***** Section Devider ***** -->
                <div class="mx-auto h-1 bg-gray-100 rounded-full m-4"></div>

                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="h-16 w-16 bg-blue-50 rounded-lg flex items-center justify-center">
                            <img src="{{ asset('assets/images/accessories-02.jpeg') }}" alt="Product"
                                class="h-12 w-12 object-cover rounded">
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Order #1235</p>
                            <p class="font-semibold text-gray-800">Smart Watch Pro</p>
                            <p class="text-sm text-gray-500">Placed on July 10, 2023</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                        <div class="text-right">
                            <p class="font-semibold text-gray-800">$199.99</p>
                            <p class="text-sm text-gray-500">1 item</p>
                        </div>
                        <div class="px-4 py-2 bg-blue-50 rounded-full">
                            <p class="text-sm text-blue-600 font-medium">In Transit</p>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
                                aria-label="Buy Again">Buy Again</button>
                            <button
                                class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors"
                                aria-label="View Details">View Details</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 transition-all hover:shadow-md">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="h-16 w-16 bg-blue-50 rounded-lg flex items-center justify-center">
                            <img src="{{ asset('assets/images/accessories-02.jpeg') }}" alt="Product"
                                class="h-12 w-12 object-cover rounded">
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Order #1235</p>
                            <p class="font-semibold text-gray-800">Smart Watch Pro</p>
                            <p class="text-sm text-gray-500">Placed on July 10, 2023</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                        <div class="text-right">
                            <p class="font-semibold text-gray-800">$199.99</p>
                            <p class="text-sm text-gray-500">1 item</p>
                        </div>
                        <div class="px-4 py-2 bg-blue-50 rounded-full">
                            <p class="text-sm text-blue-600 font-medium">In Transit</p>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
                                aria-label="Buy Again">Buy Again</button>
                            <button
                                class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors"
                                aria-label="View Details">View Details</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 transition-all hover:shadow-md">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="h-16 w-16 bg-blue-50 rounded-lg flex items-center justify-center">
                            <img src="{{ asset('assets/images/accessories-03.png') }}" alt="Product"
                                class="h-12 w-12 object-cover rounded">
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Order #1236</p>
                            <p class="font-semibold text-gray-800">Smart Speaker</p>
                            <p class="text-sm text-gray-500">Placed on July 8, 2023</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                        <div class="text-right">
                            <p class="font-semibold text-gray-800">$149.99</p>
                            <p class="text-sm text-gray-500">1 item</p>
                        </div>
                        <div class="px-4 py-2 bg-gray-50 rounded-full">
                            <p class="text-sm text-gray-600 font-medium">Processing</p>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
                                aria-label="Buy Again">Buy Again</button>
                            <button
                                class="px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors"
                                aria-label="View Details">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 flex justify-center">
            <button class="px-6 py-3 text-blue-600 font-medium hover:bg-blue-50 rounded-lg transition-colors">Load
                More
                Orders</button>
        </div>
    </div>
    {{-- Order history end --}}
</x-user-components.layout>
