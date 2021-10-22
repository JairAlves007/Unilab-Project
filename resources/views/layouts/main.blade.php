<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>UNILAB - @yield('title')</title>
   <link rel="icon" href="/imagem/unilabsimbolo.png">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="/css/estilo.css">
   <link rel="stylesheet" href="/css/dashboard.css">
   <link rel="stylesheet" href="/css/signin.css">
   <link rel="stylesheet" href="/css/edicts.css">
</head>

<body class="text-center">

   @yield('content')

   <script src="https://kit.fontawesome.com/d9cd4d1e67.js" crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="/js/dashboard.js"></script>
   <script src="/js/spin-animation.js"></script>

   @yield('script')
</body>

</html>
