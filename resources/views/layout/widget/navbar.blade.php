<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-body-tertiary rounded">
    <div class="container">
        <a class="navbar-brand  " href="#"><img src="/idi.png" alt="Logo" style="max-height: 40px;"> Dokter</a>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/profesi/dokter">Dokter</a>
                </li>
            </ul>
        </div>
        <div>
{{--            <a href="#"><a class="nav-link" href="/login">Login</a></a>--}}
            @auth
                Hi, {{auth()->user()->name}}

                <form method="POST" action="/logout">
                    @csrf
                    <a href="#"><a class="nav-link" href="/dashbord">Dashbord</a></a>
                    <button class="dropdown-item" type="submit">Log out</button>
                </form>
            @else
                <a href="#"><a class="nav-link" href="/login">Login</a></a>
            @endauth
        </div>
    </div>
</nav>
