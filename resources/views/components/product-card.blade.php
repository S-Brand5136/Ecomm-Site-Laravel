@props(['product'])

<article {{ $attributes->merge(['class' => "card mb-3"]) }} style="max-width: 640px">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{ $product->imageURL }}" class="card-img-top" alt="">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title">
                    {{ $product->name }}
                </h2>
                <p class="card-text">{{ $product->description }}</p>
                <div class="d-flex flex-row justify-content-around">
                    <p class="card-text text-muted">Price: <span class="font-weight-bold"></span>${{ ($product->price) / 100 }}</p>
                    <p class="card-text text-muted">Stock: <span class="font-weight-bold"></span>{{ ($product->quantity) }}</p>
                </div>
                <div class="d-flex flex-row">
                    <a href="products/{{ $product->slug }}" class="btn-block btn btn-primary mt-3">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</article>
