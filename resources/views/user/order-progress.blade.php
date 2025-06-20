<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    @if ($orders->isNotEmpty())        
        {{-- Order Progress Start --}}
        <div class="container mx-auto px-4 py-8 max-w-7xl">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold text-gray-800">My order</h1>
            </div>
            <div class="space-y-4 mt-4">
                @foreach ($orders as $order)
                    @foreach ($order->paymentItems as $item)
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 transition-all hover:shadow-md">
                            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                                <div class="flex items-center gap-4">
                                    <div class="h-16 w-16 bg-blue-50 rounded-lg flex items-center justify-center">
                                        <img src="{{ asset('storage/' . $item->product_img) }}" alt="Product"
                                            class="h-12 w-12 object-cover rounded">
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Pesanan dibuat {{ $order->created_at->format('F j, Y') }}</p>
                                        <p class="font-semibold text-gray-800">{{ $item->product_name }}</p>
                                        <p class="text-sm text-gray-500">Size: {{ $item->size }}  </p>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                                    <div class="text-right">
                                        <p class="font-semibold text-gray-800">Rp {{ number_format($item->price_item * $item->quantity, 0, ',', '.') }}</p>
                                        <p class="text-sm text-gray-500">{{ $item->quantity }} item{{ $item->quantity > 1 ? 's' : '' }}</p>
                                    </div>
                                    <div class="px-4 py-2 rounded-full {{ $item->color_class }}">
                                        <p class="text-sm font-medium">
                                            {{ str_replace('_', ' ', ucfirst($item->packet_status)) }}
                                        </p>                              
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        {{-- Order Progress end --}}
    @else
        <div class="container mx-auto px-4 py-8 max-w-7xl">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold text-gray-800">Order Progress</h1>
            </div>
            <div class="space-y-4 mt-4">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-12 text-center">
                    <div class="max-w-md mx-auto">
                        <div class="mb-6">
                            <svg class="w-16 h-16 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">No Orders Yet</h3>
                        <p class="text-gray-500 mb-6">You haven't placed any orders yet. Start shopping to see your order progress here.
                        </p>
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            Start Shopping
                        </a>
                    </div>  
                </div>
            </div>
        </div>
    @endif
</x-layout>
