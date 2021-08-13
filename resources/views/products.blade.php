<x-layout>
    <div class="container-fluid p-5 max-height w-100">
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <x-product-card :product="$product" class="mr-md-5 col-xs-2 col-offset-2 " />
            @endforeach
        </div>
    </div>
</x-layout>
