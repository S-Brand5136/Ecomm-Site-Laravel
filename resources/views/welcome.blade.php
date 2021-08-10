<x-layout>
        <section class="container-fluid d-xs-block flex-row d-md-flex mt-5">
            <div class="container text-align-center d-flex flex-column justify-content-around mb-5">
                <h1 class="display-1">
                    {{ $products[0]->name }}
                </h1>
                <div class="d-flex flex-column justify-content-around">
                    <h3 class="text-muted display-4">{{ $products[0]->description }}</h3>
                    <div class="d-flex flex-column">
                        <h4 class="mt-3 font-weight-bold">Price: <span class="font-weight-bold"></span>${{ ($products[0]->price) / 100 }}</h4>
                        <h4 class="mt-3 font-weight-bold">Stock: <span class="font-weight-bold"></span>{{ ($products[0]->quantity) }}</h4>
                    </div>
                </div>
                <a href="products/{{ $products[0]->slug }}" class="btn btn-primary mt-2 p-3">Shop Now</a>
            </div>
            <div class="ml-md-5 border-0">
                <img src="{{ $products[0]->imageURL }}" class="card-img img-fluid" alt="">
            </div>
        </section>

        <section class="container-fluid d-xs-block flex-row-reverse d-md-flex mt-5">
            <div class="container text-align-center d-flex flex-column justify-content-around mb-5">
                <h1 class="display-1">
                    {{ $products[1]->name }}
                </h1>
                <div class="d-flex flex-column justify-content-around">
                    <h3 class="text-muted display-4">{{ $products[1]->description }}</h3>
                    <div class="d-flex flex-column">
                        <h4 class="mt-3 font-weight-bold">Price: <span class="font-weight-bold"></span>${{ ($products[1]->price) / 100 }}</h4>
                        <h4 class="mt-3 font-weight-bold">Stock: <span class="font-weight-bold"></span>{{ ($products[1]->quantity) }}</h4>
                    </div>
                </div>
                <a href="products/{{ $products[1]->slug }}" class="btn btn-primary mt-2 p-3">Shop Now</a>
            </div>
            <div class="ml-md-5 border-0">
                <img src="{{ $products[1]->imageURL }}" class="card-img img-fluid" alt="">
            </div>
        </section>
</x-layout>
