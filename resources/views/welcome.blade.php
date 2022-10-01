<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Starter Template · Bootstrap v5.2</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .icon-list li::before {
            display: block;
            flex-shrink: 0;
            width: 1.5em;
            height: 1.5em;
            margin-right: .5rem;
            content: "";
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23212529' viewBox='0 0 16 16'%3E%3Cpath d='M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z'/%3E%3C/svg%3E") no-repeat center center / 100% auto;
        }
    </style>
</head>
<body>

<div class="col-lg-8 mx-auto p-4 py-md-5">
    <header class="d-flex align-items-center justify-content-between pb-3 mb-5 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
                <title>Bootstrap</title>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                      fill="currentColor"></path>
            </svg>
            <span class="fs-4">Starter template</span>
        </a>
        <ul class="list-inline mb-0">
            @guest
                @if (Route::has('login'))
                    <li class="list-inline-item">
                        <a class="text-reset text-decoration-none" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="list-inline-item">
                        <a class="text-reset text-decoration-none" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
    </header>

    <main>
        <h1>Get started with Bootstrap</h1>
        <p class="fs-5 col-md-8">Quickly and easily get started with Bootstrap's compiled, production-ready files with
            this barebones example featuring some basic HTML and helpful links. Download all our examples to get
            started.</p>

        <div class="mb-5">
            <a href="/docs/5.2/examples/" class="btn btn-primary btn-lg px-4">Download examples</a>
        </div>

        <hr class="col-3 col-md-2 mb-5">

        <div class="row g-5">
            <div class="col-md-6">
                <h2>Starter projects</h2>
                <p>Ready to beyond the starter template? Check out these open source projects that you can quickly
                    duplicate to a new GitHub repository.</p>
                <ul class="icon-list ps-0">
                    <li class="d-flex align-items-start mb-1"><a href="https://github.com/twbs/bootstrap-npm-starter"
                                                                 rel="noopener" target="_blank">Bootstrap npm
                            starter</a></li>
                    <li class="text-muted d-flex align-items-start mb-1">Bootstrap Parcel starter (coming soon!)</li>
                </ul>
            </div>

            <div class="col-md-6">
                <h2>Guides</h2>
                <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
                <ul class="icon-list ps-0">
                    <li class="d-flex align-items-start mb-1"><a href="/docs/5.2/getting-started/introduction/">Bootstrap
                            quick start guide</a></li>
                    <li class="d-flex align-items-start mb-1"><a href="/docs/5.2/getting-started/webpack/">Bootstrap
                            Webpack guide</a></li>
                    <li class="d-flex align-items-start mb-1"><a href="/docs/5.2/getting-started/parcel/">Bootstrap
                            Parcel guide</a></li>
                    <li class="d-flex align-items-start mb-1"><a href="/docs/5.2/getting-started/vite/">Bootstrap Vite
                            guide</a></li>
                    <li class="d-flex align-items-start mb-1"><a href="/docs/5.2/getting-started/contribute/">Contributing
                            to Bootstrap</a></li>
                </ul>
            </div>
        </div>
    </main>
    <footer class="pt-5 my-5 text-muted border-top">
        Created by the Bootstrap team &middot; &copy; 2022
    </footer>
</div>

</body>
</html>
