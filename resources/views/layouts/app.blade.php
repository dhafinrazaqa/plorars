<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaOdQeG4gEfzPzIDF5Qy4Wv4l8XqxSkH/1UoqUzZi0szm3n91v6P5Z5jh" crossorigin="anonymous">
    <title>@yield('title', 'Login Plorars')</title>
    <script defer src="{{ asset('js/loginRegister.js') }}"></script>
    <script defer src="{{ asset('js/handleFormSubmit.js') }}"></script>
</head>
<body>
    @yield('content')
</body>
</html>
