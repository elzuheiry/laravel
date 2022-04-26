<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css
    "
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
      integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset("style/main.css") }}" />

    <title>Home</title>
  </head>
  <body>
    <header class="header">
      <div class="logo">
        <a href="{{ route("index") }}">
          <h3>FiB</h3>
        </a>
      </div>

      <nav class="nav-bar" id="navBar">
        <ul class="menu">

          @if (!auth("web")->check())
          <li class="menu-link" id="registration">
            <a>{{ __("messages.joinUs") }} <i class="fas fa-caret-down"></i></a>

            <ul class="dropMenu" id="dropMenu">
              <li class="dropMenu-link">
                <a href="{{ route("login") }}">{{ __("messages.login") }}</a>
              </li>
              <li class="dropMenu-link">
                <a href="{{ route("register") }}">{{ __("messages.registration") }}</a>
              </li>
            </ul>
          </li>
          @endif


          <li class="menu-link" id="registration">
            <a>{{ __("messages.language") }} <i class="fas fa-caret-down"></i></a>

            <ul class="dropMenu" id="dropMenu">
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                  <li class="dropMenu-link">
                      <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                          {{ $properties['native'] }}
                      </a>
                  </li>
              @endforeach
          </ul>
          </li>

          <li class="menu-link">
            <a href="{{ route("index") }}">{{ __("messages.home") }}</a>
          </li>

          @auth
            @if (auth()->user()->is_admin === 1)
            <li class="menu-link">
              <a href="">{{ __("messages.vip") }}</a>
            </li>

            <li class="menu-link" id="registration">
              <a>{{ __("messages.offers") }} <i class="fas fa-caret-down"></i></a>

              <ul class="dropMenu" id="dropMenu">
                <li class="dropMenu-link">
                  <a href="{{ route("dashboard") }}">{{ __("messages.dashboard") }}</a>
                </li>

                <li class="dropMenu-link">
                  <a href="{{ route("newOffer") }}">{{ __("messages.addOffer") }}</a>
                </li>
              </ul>
            </li>
            @endif

            <li class="menu-link" id="registration">
              <a>{{ auth()->user()->username }} <i class="fas fa-caret-down"></i></a>

              <ul class="dropMenu" id="dropMenu">

                <li class="dropMenu-link">
                  <a href="{{ route("profile") }}">{{ __("messages.profile") }}</a>
                </li>

                <li class="dropMenu-link">
                  <form action="{{ route("destroy") }}" method="post">
                    @csrf
                    <button type="submit">{{ __("messages.logout") }}</button>
                  </form>
                </li>
              </ul>
            </li>
          @endauth
        </ul>

        <div class="times" id="times">
          <i class="fas fa-times"></i>
        </div>
      </nav>

      <div class="toggles" id="toggles">
        <div class="toggle"></div>
        <div class="toggle"></div>
      </div>
    </header>

    @yield('content')

    <footer class="footer">
      <div class="footer-container">
        <div class="footer-data">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Praesentium veritatis nam amet vitae aspernatur modi ullam officia
            culpa
          </p>
          <a href="">officia</a>
          <a href="">veritatis</a>
        </div>
      </div>
    </footer>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
      integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="{{ asset("js/index.js") }}"></script>
  </body>
</html>
