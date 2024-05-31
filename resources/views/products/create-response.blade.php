@props(['product', 'response'])
<x-app-layout :title="$product->title">

<livewire:create-response  :product_title="$product->title" :date_response="Carbon\Carbon::now()->format('M-d-Y')" />

</x-app-layout>