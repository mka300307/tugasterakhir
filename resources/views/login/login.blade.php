@extends('layout.main')
@section('content')
    <main class="form-signin w-50 mt-5 m-auto p-5 border border-2 rounded">
        <form>
            <h1 class="h3 mb-5 fw-bold text-center">Login</h1>

            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-center ">Belum punya akun? <a href="/register">register</a></p>
        </form>
    </main>
@endsection
