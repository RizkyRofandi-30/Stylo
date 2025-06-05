<x-layout>
    <x-user-components.navbar></x-user-components.navbar>
    <!-- Payment Error Section -->
    <section class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 py-12" id="payment-error">
        <div class="text-center w-full max-w-4xl mx-auto">
            <!-- Error Icon -->
            <div class="mb-8">
                <div class="mx-auto w-32 h-32 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-exclamation-triangle text-5xl text-red-500"></i>
                </div>
            </div>
    
            <!-- Heading -->
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Payment Failed</h1>
    
            <!-- Description -->
            <p class="text-lg text-gray-600 mb-8 max-w-md mx-auto">
                We're sorry, but your payment could not be processed. Please check your payment details and try again.
            </p>
    
            <!-- Error Details (Optional) -->
            <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-8 max-w-md mx-auto">
                <div class="flex items-center">
                    <i class="fas fa-info-circle text-red-400 mr-2"></i>
                    <span class="text-sm text-red-700">
                        Error: Insufficient funds or invalid card details
                    </span>
                </div>
            </div>
        </div>
    </section>
</x-layout>