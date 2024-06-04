<x-app-layout title="EP Solutions">

    @section('hero')
    <!-- Hero -->
            
        <div class="w-full bg-sky-900">
            
            <div class="p-24">
                <div class="flex flex-col text-white">
                            <div class="">
                                <p class="text-4xl font-extrabold">Data Center Applications</p>
                                    <span class="text-2xl font-medium">Surge Protection and Waveform correction</span>
                            </div>
                            <div>
                                <p class="text-lg mt-4 text-balance">Depending on the geographical location, datacenters spend an average of 40% of their annual overall operating costs towards their power bill and 40% on their maintenance and other expenditure (*US chamber of Commerce Technology Engagement Center). The power bill and the maintenance costs are huge factors that affect the profit-maximizing conditions of the data center. The data center needs to reduce its maintenance costs and reduce its power bills to gain more profits. </p>
                            </div>
                           
                        </div>
                    </div>

        </div>
    
        
    @endsection

        <div class="mb-10 mt-2 sm:mt-4 md:mt-8 xl:mt-0 w-full">
            <div class="mb-16">
                <hr>
                <h2 class="my-2 sm:my-4 md:my-6 text-base md:text-lg xl:text-2xl text-gray-800 font-bold " animate-shake animate-infinite animate-ease-in>
                    Data Center SPD & Waveform Correction Devices</h2>
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
            <div class="bg-gray-200 w-full p-24">
                @include('layouts.sections.data-protection-01')
            </div>
            <div class="bg-white w-full p-24">
                @include('layouts.sections.data-protection-02')
            </div>
            </div>
                @endsection

        
    

</x-app-layout>