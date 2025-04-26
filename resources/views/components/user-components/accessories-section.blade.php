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
                <li class="card-item swiper-slide">
                    <!-- Product Card -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="relative group">
                            <img src="{{ asset('assets/images/accessories-01.jpeg') }}" alt="Air Force 1 X"
                                class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                            <div
                                class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                <ul class="flex space-x-4">
                                    <li><a href="single-product.html" class="text-white text-lg"><i
                                                class="fa fa-eye"></i></a>
                                    </li>
                                    <li><a href="single-product.html" class="text-white text-lg"><i
                                                class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="text-xl font-bold">New Green Jacket</h4>
                            <span class="text-gray-400 font-bold">$75.00</span>
                        </div>
                    </div>
                </li>
                <li class="card-item swiper-slide">
                    <!-- Repeat Product Card for other items -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="relative group">
                            <img src="{{ asset('assets/images/accessories-02.jpeg') }}" alt="Air Force 1 X"
                                class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                            <div
                                class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                <ul class="flex space-x-4">
                                    <li><a href="single-product.html" class="text-white text-lg"><i
                                                class="fa fa-eye"></i></a>
                                    </li>
                                    <li><a href="single-product.html" class="text-white text-lg"><i
                                                class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="text-xl font-bold">Classic Dress</h4>
                            <span class="text-gray-400 font-bold">$45.00</span>
                        </div>
                    </div>
                </li>
                <li class="card-item swiper-slide">
                    <!-- Repeat Product Card for other items -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="relative group">
                            <img src="{{ asset('assets/images/accessories-03.png') }}" alt="Love Nana '20"
                                class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                            <div
                                class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                <ul class="flex space-x-4">
                                    <li><a href="single-product.html" class="text-white text-lg"><i
                                                class="fa fa-eye"></i></a>
                                    </li>
                                    <li><a href="single-product.html" class="text-white text-lg"><i
                                                class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="text-xl font-bold">Spring Collection</h4>
                            <span class="text-gray-400 font-bold">$130.00</span>
                        </div>
                    </div>
                </li>
                <li class="card-item swiper-slide">
                    <!-- Repeat Product Card for other items -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="relative group">
                            <img src="{{ asset('assets/images/accessories-04.jpeg') }}" alt="Love Nana '20"
                                class="w-full h-150 xl:h-80 lg:h-80 md:h-80 sm:h-160 object-cover">
                            <div
                                class="absolute inset-0 backdrop-blur-sm flex justify-center items-center opacity-0 group-hover:opacity-100 transition">
                                <ul class="flex space-x-4">
                                    <li><a href="{{ url('/single-product') }}" class="text-white text-lg"><i
                                                class="fa fa-eye"></i></a>
                                    </li>
                                    <li><a href="single-product.html" class="text-white text-lg"><i
                                                class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="text-xl font-bold">Classic Spring</h4>
                            <span class="text-gray-400 font-bold">$120.00</span>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-slide-button swiper-button-prev"></div>
            <div class="swiper-slide-button swiper-button-next"></div>
        </div>
    </div>
    <div class="container mx-auto px-4 mt-8 text-right">
        <a href="#"
            class="mt-2 border bg-black px-5 py-3 text-white hover:bg-white hover:text-black hover:border-black transition">Discover
            More</a>
    </div>
</section>
<!-- ***** Accessory Area Ends ***** -->
