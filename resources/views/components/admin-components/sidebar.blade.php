<div x-data="{ isOpen: false, isMobile: window.innerWidth < 1024 }" x-init="window.addEventListener('resize', () => {
    isMobile = window.innerWidth < 1024;
    if (window.innerWidth >= 1024) isOpen = false;
})" class="flex h-screen overflow-hidden bg-gray-100">

    {{-- Sidebar - visible on desktop or when toggled on mobile --}}
    <div :class="{
        'bg-gray-800 text-white': true,
        'fixed inset-y-0 left-0 z-50 w-64 transform transition-transform duration-300 ease-in-out': isMobile,
        'translate-x-0': isOpen && isMobile,
        '-translate-x-full': !isOpen && isMobile,
        'w-64': !isMobile
    }"
        class="flex flex-col">
        <div class="p-4 flex justify-center items-center">
            <x-logo href="{{ route('admin') }}" class="items-center" />
        </div>

        <nav class="mt-2 flex-1">
            <a href="/admin"
                class="px-4 py-3 flex items-center space-x-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                <i data-lucide="home" class="w-5 h-5"></i>
                <span>Home</span>
            </a>
            <a href="/packet"
                class="px-4 py-3 flex items-center space-x-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                <i data-lucide="mail" class="w-5 h-5"></i>
                <span>Paket User</span>
            </a>
        </nav>

        <!-- Logout button at the bottom -->
        <div class="mt-auto p-4">
            <a href="/logout"
                class="px-4 py-3 flex items-center space-x-3 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                <i data-lucide="log-out" class="w-5 h-5"></i>
                <span>Logout</span>
            </a>
        </div>
    </div>

    {{-- Main content area --}}
    <div class="flex-1 flex flex-col overflow-hidden">
        {{-- Top bar --}}
        <div class="bg-gray-800 shadow-sm z-10 lg:hidden">
            <div class="px-4 py-3 flex items-center justify-between">
                <div class="flex-1 flex justify-between lg:hidden">
                    <x-logo href=""></x-logo>
                </div>
                <button x-show="isMobile" @click="isOpen = !isOpen"
                    class="p-1.5 rounded-md flex items-center justify-center bg-gray-800 hover:bg-gray-700 text-gray-200 transition-colors duration-200 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
        @if (session('success'))
            <script>
                swal({
                    title: "{{ session('success') }}",
                    icon: "success",
                    button: "Ok",
                });
            </script>
        @endif
        {{ $slot }}
    </div>
</div>

<script>
    // Initialize Lucide icons
    lucide.createIcons();
</script>
<script>
    document.getElementById('showAlert').addEventListener('click', function(e) {
        e.preventDefault();
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    document.getElementById('logout-form').submit();
                }
            });
    })
</script>
