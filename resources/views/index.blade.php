<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="static max-w-6xl mx-auto sm:px-6 lg:px-8 ">
            <div class="flex items-center text-center">
                <img src="https://avatars.githubusercontent.com/u/91636558?s=400&v=4" />
                <h1 class="text-5xl font-bold text-gray-200">
                    Jexactyl <span class="text-green-700">Assistant</span> (v{{ config('app.version', '-unknown') }})
                    <br />
                    <a href="{{ route('login') }}">
                        <button class="mt-10 bg-gray-800 rounded-lg py-2 px-4 text-lg">Login to Continue</button>
                    </a>
                </h1>
            </div>
        </div>
    </div>
</body>

</html>
