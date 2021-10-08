<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>UNILAB - @yield('title')</title>
   <link rel="icon" href="/imagem/unilabsimbolo.png">
   {{-- <link rel="icon" href="/imagem/favicon.ico"> --}}
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="/css/estilo.css">
   <link rel="stylesheet" href="/css/dashboard.css">
   <link rel="stylesheet" href="/css/signin.css">
   <link rel="stylesheet" href="/css/edicts.css">
   <link rel="stylesheet" href="/css/fontawesome.min.css">
</head>

<body class="text-center">

   @yield('content')

   <script defer src="/js/fontawesome-all.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="/js/jquery-3.2.1.slim.min.js"></script>
   <script src="/js/popper.min.js"></script>
   <script src="/js/bootstrap.min.js"></script>
   <script src="/js/personalizado.js"></script>
   <script src="/js/scrollreveal.min.js"></script>
   <script src="/js/dashboard.js"></script>

   <script>
      $('.carousel').carousel({
         interval: 2000
      })
   </script>
</body>

</html>
