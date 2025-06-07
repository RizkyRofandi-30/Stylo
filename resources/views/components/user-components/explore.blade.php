<!-- ***** Section Devider ***** -->
<div class="mx-auto h-1 bg-gray-100 rounded-full m-8"></div>

<!-- ***** Explore Area Starts ***** -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Content -->
            <div class="lg:w-1/2 space-y-6">
                <h2 class="text-3xl font-bold text-gray-800">Temukan Produk Terbaik Kami</h2>
                <p class="text-lg text-gray-600">
                    Nikmati pengalaman berbelanja yang mudah dan menyenangkan melalui koleksi produk pilihan kami. Dengan desain menarik dan
                    kualitas terpercaya, kami hadir untuk memenuhi kebutuhan Anda.
                </p>
                <div class="bg-gray-200 border-l-4 border-gray-600 p-4 italic text-gray-700 flex items-center space-x-3">
                    <i class="fa fa-quote-left text-2xl text-gray-500"></i>
                    <p>Kami tidak hanya mengejar tren namun menciptakan gaya yang baru</p>
                </div>
                <p class="text-gray-600">
                    Jelajahi beragam kategori produk yang telah kami siapkan secara lengkap dan gratis melalui platform kami. Kami
                    menghadirkan tampilan yang ramah pengguna dan mudah diakses, tanpa biaya tambahan.
                </p>
                <div>
                    <a href="{{ url('/list-product') }}"
                        class="mt-2 border border-black px-4 py-2 text-dark hover:bg-black hover:text-white hover:border-white transition">
                        Jelajahi Produk Kami</a>
                </div>
            </div>

            <!-- Right Content -->
            <div class="lg:w-1/2 grid grid-cols-2 gap-4">
                <div class="bg-gray-800 text-white flex flex-col justify-center items-center p-6 text-center">
                    <h4 class="text-xl font-semibold">Leather Bags</h4>
                    <span class="text-sm">Latest Collection</span>
                </div>
                <div>
                    <img src="{{ asset('assets/images/explore-image-01.jpg') }}" alt="Leather Bags"
                        class="w-full rounded-lg shadow">
                </div>
                <div>
                    <img src="{{ asset('assets/images/explore-image-02.jpg') }}" alt="Different Types"
                        class="w-full rounded-lg shadow">
                </div>
                <div class="bg-gray-800 text-white flex flex-col justify-center items-center p-6 text-center">
                    <h4 class="text-xl font-semibold">Different Types</h4>
                    <span class="text-sm">Over 304 Products</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Explore Area Ends ***** -->
