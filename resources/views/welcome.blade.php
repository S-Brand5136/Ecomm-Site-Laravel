<x-layout>
        @foreach ($products as $product)
            <x-product-feature-card :product="$product" class="{{ $loop->even ? 'flex-row-reverse' : 'flex-row' }}" />
        @endforeach
</x-layout>
