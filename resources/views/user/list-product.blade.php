<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    <div class="bg-white mt-8">
        <h2 class="text-3xl font-bold text-gray-800 text-center justify-center">List of Our Products </h2>
        <p class="text-gray-600 mt-2 text-center justify-center px-4">Details to details is what makes Hexashop
            different
            from the other themes.
        </p>
        <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    <!-- Product Card -->
                    <a href="{{ route('user.single_product', ['id' => $product->product_id]) }}" class="block">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden transition-all duration-300 hover:-translate-y-3 group">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $product->product_img) }}" alt="Air Force 1 X"
                                    class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                                <div
                                    class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                </div>
                            </div>
                            <div class="p-4">
                                <h4 class="text-xl font-bold">{{ $product->product_name}}</h4>
                                <span class="text-gray-400 font-bold">Rp {{ number_format($product->product_price, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @if ($products->hasPages())
            <nav aria-label="Page navigation example" class="mb-8">
                <ul class="flex items-center -space-x-px h-10 text-base text-center justify-center ">
                    <li>
                        @if ($products->onFirstPage())
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 cursor-not-allowed">
                                <span class="sr-only">Previous</span>
                                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 1 1 5l4 4" />
                                </svg>
                            </a>
                        @else
                            <a href="{{ $products->previousPageUrl() }}"
                                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                                <span class="sr-only">Previous</span>
                                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 1 1 5l4 4" />
                                </svg>
                            </a>
                        @endif
                    </li>
                    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                        @if ($page == $products->currentPage())
                            <li>
                                <a href="{{ $url }}" aria-current="page"
                                    class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-slate-600 border border-slate-300 bg-slate-200 hover:bg-slate-100 hover:text-slate-700">{{ $page }}</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}"
                                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                    <li>
                        @if ($products->hasMorePages())
                            <a href="{{ $products->nextPageUrl() }}"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                                <span class="sr-only">Next</span>
                                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        @else
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 cursor-not-allowed">
                                <span class="sr-only">Next</span>
                                <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        @endif
                    </li>
                </ul>
            </nav>
        @endif
    </div>
</x-layout>
