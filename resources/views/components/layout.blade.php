<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plorars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body style="background-color: #F5F5F5;">
    <x-navbar></x-navbar>
    <main>
        <div>
            {{ $slot }}
        </div>
    </main>

    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        // Get all elements with the class "nav-link"
        const links = document.querySelectorAll('.nav-link');

        // Add an event listener to each element
        links.forEach(link => {
            link.addEventListener('click', () => {
                // Remove the active class from all elements
                links.forEach(otherLink => otherLink.classList.remove('active-navbar'));

                // Add the active class to the clicked element
                link.classList.add('active-navbar');
            });
        });
    </script>
</body>

</html>
