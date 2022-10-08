<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="static max-w-6xl mx-auto sm:px-6 lg:px-8 ">
                <div class="flex items-center text-center">
                    <img src="https://avatars.githubusercontent.com/u/91636558?s=400&v=4" class="j-left" />
                    <h1 class="text-5xl font-bold text-gray-200">
                        Jexactyl <span class="text-green-700">Assistant</span> (v{{ config('app.version', '-unknown')}})
                        <br />
                        <a href="{{ route('deploy.basic') }}">
                            <button class="mt-10 bg-gray-800 rounded-lg py-2 px-4 text-lg">Deploy</button>
                        </a>
                        <button class="mt-10 bg-gray-800 rounded-lg py-2 px-4 text-lg">Configure</button>
                        <button class="mt-10 bg-gray-800 rounded-lg py-2 px-4 text-lg">Uninstall</button>
                    </h1>
                </div>
                <div class="absolute bottom-0 left-0 flex items-center m-10 text-xl font-semibold text-gray-600">
                    <p>
                        You are currently authenticated.&nbsp;
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">
                                (logout)
                            </button>
                        </form>
                    </p>
                </div>
                <div class="absolute bottom-0 right-0 flex items-center m-10">
                    <p class="text-xl font-semibold text-gray-600">status: ready for deployment (sfd.1)</p>
                </div>
            </div>
        </div>
    </body>
</html>
