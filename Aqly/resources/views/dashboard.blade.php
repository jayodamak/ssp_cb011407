<x-guest-layout>
{{-- {{dd(auth()->user()->role)}} --}}




    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <a href="{{url('/')}}">Home</a>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}

    {{-- <p style="font-size: 50px"> You are now logged in !!</p> --}}


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            background-color: #f8fafc;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }

        .navbar {
            background-color: #3490dc;
            padding: 1rem;
            text-align: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            margin-right: 1rem;
        }

        .container {
            text-align: center;
            margin-top: 2rem;
        }

        .content-area {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border-radius: 0.5rem;
            padding: 2rem;
            max-width: 400px;
            margin: 0 auto;
        }

        .welcome-message {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1.5rem;
        }

        .logged-in-message {
            font-size: 2rem;
            font-weight: bold;
            color: #38a169;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <!-- Navigation bar -->
    <div class="navbar">
        <a href="#" class="navbar-link">Home</a>
        <!-- Add more links as needed -->
    </div>

    <!-- Content area -->
    <div class="container">
        <!-- Content area -->
        <div class="content-area">
            <!-- Welcome component (replace this with your actual content) -->
            <div class="welcome-message">Welcome to AQLY! </div>

            <!-- Custom message -->
            <p class="logged-in-message">You are now logged in!</p>
        </div>
    </div>
</body>

</html>

</x-guest-layout>
