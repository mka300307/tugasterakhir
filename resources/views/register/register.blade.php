@extends('layout.main')
@section('content')



    <main class="form-signin w-50 mt-5 m-auto p-5 border border-2 rounded">
        <form method="POST" action="/register/add">
            @csrf
            <h1 class="h3 mb-5 fw-bold text-center ">Register</h1>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="name" placeholder="Prabow Subianto" name="name">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Password">
                <label for="floatingPassword">Comfrim Password</label>
            </div>
            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            <p class="mt-5 mb-3 text-center ">Sudah punya akun? <a href="/login">Login</a></p>
        </form>
    </main>
@endsection
