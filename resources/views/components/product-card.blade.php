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
                <div class="d-flex flex-row">
                    <p class="card-text text-muted mr-3">Price: <span class="font-weight-bold"></span>${{ ($product->price) / 100 }}</p>
                    <p class="card-text text-muted">Stock: <span class="font-weight-bold"></span>{{ ($product->quantity) }}</p>
                </div>
                <p class="card-text"><small class="text-muted">Posted: {{ $product->created_at->diffForHumans() }}</small></p>
                <div class="d-flex flex-row">
                    <a href="products/{{ $product->slug }}" class="btn btn-primary mt-2 p-3 {{ $product->quantity <= 0 ? 'disabled' : '' }} ">{{ $product->quantity <= 0 ? 'Out Of Stock' : 'Add To Card' }}</a>
                </div>
            </div>
        </div>
    </div>
</article>
