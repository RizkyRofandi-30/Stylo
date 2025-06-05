<nav class="bg-gray-800 sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="mx-auto max-w-8xl px-4 sm:px-8 lg:px-10">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none focus:ring-inset">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!mobileMenuOpen" class="block size-6" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="hidden size-6" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <x-logo href="/#"></x-logo>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <x-user-components.nav-link href="/#men" :active="request()->is('/#men')">Pria</x-user-components.nav-link>
                        <x-user-components.nav-link href="/#women" :active="request()->is('/#women') || request()->is('#women')">Wanita</x-user-components.nav-link>
                        <x-user-components.nav-link href="/#kids"
                            :active="request()->is('/#kids')">Anak-Anak</x-user-components.nav-link>
                        <x-user-components.nav-link href="/#accessories"
                            :active="request()->is('/#accessories')">Aksesoris</x-user-components.nav-link>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                @if (Auth::check())
                    <a href="{{ url('/cart/' . Auth::user()->id) }}"
                        class="inline-flex relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Shopping Cart</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        @if ($cartItemsCount > 0)
                            <span
                                class="px-1.5 rounded-full absolute bg-white -top-1 -right-2 z-30 text-[0.7rem] text-gray-800 border border-gray-200 shadow-sm">
                                {{ $cartItemsCount }}
                            </span>
                        @endif
                    </a>
                @else
                    <!-- Guest version, maybe show 0 or no badge -->
                    <a href="{{ url('/cart') }}"
                        class="inline-flex relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Shopping Cart</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </a>
                @endif
                <div class="relative ml-3" x-data="{ open: false }">
                    @if (Auth::check())
                        <button @click="open = !open" type="button"
                            class="relative flex rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none">

                            @if (Auth::user()->img && Storage::disk('public')->exists(Auth::user()->img))
                                <img src="{{ asset('storage/' . Auth::user()->img) }}" alt="user"
                                    class="w-[33px] h-[33px] object-cover rounded-full" />
                            @else
                                <img width="33" height="33" src="{{ asset('assets/profile/Profile.jpg') }}" alt="default user"
                                    class="rounded-full" />
                            @endif

                            <p class="text-gray-50 pt-1.5 pl-1 hidden sm:block">{{ Auth::user()->name }}</p>
                        </button>
                    @else
                        <button @click="open = !open" type="button"
                            class="relative flex rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none">
                            <img width="33" height="33" src="{{ asset('assets/profile/Profile.jpg') }}" alt="guest user" class="rounded-full" />
                        </button>
                    @endif

                    <div x-show="open" @click.outside="open = false"
                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                        @if (Auth::check())
                            <a href="{{ url('/order-progress/' . Auth::user()->id) }}" class="block px-4 py-2 text-sm text-gray-700">Order
                                Progress</a>
                            <a href="{{ url('/settings/' . Auth::user()->id) }}"
                                class="block px-4 py-2 text-sm text-gray-700">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" id="showAlert">Logout</a>
                            <form id="logout-form" action="{{ route('index.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ url('/order-progress') }}" class="block px-4 py-2 text-sm text-gray-700">Order
                                Progress</a>
                            <a href="{{ url('/settings') }}" class="block px-4 py-2 text-sm text-gray-700">Settings</a>
                            <a href="{{ url('/login') }}" class="block px-4 py-2 text-sm text-gray-700">Sign In</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sm:hidden" x-show="mobileMenuOpen" @click.outside="mobileMenuOpen = false">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <x-user-components.mobile-navbar href="/#men" :active="request()->is('men')">Pria</x-user-components.mobile-navbar>
            <x-user-components.mobile-navbar href="/#women" :active="request()->is('women')">Wanita</x-user-components.mobile-navbar>
            <x-user-components.mobile-navbar href="/#kids"
                :active="request()->is('kids')">Anak-Anak</x-user-components.mobile-navbar>
            <x-user-components.mobile-navbar href="/#accessories"
                :active="request()->is('accessories')">Aksesoris</x-user-components.mobile-navbar>
        </div>
    </div>
</nav>
<script></script>
