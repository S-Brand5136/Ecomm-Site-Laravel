<x-layout>
    <h1 class="d-flex justify-content-center mt-5">Log in Here!</h1>

    <p class="d-flex justify-content-center mt-3 text-muted">Continue shopping from wherever you left off!</p>

    <div class="container-fluid p-5 mx-auto justify-content-center mb-5">
        <form action="POST" method="/login" class="justify-content-center">
            @csrf

            <div class="row justify-content-center">
                <div class="form-group col-md-5 justify-content-center">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" class="form-control">

                    @error('email')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="form-group col-md-5">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control">
                    <small class="form-text text-muted">Passwords must be minimum of 5 characters</small>
                    @error('password')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>
            </div>

            <div class="row justify-content-center mt-3 mb-5">
                <div class="col-md-5">
                    <small class="text-muted">Not a member yet? <a href="/register"> Register Here</a></small>
                </div>
            </div>
        </form>

    </div>
</x-layout>
