<div id="">
    <h3 class="text-lg font-semibold text-gray-900 mb-3">Recommended Product Category</h3>
    <div class="topics flex flex-wrap justify-start gap-2">
        @foreach ($categories as $category)
        {{-- <x-posts.category-badge :category="$category" /> --}}
        <x-badge wire:navigate href="{{ route('products.index', ['category' => $category->slug])}}"
            :textColor="$category->text_color" :bgColor="$category->bg_color"> 
            {{ $category->title }}
        </x-badge>
        @endforeach
    </div>
</div>