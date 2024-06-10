<footer class="
mx-[clamp(12px,_-8.8031px_+_6.501vi,_80px)] 
py-4 text-sm border-t border-gray-100">
    <div class="flex flex-wrap items-center justify-between">
    {{-- <div class="flex space-x-4">
        @foreach (config('app.supported_locales') as $locale => $data)
            <a href="{{ route('locale', $locale) }}">
                <x-dynamic-component :component="'flag-country-' . $data['icon']" class="w-6 h-6" />
            </a>
        @endforeach
    </div> --}}
    <div class="flex space-x-4 order-2 sm:order-1 my-5">
        <span class="text-sm">&copy;2024, D.B. International Sales & Services, Inc. All Rights Reserved. 
            <br>Built by <a href="https://instragram.com/_exeill" rel="external">XXIV</a></span>
    </div>
    <div class="flex space-x-4 order-1 sm:order-2">
        <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">{{ __('Products') }} </x-nav-link>
        <x-nav-link href="{{ route('products.index') }}" :active="request()->routeIs('products.index')">{{ __('Find Product') }} </x-nav-link>
        <x-nav-link href="/admin">{{ __('Login') }} </x-nav-link>
    </div>
    </div>
</footer>