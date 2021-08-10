<x-layout>
    <section>
        <div>
            <h1>
                Lorem ipsum dolor.
            </h1>
            <h3>amet consectetur adipisicing elit.</h3>
            <button class="btn btn-primary">Shop Now</button>
        </div>
        <div>
            <img src="{{ $products->first()->imageURL }}" alt="">
        </div>
    </section>

    @foreach ($products as $product)

    @endforeach
</x-layout>
