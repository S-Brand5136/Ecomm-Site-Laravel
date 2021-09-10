<x-layout>
    <main class="max-height container mt-5">
        <header class="container text-center mt-5">
            <h1 class="font-weight-bold display-4">Check-Out</h1>
        </header>

        <section class="row justify-content-center mt-5">
            @auth
                <x-shopping-cart-table :items='$cartItems' />
                <x-shopping-cart-total />
            @else
                <x-cart-guest />
            @endauth
        </section>
    </main>
</x-layout>
