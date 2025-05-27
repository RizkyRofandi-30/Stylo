<x-layout>
    <x-admin-components.sidebar>
        <!-- ===== Modal Add Product Start ===== -->
        <div class="flex items-center justify-center mt-5" x-data="{ isProductInfoModal: false}">
            <div 
                class="no-scrollbar relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 lg:p-11">
                <div class="px-2 pr-14">
                    <h4 class="mb-2 text-2xl font-semibold text-gray-800">
                        Edit Produk
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
                @foreach ($products as $product)
                    <form class="flex flex-col" method="POST" action="{{ route('admin.post_edit_product', ['id' => $product->product_id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="custom-scrollbar h-[450px] overflow-y-auto px-2" >
                            <div x-data="{ isOptionSelected: true, optionChoosen: '{{ $product->category }}' }" x-init="optionChoosen = '{{ $product->category }}'">
                                <div class="items-center justify-center">
                                    <div class="w-full max-w-xl mb-5">
                                        <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                            Foto Produk
                                        </label>
                                        <label for="product_img"
                                            class="block cursor-pointer hover:border-blue-700 border-1 border-dashed rounded-xl bg-white p-10 text-center hover:bg-blue-50 transition">
                                            <img src="{{ asset('storage/' . $product->product_img) }}"
                                                class="mx-auto mb-4 w-[100px] h-[100px] object-cover rounded-full" alt="">
                                            <div class="flex flex-col items-center space-y-4">
                                                <p class="text-lg font-semibold text-gray-700">Drag & Drop File Here</p>
                                                <p class="text-sm text-gray-500">Drag and drop your PNG, JPG, WebP, SVG
                                                    images here
                                                    or browse</p>
                                                <p class="text-blue-600 underline text-sm">Browse File</p>
                                            </div>
                                            <input id="product_img" name="product_img" type="file" accept=".png,.jpg,.jpeg,.svg" class="hidden" />
                                        </label>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 gap-x-6 gap-y-5 lg:grid-cols-2">
                                    <div class="col-span-2 lg:col-span-1">
                                        <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                            Nama Produk
                                        </label>
                                        <input type="text" name="product_name" placeholder="{{ $product->product_name }}"
                                            class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-600 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10" />
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                        <label class="mb-1.5 block text-sm font-medium text-gray-700">
                                            Harga
                                        </label>
                                        <input type="number" name="product_price" placeholder="{{ $product->product_price }}" min="100" step="10"
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
                                        <textarea name="product_desc" rows="6" placeholder="{{ $product->product_desc }}"
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
                                            <option value="Men" {{ $product->category == 'Men' ? 'selected' : '' }}>Men</option>
                                            <option value="Women" {{ $product->category == 'Women' ? 'selected' : '' }}>Women</option>
                                            <option value="Kid" {{ $product->category == 'Kid' ? 'selected' : '' }}>Kid</option>
                                            <option value="Accessories" {{ $product->category == 'Accessories' ? 'selected' : '' }}>Accessories</option>
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
                                @php
                                    $firstSize = $product->dataQuantities
                                        ? $product->dataQuantities->filter(fn($dq) => !is_null($dq) && !is_null($dq->size))->first()
                                        : null; 
                                @endphp
                                <div class="mt-5">
                                    <div x-show="optionChoosen === 'Men' || optionChoosen === 'Women'">
                                        <!-- Size and Quantity Fields -->
                                        <div id="sizes-container">
                                            @php
                                                $sizes = $product->dataQuantities->filter(fn($dq) => $dq->size);
                                            @endphp
                                            @foreach ($sizes as $index => $size)
                                                <div class="size-group mb-4">
                                                    <div class="flex flex-wrap -mx-2">
                                                        <div class="w-full md:w-1/3 px-2">
                                                            <label class="block text-gray-700 font-medium mb-1">Size</label>
                                                            <select name="sizes[{{ $index }}][size]" class="w-full px-3 py-2 border rounded-lg">
                                                                <option value="" selected disabled>Select a size</option>
                                                                <option value="XS" {{ $size->size == 'XS' ? 'selected' : '' }}>XS</option>
                                                                <option value="S" {{ $size->size == 'S' ? 'selected' : '' }}>S</option>
                                                                <option value="M" {{ $size->size == 'M' ? 'selected' : '' }}>M</option>
                                                                <option value="L" {{ $size->size == 'L' ? 'selected' : '' }}>L</option>
                                                                <option value="XL" {{ $size->size == 'XL' ? 'selected' : '' }}>XL</option>
                                                                <option value="XXL" {{ $size->size == 'XXL' ? 'selected' : '' }}>XXL</option>
                                                            </select>
                                                        </div>
                                        
                                                        <div class="w-full md:w-1/3 px-2 mb-4">
                                                            <label class="block text-gray-700 font-medium mb-1">Quantity</label>
                                                            <input type="number" name="sizes[{{ $index }}][quantity]" min="0"
                                                                class="w-full px-3 py-2 border rounded-lg" value="{{ $size->quantity }}">
                                                        </div>
                                                        <div class="w-full md:w-1/3 px-2 mb-4 flex items-end">
                                                            <button type="button"
                                                                class="remove-size bg-red-500 text-white px-3 py-2 rounded-lg hover:bg-red-600 transition"
                                                                data-id="{{ $size->id }}">
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <input type="hidden" name="removed_size_ids" id="removed_size_ids" value="">
                                        </div>
                                        <div class="mt-4">
                                            <button type="button" id="add-size"
                                                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                                                Add Another Size
                                            </button>
                                        </div>
                                    </div>
                                    <div x-show="optionChoosen === 'Accessories' || optionChoosen === 'Kid'">
                                        <!-- Size and Quantity Fields -->
                                        <div id="sizes-container">
                                            <div class="w-full mb-4">
                                                <label class="block text-gray-700 font-medium mb-1">Quantity</label>
                                                @if ($firstSize === null)
                                                    @foreach ($product->dataQuantities as $dq)
                                                        <input type="number" name="quantity" min="1" class="w-full px-3 py-2 border rounded-lg" value="{{ $dq->quantity }}">
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 px-2 mt-6 lg:justify-end">
                            <button type="button" onclick="window.location='{{ route('admin') }}'"
                                class="flex w-full justify-center rounded-lg border border-gray-600 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 sm:w-auto">
                                Close
                            </button>
                            <button type="submit"
                                class="flex w-full justify-center rounded-lg border border-blue-700 bg-blue-700 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-800 sm:w-auto">
                                Submit
                            </button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
        <!-- ===== Modal Add Product End ===== -->

        <script>
            const removedIds = [];
            const removedInput = document.getElementById('removed_size_ids');

            document.querySelectorAll('.remove-size').forEach(button => {
                button.addEventListener('click', function () {
                    const id = this.getAttribute('data-id');
                    if (!removedIds.includes(id)) {
                        removedIds.push(id);
                        removedInput.value = removedIds.join(',');
                    }

                    // Optionally hide the entry
                    this.closest('.size-entry').style.display = 'none';
                });
            });
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

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        preview.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        </script>
    </x-admin-components.sidebar>
</x-layout>