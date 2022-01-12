<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UNILAB - @yield('title')</title>
  <link rel="icon" href="/imagem/unilabsimbolo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/dashboard.css">
  <link rel="stylesheet" href="/css/signin.css">
  <link rel="stylesheet" href="/css/edicts.css">
  <link rel="stylesheet" href="/css/frequencia.css">
  <link rel="stylesheet" href="/css/timeline.css">
  <link rel="stylesheet" href="/css/form-types.css">
  <link rel="stylesheet" href="/css/estilo.css">

</head>

<body class="text-center">

  @yield('content')

  <script src="https://cdn.tiny.cloud/1/0egjw3r1r8vuitx2k5sxjycb4fg4clxzob5ky0lhboa75w0b/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>

  <script src="https://kit.fontawesome.com/d9cd4d1e67.js" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
  </script>
  <script src="/js/dashboard.js"></script>
  <script src="/js/spin-animation.js"></script>
  <script src="/js/timeline.js"></script>

  @yield('script')
</body>

</html>
