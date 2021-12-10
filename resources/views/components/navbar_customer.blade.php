<nav class="navbar navbar-expand-lg navbar-light bg-white px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">KEYPEDIA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($categories as $c)
                            <li><a class="dropdown-item" href="/category/{{ $c->id }}">{{ $c->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      USER
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/cart">My Cart</a></li>
                        <li><a class="dropdown-item" href="/transaction">Transaction History</a></li>
                        <li><a class="dropdown-item" href="/changePassword">Change Password</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link">{{ date('D, d-M-Y'); }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>