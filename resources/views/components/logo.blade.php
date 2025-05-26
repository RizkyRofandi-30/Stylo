@props(['href' => '#'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'flex items-center']) }}>
    <img class="h-8 w-auto" src="{{ asset('assets/logo/Dark_Themes.png') }}" alt="Your Company" />
</a>