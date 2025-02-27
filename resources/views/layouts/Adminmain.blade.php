<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    @include('AdminComponent.navbar')

    <div class="flex">
        <!-- Sidebar -->
        @include('AdminComponent.sidebar')

        <!-- Main Content -->
        @yield('content')
    </div>
</body>

</html>