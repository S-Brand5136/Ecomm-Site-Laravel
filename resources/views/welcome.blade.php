<x-layout>
        @foreach ($products as $product)
            <x-product-card :product="$product" class="{{ $loop->even ? 'flex-row-reverse' : 'flex-row' }}" />
        @endforeach
</x-layout>
