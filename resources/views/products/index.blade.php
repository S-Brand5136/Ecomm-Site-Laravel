<x-layout>
    <x-product-feature-card :product="$product" class="flex-row" />

    {{-- <section class="container-fluid d-xs-block flex-row d-md-flex mt-5">
        <div class="container text-align-center d-flex flex-column justify-content-around mb-5">
            <h1 class="display-3 text-uppercase font-weight-bold">
                <ins>{{ $product->name }}</ins>
            </h1>
            <div class="d-flex flex-column justify-content-around">
                <h1 class="text-muted">{{ $product->description }}</h1>
                <div class="d-flex flex-column">
                    <h4 class="mt-3 font-weight-bold">Price: <span class="font-weight-bold"></span>${{ ($product->price) / 100 }}</h4>
                    <h4 class="mt-3 font-weight-bold">Stock: <span class="font-weight-bold"></span>{{ ($product->quantity) }}</h4>
                </div>
            </div>
            <a href="products/{{ $product->slug }}" class="btn btn-primary mt-2 p-3 {{ $product->quantity <= 0 ? 'disabled' : '' }} ">{{ $product->quantity <= 0 ? 'Out Of Stock' : 'Add To Card' }}</a>
        </div>
        <div class="ml-md-5 border-0">
            <img src="{{ $product->imageURL }}" class="card-img img-fluid" alt="">
        </div>
    </section> --}}
</x-layout>
