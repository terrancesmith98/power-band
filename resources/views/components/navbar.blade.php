<nav class="navbar navbar-expand-lg navbar-dark bg-dark mx-0 w-100">

        <a class="navbar-brand" href="{{ url('/') }}">

                <img src="/images/ampient-logo-white.svg" width="200" alt="">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="px-2 nav-item {{request()->is('contact') ? 'active' : ''}}">
                    <a href="{{route('contact')}}" class="nav-link">Contact</a>
                </li>
                <li class="px-2 nav-item {{request()->is('music') ? 'active' : ''}}">
                    <a href="{{route('music')}}" class="nav-link">Music</a>
                </li>
                <li class="px-2 nav-item {{request()->is('video') ? 'active' : ''}}">
                    <a href="{{route('video')}}" class="nav-link">Video Editing</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            {{-- <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul> --}}
        </div>

</nav>
