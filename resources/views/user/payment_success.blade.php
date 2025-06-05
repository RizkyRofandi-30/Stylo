<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    <!-- Payment Success Section -->
    <section class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 py-12" id="payment-success">
        <div class="text-center w-full max-w-4xl mx-auto">
            <!-- Success Icon -->
            <div class="mb-8">
                <div class="mx-auto w-32 h-32 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-check-circle text-5xl text-green-500"></i>
                </div>
            </div>
    
            <!-- Heading -->
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Payment Successful!</h1>
    
            <!-- Description -->
            <p class="text-lg text-gray-600 mb-8 max-w-md mx-auto">
                Thank you for your purchase! Your order has been confirmed and you'll receive an email confirmation
                shortly.
            </p>
        </div>
    </section>
</x-layout>