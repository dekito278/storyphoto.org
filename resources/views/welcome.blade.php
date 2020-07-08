
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png'" sizes="192x192"  href="{{ asset('img/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png'" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
        <link rel="icon" type="image/png'" sizes="96x96" href="{{ asset('img/favicon-96x96.png') }}">
        <link rel="icon" type="image/png'" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
        
                <!-- HTML Meta Tags -->
        <title>StoryPhoto</title>
        <meta name="description" content="storyphoto merupakan webapp untuk membuat pameran fotografi secara digital.">
        
        <!-- Google / Search Engine Tags -->
        <meta itemprop="name" content="StoryPhoto">
        <meta itemprop="description" content="storyphoto merupakan webapp untuk membuat pameran fotografi secara digital.">
        <meta itemprop="image" content="https://ibb.co/YQGj6Vg">
        
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://storyphoto.org">
        <meta property="og:type" content="website">
        <meta property="og:title" content="StoryPhoto">
        <meta property="og:description" content="storyphoto merupakan webapp untuk membuat pameran fotografi secara digital.">
        <meta property="og:image" content="https://ibb.co/YQGj6Vg">
        
        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="StoryPhoto">
        <meta name="twitter:description" content="storyphoto merupakan webapp untuk membuat pameran fotografi secara digital.">
        <meta name="twitter:image" content="https://ibb.co/YQGj6Vg">

        <!-- Meta Tags Generated via http://heymeta.com -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       
    
    </head>
    <!-- Styles -->
    <style>
        
        html, body {
                
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }    
        /* Aylen */
        .button.button--aylen {
            
            color: #37474f;
            overflow: hidden;
            -webkit-transition: color 0.3s;
            transition: color 0.3s;
        }
        .button--aylen.button--inverted {
            background: none;
            
        }
        .button--aylen::before,
        .button--aylen::after {
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            bottom: 100%;
            left: 0;
            z-index: -1;
            -webkit-transition: -webkit-transform 0.3s;
            transition: transform 0.3s;
            -webkit-transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
            transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
        }
        .button--aylen::before {
            background: #7986cb;
        }
        .button--aylen::after {
            background: #fff;
        }
        .button--aylen:hover {
            color: ##3f51b5;
        }
        .button--aylen:hover::before,
        .button--aylen:hover::after {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
        .button--aylen:hover::after {
            -webkit-transition-delay: 0.175s;
            transition-delay: 0.175s;
        }

    </style>
    <body>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a class="button button--aylen button--round-l button--text-thick" href="{{ url('/home') }}"role="button">Home</a>
                {{-- <a href="{{ url('/home') }}">Home</a> --}}
                @else

                {{-- <a class="btn btn-primary btn-sm" href="{{ route('login') }}" role="button" >Login</a> --}}
                <a class="button button--aylen button--round-1 button--text-thick" href="{{ route('login') }}" role="button">Login</a>
                @if (Route::has('register'))
                {{-- <a class="btn btn-primary btn-sm" href="{{ route('register') }}" role="button">Register</a> --}}
                <a class="button button--aylen button--round-1 button--text-thick" href="{{ route('register') }}" role="button">register</a>
                @endif
                @endauth
            </div>
            @endif
           
            <div class="content">
                <div class="title m-b-md">
                    StoryPhoto
                </div>
                <div class="links">
                    <a href="https://github.com/dekito278/tentangfoto">Docs</a>
                    <a href="{{ route('Panduan') }}">Panduan aplikasi</a>
                    <a href="{{ route('About') }}">About us</>
                    
                </div>
            </div>
        </div>
        
    
    </body>
    <script src="js/main.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
