<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['title'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        background-color: #DFEDF2;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 70px 110px;
        }

        .card {
            background-color: #fff;
            padding: 50px;
            border-radius: 8px;
            height: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .card img {
            border-radius: 10px;
            height: auto;
            float: left;
        }
        .card-body {
            margin-top: 20px;
            text-align: left;
            padding-left: 150px;
        }
        .footer {
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
        padding: 20px 50px; 
        background-color: #384462; 
        }

        .footer img {
            width: 150px;
        }

        .copyright {
            text-align: center; 
            flex-grow: 1;
            color: white;
        }

        .contact-us {
            text-align: right; 
            color: white;
        }

        .socials {
            display: flex; 
            gap: 10px;
        }

        .socials a img {
            width: 30px; 
            height: auto;
        }

    </style>
</head>
<body>
    <div>
        <x-navbar-user/>
    </div>
    <div class="container">
        <div class="card">
            <img src="{{ asset('images/logo cheva3.jpg') }}" alt="Logo" style="width: 100px; height: 100px;">
            <div class="card-body">
            <h3>{{ $data['title'] }}</h3>
            <p>At Faculty: {{ $data['faculty'] }}</p>
            <p>Link: <a href="{{ $data['link'] }}" target="_blank">{{ $data['link'] }}</a></p>
            <h4>Description</h4>
            <p>{{ $data['description'] }}</p>
            </div>
        </div>
    </div>
    <x-footer />
</body>
</html>
