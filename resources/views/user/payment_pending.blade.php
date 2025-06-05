<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    <section class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 py-12" id="payment-pending">
        <div class="text-center w-full max-w-4xl mx-auto">
            <!-- Pending Icon -->
            <div class="mb-8">
                <div class="mx-auto w-32 h-32 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-clock text-5xl text-yellow-500 animate-spin"></i>
                </div>
            </div>
    
            <!-- Heading -->
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Payment Pending</h1>
    
            <!-- Description -->
            <p class="text-lg text-gray-600 mb-8 max-w-md mx-auto">
                We're processing your payment. Please wait while we confirm your transaction. This may take a few moments.
            </p>
        </div>
    </section>
</x-layout>