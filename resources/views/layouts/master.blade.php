<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title') - {{ config('app.name')}}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
        <link  rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav id="menu" class="">
            <div id="logo">
                <img src="{{asset('/images/logo.png')}}" alt="Semeicardia Give Aways Logo">
            </div>
        </nav>

        <main>
            <h1 id="page_title">@yield('title')</h1>
            @include('includes.flash')
            <section id="content">
                @yield('content')
            </section>
        </main>

    </body>
</html>
