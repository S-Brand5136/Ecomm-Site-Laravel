<x-layout>
    <h1 class="d-flex justify-content-center mt-5">Register Here!</h1>

    <p class="d-flex justify-content-center mt-3 text-muted">Gain member only benefits by registering!</p>

    <div class="container-fluid p-5 mx-auto justify-content-center mb-5">
        <form action="/register" method="POST" class="justify-content-center">
            @csrf

            <div class="row justify-content-center">
                <div class="form-group col-md-5 justify-content-center">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required value="{{ old('email') }}"
                        class="form-control">

                    @error('email')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="form-group col-md-5">
                    <label for="name">Username</label>
                    <input type="text" id="name" name="name" required value="{{ old('name') }}" class="form-control">
                    @error('name')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="form-group col-md-5">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required class="form-control">
                    <small class="form-text text-muted">Passwords must be minimum of 5 characters</small>
                    @error('password')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <button type="submit" class="btn btn-block btn-primary">Register</button>
                </div>
            </div>

            <div class="row justify-content-center mt-3 mb-5">
                <div class="col-md-5">
                    <small class="text-muted">Already a member? <a href="/login"> Login Here</a></small>
                </div>
            </div>
        </form>

    </div>
</x-layout>
