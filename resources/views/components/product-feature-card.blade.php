@props(['product'])

<article {{ $attributes->merge(['class' => "container-fluid d-xs-block d-md-flex mt-5"]) }}>
    <div class="container text-align-center d-flex flex-column justify-content-around mb-5">
        <h1 class="display-1">
            {{ $product->name }}
        </h1>
        <div class="d-flex flex-column justify-content-around">
            <h3 class="text-muted display-4">{{ $product->description }}</h3>
            <div class="d-flex flex-column">
                <h4 class="mt-3 font-weight-bold">Price: <span class="font-weight-bold"></span>${{ ($product->price) / 100 }}</h4>
                <h4 class="mt-3 font-weight-bold">Stock: <span class="font-weight-bold"></span>{{ ($product->quantity) }}</h4>
            </div>
        </div>
        <a href="products/{{ $product->slug }}" class="btn btn-primary mt-2 p-3">Shop Now</a>
    </div>
    <div class="ml-md-5 border-0">
        <img src="{{ $product->imageURL }}" class="card-img img-fluid" alt="">
    </div>
</article>
