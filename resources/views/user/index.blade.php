<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    <x-user-components.banner></x-user-components.banner>


    <!-- ***** Triggered id from navbar ***** -->
    <div id="men"></div>
    <!-- ***** Men Area Starts ***** -->
    <section class="py-16 bg-gray-100 mt-10">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-bold text-gray-800">Men's Latest</h2>
                <p class="text-gray-600 mt-2">Details to details is what makes Hexashop different from the other themes.
                </p>
            </div>
        </div>
        <div class="container swiper">
            <div class="card-wrapper">
                <ul class="card-list swiper-wrapper">
                    @foreach ($mens as $men)    
                        <li class="card-item swiper-slide">
                            <!-- Product Card -->
                            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                <div class="relative group">
                                    <img src="{{ asset('storage/' . $men->product_img) }}" alt="Air Force 1 X"
                                        class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                                    <div
                                        class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                        <ul class="flex space-x-4">
                                            <li><a href="{{ route('user.single_product', ['id' => $men->product_id]) }}" class="text-white text-lg"><i
                                                        class="fa fa-eye"></i></a>
                                            </li>
                                            <li><a href="single-product.html" class="text-white text-lg"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="text-xl font-bold">{{ $men->product_name }}</h4>
                                    <span class="text-gray-400 font-bold">Rp {{ number_format($men->product_price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
    
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
    
                <!-- If we need navigation buttons -->
                <div class="swiper-slide-button swiper-button-prev"></div>
                <div class="swiper-slide-button swiper-button-next"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 mt-8 mb-5 text-right">
            @foreach ($mens as $men)
                <a href="{{ route('listProductByCategory', ['category' => $men->category]) }}"
                    class="mt-2 border bg-black px-5 py-3 text-white hover:bg-white hover:text-black hover:border-black transition">Discover
                    More</a>
                @break
            @endforeach
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->


    <!-- ***** Triggered id from navbar ***** -->
    <div id="women"></div>
    <!-- ***** Women Area Starts ***** -->
    <section class="py-16 bg-white mt-10">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-bold text-gray-800">Women's Latest</h2>
                <p class="text-gray-600 mt-2">Details to details is what makes Hexashop different from the other themes.
                </p>
            </div>
        </div>
        <div class="container swiper">
            <div class="card-wrapper">
                <ul class="card-list swiper-wrapper">
                    @foreach ($womens as $women)
                        <li class="card-item swiper-slide">
                            <!-- Product Card -->
                            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                <div class="relative group">
                                    <img src="{{ asset('storage/' . $women->product_img) }}" alt="Air Force 1 X"
                                        class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                                    <div
                                        class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                        <ul class="flex space-x-4">
                                            <li><a href="{{ route('user.single_product', ['id' => $women->product_id]) }}" class="text-white text-lg"><i
                                                        class="fa fa-eye"></i></a>
                                            </li>
                                            <li><a href="single-product.html" class="text-white text-lg"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="text-xl font-bold">{{ $women->product_name }}</h4>
                                    <span class="text-gray-400 font-bold">Rp {{ number_format($women->product_price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
    
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
    
                <!-- If we need navigation buttons -->
                <div class="swiper-slide-button swiper-button-prev"></div>
                <div class="swiper-slide-button swiper-button-next"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 mt-8 text-right">
            @foreach ($womens as $women)
                <a href="{{ route('listProductByCategory', ['category' => $women->category]) }}"
                    class="mt-2 border bg-black px-5 py-3 text-white hover:bg-white hover:text-black hover:border-black transition">Discover
                    More</a>
                @break
            @endforeach
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->



    <!-- ***** Triggered id from navbar ***** -->
    <div id="kids"></div>
    <!-- ***** Kids Area Starts ***** -->
    <section class="py-16 bg-gray-100 mt-10">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-bold text-gray-800">Kid's Latest</h2>
                <p class="text-gray-600 mt-2">Details to details is what makes Hexashop different from the other themes.
                </p>
            </div>
        </div>
        <div class="container swiper">
            <div class="card-wrapper">
                <ul class="card-list swiper-wrapper">
                    @foreach ($kids as $kid)
                        <li class="card-item swiper-slide">
                            <!-- Product Card -->
                            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                <div class="relative group">
                                    <img src="{{ asset('storage/' . $kid->product_img) }}" alt="Air Force 1 X"
                                        class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                                    <div
                                        class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                        <ul class="flex space-x-4">
                                            <li><a href="{{ route('user.single_product', ['id' => $kid->product_id]) }}" class="text-white text-lg"><i
                                                        class="fa fa-eye"></i></a>
                                            </li>
                                            <li><a href="single-product.html" class="text-white text-lg"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="text-xl font-bold">{{ $kid->product_name }}</h4>
                                    <span class="text-gray-400 font-bold">Rp {{ number_format($kid->product_price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
    
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
    
                <!-- If we need navigation buttons -->
                <div class="swiper-slide-button swiper-button-prev"></div>
                <div class="swiper-slide-button swiper-button-next"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 mt-8 mb-5 text-right">
            @foreach ($kids as $kid)
                <a href="{{ route('listProductByCategory', ['category' => $kid->category]) }}"
                    class="mt-2 border bg-black px-5 py-3 text-white hover:bg-white hover:text-black hover:border-black transition">Discover
                    More</a>
                @break
            @endforeach
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->


    <!-- ***** Triggered id from navbar ***** -->
    <div id="accessories"></div>
    <!-- ***** Accessory Area Starts ***** -->
    <section class="py-16 bg-white mt-10">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-bold text-gray-800">Accessories Latest</h2>
                <p class="text-gray-600 mt-2">Details to details is what makes Hexashop different from the other themes.
                </p>
            </div>
        </div>
        <div class="container swiper">
            <div class="card-wrapper">
                <ul class="card-list swiper-wrapper">
                    @foreach ($accessories as $accessory)
                        <li class="card-item swiper-slide">
                            <!-- Product Card -->
                            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                <div class="relative group">
                                    <img src="{{ asset('storage/' . $accessory->product_img) }}" alt="Air Force 1 X"
                                        class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                                    <div
                                        class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                        <ul class="flex space-x-4">
                                            <li><a href="{{ route('user.single_product', ['id' => $accessory->product_id]) }}" class="text-white text-lg"><i
                                                        class="fa fa-eye"></i></a>
                                            </li>
                                            <li><a href="single-product.html" class="text-white text-lg"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="text-xl font-bold">{{ $accessory->product_name}}</h4>
                                    <span class="text-gray-400 font-bold">Rp {{ number_format($accessory->product_price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
    
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
    
                <!-- If we need navigation buttons -->
                <div class="swiper-slide-button swiper-button-prev"></div>
                <div class="swiper-slide-button swiper-button-next"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 mt-8 text-right">
            @foreach ($accessories as $accessory)    
                <a href="{{ route('listProductByCategory', ['category' => $accessory->category]) }}"
                    class="mt-2 border bg-black px-5 py-3 text-white hover:bg-white hover:text-black hover:border-black transition">Discover
                    More</a>
                @break
            @endforeach
        </div>
    </section>
    <!-- ***** Accessory Area Ends ***** -->


    <x-user-components.explore></x-user-components.explore>
    <x-user-components.footer></x-user-components.footer>
</x-layout>
