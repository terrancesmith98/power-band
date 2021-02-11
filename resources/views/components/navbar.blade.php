<nav class="navbar navbar-expand-lg shadow-sm navbar-dark" id="main-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <div class="logo">
                <img src="../images/ste-logo-full-white-alt1.svg" alt="Strength Through Education Logo">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown {{request()->routeIs('how-we-help') ? 'active' : ''}}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Programs &amp; Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route('how-we-help')}}">How We Help</a>
                    </div>
                </li>
                <li class="nav-item dropdown {{request()->routeIs('donate') || request()->routeIs('volunteer') || request()->routeIs('newsletter') ? 'active' : ''}}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Get Involved
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route('donate')}}">Donate</a>
                      <a class="dropdown-item" href="{{route('volunteer')}}">Volunteer</a>
                      <a class="dropdown-item" href="{{route('newsletter')}}">Newsletter</a>
                    </div>
                </li>
                <li class="nav-item dropdown {{request()->routeIs('whitepaper') || request()->routeIs('blog') || request()->routeIs('focus-groups') ? 'active' : ''}}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Our Research
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('articles')}}">Articles</a>
                      {{-- <a class="dropdown-item" href="{{route('whitepaper')}}">Whitepaper</a>
                      <a class="dropdown-item" href="{{route('blog')}}">Blog Posts</a>
                      <a class="dropdown-item" href="{{route('focus-groups')}}">Focus Groups</a> --}}
                    </div>
                </li>
                <li class="nav-item dropdown {{request()->routeIs('who-we-are') || request()->routeIs('our-team') || request()->routeIs('newsroom') || request()->routeIs('faqs') ? 'active' : ''}}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      About Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route('who-we-are')}}">Who Are We</a>
                      <a class="dropdown-item" href="{{route('our-team')}}">Our Team</a>
                      <a class="dropdown-item" href="{{route('newsroom')}}">Newsroom</a>
                      <a class="dropdown-item" href="{{route('faqs')}}">FAQs</a>
                    </div>
                </li>
                <li class="nav-item {{request()->routeIs('contact') ? 'active' : ''}}">
                    <a href="{{route('contact')}}" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
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
            </ul>
        </div>
    </div>
</nav>