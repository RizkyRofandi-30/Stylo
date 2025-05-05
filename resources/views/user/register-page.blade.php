<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-3xl font-bold mb-6 text-center">Register</h2>

            {{-- Erorr message --}}
            @if ($errors->any())
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul class="list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register.store') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">Name</label>
                    <input type="text" name="name"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <input type="email" name="email"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                    <input type="password" name="password"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-semibold mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 font-semibold transition duration-300">
                    Register
                </button>

                <p class="text-center text-sm text-gray-600 mt-6">
                    Already have an account?
                    <a href="/login" class="text-blue-500 hover:underline">Login</a>
                </p>
            </form>
        </div>
    </div>
</x-layout>
