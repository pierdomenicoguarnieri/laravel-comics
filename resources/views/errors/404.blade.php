<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

    <title>Laravel Comics | Error 404 Not Found</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

  </head>

  <body>

    <main class="vh-100 bg-dark position-relative">
      <div class="pg-404-wrapper h-100">
      </div>
      <div class="pg-text h-100 w-100 d-flex flex-column align-items-center justify-content-center text-white">
        <h1>Errore 404! Pagina non trovata!</h1>

        <a href="{{route('comics')}}" class="mt-3"><button class="btn btn-primary text-uppercase">Torna alla Home</button></a>
      </div>
    </main>

  </body>

</html>
