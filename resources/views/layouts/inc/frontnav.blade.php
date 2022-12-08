<nav id="tepaga" class=" navbar navbar-light  fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- It is better to go and invent tomorrow than to worry about the fact that yesterday was so-so. -->
        @if (Route::has('login'))
            <div class="">
                @auth
                    @if (Auth::user()->role_as == '1')
                        <a class="text-white" href="{{ url('/home') }}" class="">Home</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <!-- <a class="navbar-brand" href="#">It is better to go and invent tomorrow than to worry about the fact that yesterday was so-so.</a> -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset bg-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            @foreach ($sidebar as $item)
                <div class="img">
                    <img src="{{ asset('assets/uploads/sidebar/'.$item->image) }}" alt="">
                </div>

                <h1><a class="nav-link active text-center" aria-current="page" href="#">{{ $item->name }}</a></h1>
            @endforeach



            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    @foreach ($category as $item)
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ $item->link }}">{{  $item->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>
