<x-layout>
    <h1 class="d-flex justify-content-center mt-5">Register Here!</h1>

    <p class="d-flex justify-content-center mt-3 text-muted">Gain member only benefits by registering!</p>

    <div class="container-fluid p-5 mx-auto justify-content-center mb-5">
        <form action="POST" method="/register" class="justify-content-center">
            <div class="row justify-content-center">
                <div class="form-group col-md-5 justify-content-center">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" class="form-control">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="form-group col-md-5">
                    <label for="name">Username</label>
                    <input type="text" id="name" class="form-control">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="form-group col-md-5">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control">
                    <small class="form-text text-muted">Passwords must be minimum of 5 characters</small>
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
