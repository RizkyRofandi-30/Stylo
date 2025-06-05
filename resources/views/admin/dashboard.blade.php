<x-layout>
    <x-admin-components.sidebar>
        {{-- Page content --}}
        <main x-data="{ 'isProductInfoModal': false }" x-init="@if (session('isProductInfoModal')) isProductInfoModal = true; @endif" class="flex-1 overflow-y-auto p-6">
            <h2 class="text-2xl font-bold mb-4">Dashboard </h2>
            <!-- Dashboard cards -->
            <div class="grid grid-cols-1 sm:grid-cols-1 xl:grid-cols-3 lg:grid-cols-2 gap-6 p-4">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-md p-6 transition hover:shadow-lg">
                    <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left">
                        <!-- Icon -->
                        <div class="bg-green-100 p-4 rounded-md border border-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="text-green-600">
                                <path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17" />
                                <path d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9" />
                                <path d="m2 16 6 6" />
                                <circle cx="16" cy="9" r="2.9" />
                                <circle cx="6" cy="5" r="3" />
                            </svg>
                        </div>
                        <!-- Text -->
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">Total Revenue</h2>
                            <p class="text-2xl font-bold text-gray-900">Rp {{ number_format($revenue, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-md p-6 transition hover:shadow-lg">
                    <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left">
                        <!-- Icon -->
                        <div class="bg-amber-100 p-4 rounded-md border border-amber-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="text-amber-600">
                                <path
                                    d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z" />
                                <path d="m3.3 7 8.7 5 8.7-5" />
                                <path d="M12 22V12" />
                            </svg>
                        </div>
                        <!-- Text -->
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">Total Product</h2>
                            <p class="text-2xl font-bold text-gray-900">{{ $totalProducts }}</p>
                        </div>
                    </div>
                </div>
                
                {{-- Card 3 --}}
                <div class="bg-white rounded-xl shadow-md p-6 transition hover:shadow-lg">
                    <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left">
                        <!-- Icon -->
                        <div class="bg-indigo-100 p-4 rounded-md border border-indigo-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="text-indigo-600">
                                <path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z" />
                                <path d="M14 8H8" />
                                <path d="M16 12H8" />
                                <path d="M13 16H8" />
                            </svg>
                        </div>
                        <!-- Text -->
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">Order Total</h2>
                            <p class="text-2xl font-bold text-gray-900">{{ $totalItem }}</p>
                        </div>
                    </div>      
                </div>
            </div>
            <div
                class="relative flex flex-col  text-gray-700 bg-white shadow-md rounded-lg bg-clip-border p-6 mx-4  overflow-scroll">
                <div class="flex flex-col md:flex-row justify-between items-start gap-4 mb-5 mx-3">
                    <div>
                        <h3 class="text-lg font-semibold text-slate-800">Tambah Product</h3>
                    </div>
                    <div>
                        <button @click="isProductInfoModal = true"
                            class="flex items-center gap-2 px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                                <path d="M5 12h14" />
                                <path d="M12 5v14" />
                            </svg>
                            Add Product
                        </button>
                    </div>
                </div>
                <div class="w-full">
                    <table class="w-full text-left table-auto min-w-max ">
                        <thead class="text-center">
                            <tr>
                                <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">Product</p>
                                </th>
                                <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">Kategori</p>
                                </th>
                                <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">Deskripsi</p>
                                </th>
                                <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">Size</p>
                                </th>
                                <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">Action</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="hover:bg-slate-50">
                                    <td class="p-2 border-b border-slate-200">
                                        <div class="flex items-center space-x-2">
                                            <img width="33" height="33" src="{{ asset('storage/' . $product->product_img) }}" alt="product"
                                                class="w-[45px] h-[45px] object-cover rounded-full" />
                                            <div class="text-sm leading-tight">
                                                <p class="m-0 font-bold">{{ $product->product_name }}</p>
                                                <p class="m-0">Price: Rp {{ number_format($product->product_price, 0, ',', '.') }}
                                                </p>
                                                @if ($product->dataQuantities->isNotEmpty())
                                                    <p class="m-0">Total qty: {{ $product->dataQuantities->sum('quantity') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </td>

                                    <td class="p-4 border-b border-slate-200 ">
                                        <p class="block text-sm text-slate-800">{{ $product->category }}</p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200 break-words whitespace-normal">
                                        <p
                                        class="block text-sm text-slate-800 overflow-hidden text-ellipsis whitespace-nowrap max-w-[200px]">
                                        {{ $product->product_desc }}</p>
                                    </td>
                                    <td class="p-4 align-top border-b border-slate-200">
                                        <div class="space-y-3">
                                            <!-- Size Buttons -->
                                            <div class="flex flex-wrap gap-2">
                                                @if ($product->dataQuantities !== null)
                                                    @foreach ($product->dataQuantities->filter(fn($dq) => !is_null($dq) && !is_null($dq->size)) as $size)
                                                        <button
                                                            type="button"
                                                            data-size="{{ $size->size }}"
                                                            data-quantity="{{ $size->quantity }}"
                                                            data-product-id="{{ $product->id }}"
                                                            class="inline-block bg-blue-100 text-blue-800 text-xs font-medium px-3 py-1 rounded shadow hover:bg-blue-200 transition"
                                                            onclick="handleSizeClick(this)"
                                                        >
                                                            {{ $size->size }}
                                                        </button>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <!-- Quantity Display (scoped) -->
                                            @php
                                                $firstSize = $product->dataQuantities
                                                    ? $product->dataQuantities->filter(fn($dq) => !is_null($dq) && !is_null($dq->size))->first()
                                                    : null;
                                            @endphp

                                            @if ($firstSize)
                                                <div class="p-2 border rounded bg-slate-50 flex justify-between items-center">
                                                    <h3 class="text-sm font-semibold text-slate-700">
                                                        Size: <span class="selected-size">{{ $firstSize->size }}</span>
                                                    </h3>
                                                    <p class="text-xs text-slate-600 quantity-display">
                                                        Quantity Available: {{ $firstSize->quantity }}
                                                    </p>
                                                </div>

                                                <input type="hidden" name="quantity" class="selected-quantity" value="{{ $firstSize->quantity }}">
                                                <input type="hidden" name="size" class="selected-size-input" value="{{ $firstSize->size }}">
                                            @endif


                                            <!-- Hidden input for quantity and product id -->
                                            <input type="hidden" name="quantity" class="selected-quantity">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        </div>
                                    </td>                                    
                                    <td class="p-4 border-b border-slate-200 text-center">
                                        <form action="{{ route('admin.get_edit_product', $product->product_id) }}">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->product_id }}"> 
                                            <button 
                                                class="inline-block text-white bg-yellow-600 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mx-0.5"
                                                type="submit">
                                                Edit
                                            </button>
                                            <button data-modal-target="popup-modal-{{ $product->product_id }}" data-modal-toggle="popup-modal-{{ $product->product_id }}"
                                                class="inline-block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mx-0.5"
                                                type="button">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                {{-- Start Delete Modal --}}
                                <div id="popup-modal-{{ $product->product_id }}" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow-sm">
                                            <button type="button"
                                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                data-modal-hide="popup-modal-{{ $product->product_id }}">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <form action="{{ route('admin.delete_product', $product->product_id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Anda ingin Menghapus Produk ini?</h3>
                                                    <button data-modal-hide="popup-modal-{{ $product->product_id }}" type="button"
                                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-gray-700">
                                                        Tidak
                                                    </button>
                                                    <button type="submit"
                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>                          
                                </div>
                                {{-- End Delete Modal --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if ($products->hasPages())
                    <nav aria-label="Page navigation example" class="mt-4">
                        <ul class="flex items-center -space-x-px h-10 text-base text-center justify-center ">
                            <li>
                                @if ($products->onFirstPage())
                                    <a href="#"
                                        class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 cursor-not-allowed">
                                        <span class="sr-only">Previous</span>
                                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                    </a>
                                @else
                                    <a href="{{ $products->previousPageUrl() }}"
                                        class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                                        <span class="sr-only">Previous</span>
                                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 1 1 5l4 4" />
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
                                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                    </a>
                                @else
                                    <a href="#"
                                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 cursor-not-allowed">
                                        <span class="sr-only">Next</span>
                                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </nav>
                @endif
            </div>
            <!-- ===== Modal Add Product Start ===== -->
            <div x-show="isProductInfoModal"
                class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
                <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
                <div @click.outside="isProductInfoModal = false" x-data="{ isOptionSelected: false, optionChoosen: ''}"
                    class="no-scrollbar relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 lg:p-11">
                    <!-- close btn -->
                    <button @click="isProductInfoModal = false"
                        class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-50 text-gray-400 hover:bg-gray-200 hover:text-gray-600 ">
                        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.04289 16.5418C5.65237 16.9323 5.65237 17.5655 6.04289 17.956C6.43342 18.3465 7.06658 18.3465 7.45711 17.956L11.9987 13.4144L16.5408 17.9565C16.9313 18.347 17.5645 18.347 17.955 17.9565C18.3455 17.566 18.3455 16.9328 17.955 16.5423L13.4129 12.0002L17.955 7.45808C18.3455 7.06756 18.3455 6.43439 17.955 6.04387C17.5645 5.65335 16.9313 5.65335 16.5408 6.04387L11.9987 10.586L7.45711 6.04439C7.06658 5.65386 6.43342 5.65386 6.04289 6.04439C5.65237 6.43491 5.65237 7.06808 6.04289 7.4586L10.5845 12.0002L6.04289 16.5418Z"
                                fill="" />
                        </svg>
                    </button>
                    <div class="px-2 pr-14">
                        <h4 class="mb-2 text-2xl font-semibold text-gray-800">
                            Tambah Produk
                        </h4>
                        <p class="mb-6 text-sm text-gray-500 lg:mb-7">
                            Tambahkan Produkmu kedalam etalase.
                        </p>
                    </div>
                    {{-- Erorr message --}}
                    @if (session('isProductInfoModal'))
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <ul class="list-disc list-inside text-sm">
                                @foreach ($errors->all() as $index => $error)
                                    @if ($index < 3)
                                        <li>{{ $error }}</li>
                                    @elseif ($index === 3)
                                        <li>...</li>
                                        @break
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="flex flex-col" method="POST" action="{{ route('admin.add_product') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="custom-scrollbar h-[450px] overflow-y-auto px-2">
                            <div class="items-center justify-center">
                                <div class="w-full max-w-xl mb-5">
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                        Foto Produk
                                    </label>
                                    <label for="product_img"
                                        class="block cursor-pointer hover:border-blue-700 border-1 border-dashed rounded-xl bg-white p-10 text-center hover:bg-blue-50 transition">
                                        <div class="flex flex-col items-center space-y-4">
                                            <div
                                                id="icon-upload"
                                                class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                                                <svg class="fill-current" width="29" height="28"
                                                    viewBox="0 0 29 28" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.5 3.917a.75.75 0 0 0-.548.239L8.574 9.532a.75.75 0 0 0 1.06 1.061l4.118-4.116v12.19a.75.75 0 0 0 1.5 0V6.482l4.113 4.111a.75.75 0 0 0 1.06-1.06L15.084 4.194A.75.75 0 0 0 14.5 3.917ZM5.916 18.667a.75.75 0 0 0-1.5 0v3.167A2.25 2.25 0 0 0 6.666 24.084h15.667a2.25 2.25 0 0 0 2.25-2.25v-3.167a.75.75 0 0 0-1.5 0v3.167a.75.75 0 0 1-.75.75H6.666a.75.75 0 0 1-.75-.75v-3.167Z" />
                                                </svg>
                                            </div>
                                            <img src="" id="file_img" class="hidden mx-auto mb-4 w-[100px] h-[100px] object-cover rounded-full" alt="">
                                            <p class="text-lg font-semibold text-gray-700">Drag & Drop File Here</p>
                                            <p class="text-sm text-gray-500">Drag and drop your PNG, JPG, WebP, SVG
                                                images here
                                                or browse</p>
                                            <p class="text-blue-600 underline text-sm">Browse File</p>
                                        </div>
                                        <input id="product_img" name="product_img" type="file"
                                            accept=".png,.jpg,.jpeg,.svg" class="hidden" />
                                    </label>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-x-6 gap-y-5 lg:grid-cols-2">
                                <div class="col-span-2 lg:col-span-1">
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                        Nama Produk
                                    </label>
                                    <input type="text" name="product_name" placeholder="Masukan nama produk"
                                        class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                                </div>

                                <div class="col-span-2 lg:col-span-1">
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                        Harga
                                    </label>
                                    <input type="number" name="product_price" placeholder="Masukan nominal harga" min="100" step="10"
                                        class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                                    {{-- {{ Auth::user()->phone }} --}}
                                </div>  
                            </div>
                            <div class="mt-5">
                                <!-- Elements -->
                                <div>
                                    <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                        Description
                                    </label>
                                    <textarea placeholder="Enter a description..." type="text" rows="6" name="product_desc"
                                        class="shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden"></textarea>
                                </div>                
                            </div>
                            <div class="mt-5">
                                <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                    Select Input
                                </label>
                                <!-- Select Input with Fixed Hover Effect -->
                                <div class="relative z-20 bg-transparent group">
                                    <select name="category" id="category"
                                        class="shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden hover:border-gray-400 transition-colors"
                                        :class="isOptionSelected && 'text-gray-800'"
                                        @change="isOptionSelected = true; optionChoosen = $event.target.value">
                                        <option value="" selected disabled>Select Option</option>
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                        <option value="Kid">Kid</option>
                                        <option value="Accessories">Accessories</option>
                                    </select>
                                    <span
                                        class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 group-hover:text-gray-800 transition-colors">
                                        <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div  x-show="optionChoosen === 'Men' || optionChoosen === 'Women'" >
                                    <!-- Size and Quantity Fields -->
                                    <div id="sizes-container">
                                        <div class="size-group mb-4">
                                            <div class="flex flex-wrap -mx-2">
                                                <div class="w-full md:w-1/3 px-2">
                                                    <label class="block text-gray-700 font-medium mb-1">Size</label>
                                                    <select name="sizes[0][size]" class="w-full px-3 py-2 border rounded-lg">
                                                        <option value="" selected disabled>Select a size</option>
                                                        <option value="XS">XS</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XL">XL</option>
                                                        <option value="XXL">XXL</option>
                                                    </select>
                                                </div>
                                
                                                <div class="w-full md:w-1/3 px-2 mb-4">
                                                    <label class="block text-gray-700 font-medium mb-1">Quantity</label>
                                                    <input type="number" name="sizes[0][quantity]" min="0" class="w-full px-3 py-2 border rounded-lg">
                                                </div>
                                                <div class="w-full md:w-1/3 px-2 mb-4 flex items-end">
                                                    <button type="button"
                                                        class="remove-size bg-red-500 text-white px-3 py-2 rounded-lg hover:bg-red-600 transition">
                                                        Remove
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="button" id="add-size"
                                            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                                            Add Another Size
                                        </button>
                                    </div>    
                                </div>
                                <div  x-show="optionChoosen === 'Accessories' || optionChoosen === 'Kid'" >
                                    <!-- Size and Quantity Fields -->
                                    <div id="sizes-container">
                                        <div class="w-full mb-4">
                                            <label class="block text-gray-700 font-medium mb-1">Quantity</label>
                                            <input type="number" name="quantity" min="1" class="w-full px-3 py-2 border rounded-lg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 px-2 mt-6 lg:justify-end">
                            <button @click="isProductInfoModal = false" type="button"
                                class="flex w-full justify-center rounded-lg border border-gray-600 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 sm:w-auto">
                                Close
                            </button>
                            <button type="submit"
                                class="flex w-full justify-center rounded-lg border border-blue-700 bg-blue-700 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-800 sm:w-auto">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ===== Modal Add Product End ===== -->
        </main>  
        <script>
            function handleSizeClick(button) {
                const size = button.dataset.size;
                const quantity = button.dataset.quantity;
                const productId = button.dataset.productId;

                // Scope the parent container (up to .space-y-3)
                const container = button.closest('.space-y-3');
                if (!container) return;

                // Update the relevant elements within this row
                const quantityBox = container.querySelector('.quantity-display');
                const sizeBox = container.querySelector('.selected-size');
                const hiddenQuantityInput = container.querySelector('.selected-quantity');

                if (quantityBox) quantityBox.textContent = `Quantity Available: ${quantity}`;
                if (sizeBox) sizeBox.textContent = size;
                if (hiddenQuantityInput) hiddenQuantityInput.value = quantity;

                console.log(`Product ${productId} | Size: ${size} | Quantity: ${quantity}`);
            }
        </script>                             
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const sizesContainer = document.getElementById('sizes-container');
                const addSizeButton = document.getElementById('add-size');
                let sizeIndex = 1;

                // Add new size group
                addSizeButton.addEventListener('click', function () {
                    const newSizeGroup = document.querySelector('.size-group').cloneNode(true);

                    // Update the index in names
                    const inputs = newSizeGroup.querySelectorAll('[name]');
                    inputs.forEach(input => {
                        const name = input.name.replace(/\[\d+\]/, `[${sizeIndex}]`);
                        input.name = name;
                        input.value = '';
                    });

                    sizesContainer.appendChild(newSizeGroup);
                    sizeIndex++;
                });

                // Remove size group
                sizesContainer.addEventListener('click', function (e) {
                    if (e.target.classList.contains('remove-size')) {
                        const sizeGroups = document.querySelectorAll('.size-group');
                        if (sizeGroups.length > 1) {
                            e.target.closest('.size-group').remove();
                        } else {
                            alert('You need at least one size option.');
                        }
                    }
                });
            });
        </script>     
        <script>
            document.getElementById('product_img').addEventListener('change', function (event) {
                const file = event.target.files[0];
                const preview = event.target.closest('label').querySelector('img');
                const iconUpload = event.target.closest('label').querySelector('#icon-upload');
                const file_img = document.getElementById('file_img');

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        preview.src = e.target.result;
                        file_img.classList.remove('hidden'); // Show image when uploaded
                    };
                    reader.readAsDataURL(file);
                    iconUpload.remove();
                }
            });
        </script>            
    </x-admin-components.sidebar>
</x-layout>
