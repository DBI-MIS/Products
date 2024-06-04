<x-app-layout title="EP Solutions">
    
    @include('layouts.sections.ep-products')

        <div class="mb-10 mt-2 sm:mt-4 md:mt-8 xl:mt-0 w-full">
            <div class="mb-16">
                <hr>
                <h2 class="my-2 sm:my-4 md:my-6 text-base md:text-lg xl:text-2xl text-gray-800 font-bold " animate-shake animate-infinite animate-ease-in>
                    Data center SPD and Waveform Correction Devices</h2>
                <div class="w-full">
                    <div class="grid grid-cols-4 gap-2">

                        @foreach($featuredProducts as $product)
                        <div class="md:col-span-1 col-span-3">
                            <x-products.product-card :product="$product" />
                        </div>

                        @endforeach
                        
                    </div>
                </div>
                <a class="mt-10 block text-center text-lg text-blue-500 font-semibold"
                    href="{{ route('products.index') }}?category=ep-solutions">View All
                    Products</a>
            </div>
            <hr>

            
        </div>

        @section('other-contents')
        <div class="w-full">
            <div class="bg-gray-200 w-full px-[300px]">
                @include('layouts.sections.data-protection-01')
            </div>
            <div class="bg-white w-full px-[300px]">
                @include('layouts.sections.data-protection-02')
            </div>
            </div>
                @endsection

        
    

</x-app-layout>