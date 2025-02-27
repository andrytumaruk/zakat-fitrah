<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DKM Al-Ikhlas</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-black text-white">
  @include('partial.navbar')


  @yield('content')


  @include('partial.footer')

  <script src="js/script.js"></script>
</body>

</html>