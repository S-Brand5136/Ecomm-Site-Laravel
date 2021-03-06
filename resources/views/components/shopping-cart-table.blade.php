@props(['items'])

<div class="card col-sm-12 col-md-7">
    <div class="card-body">
        <div class="card-title font-weight-bolder">Shopping Cart</div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope='col'>Product Name</th>
                    <th scope='col'>Quantity</th>
                    <th scope='col'>Price</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <th></th>
                        <th>{{ $item->name }}</th>
                        <th>{{ $item->qty }}</th>
                        <th>{{ $item->price / 100 }}</th>
                        <th><button class="badge border-0 badge-danger text-wrap">X</button></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row border-top py-3  px-4 align-items-end">
        <a href="/products" class="btn btn-light">
            < Countinue Shopping</a>
    </div>
</div>
