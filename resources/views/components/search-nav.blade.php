<div class="container p-md-5 p-3">
    <h2>Search our Clothing Line!</h2>
    <div class="row justify-content-center align-items-center">
        <div class="col-xs-6 col-md-6 mt-3">
            <x-category-drop-down />
        </div>

        <div class="col-xs-6 col-md-6 mt-3">
            <form action="/products/" method="GET">
                <input type="text" placeholder="Search.." name="search" class="form-control" id="search" aria-describedby="search" value="{{ request('search') }}">
            </form>
        </div>
    </div>
</div>
