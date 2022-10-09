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
                <h1 class="text-5xl font-bold text-gray-200 text-center">
                    Deploy <span class="text-green-700">Jexactyl</span>
                </h1>
                <h5 class="text-xl font-bold text-gray-400 text-center mt-4">
                    Step 1/4 - Basic Settings
                </h5>
                <form method="POST" action="{{ route('deploy.basic') }}">
                    @csrf
                    <x-form-card>
                        <div class="mb-4">
                            <x-input-label for="url" :value="__('Panel URL')" />
                            <x-text-input id="url" class="block mt-1 w-full" type="text" name="url" placeholder="https://panel.example.com" />
                            <x-input-error :messages="$errors->get('url')" class="mt-2" />
                        </div>
                        <div class="my-4">
                            <x-input-label for="name" :value="__('Panel Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Jexactyl" required />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="my-4">
                            <x-input-label for="logo" :value="__('Panel Logo')" />
                            <x-text-input id="logo" class="block mt-1 w-full" type="text" name="logo" placeholder="https://t.co/hello.png" />
                            <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-8">
                            <x-primary-button class="ml-3">
                                Next &#62;
                            </x-primary-button>
                        </div>
                    </x-form-card>
                </form>
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
                    <p class="text-xl font-semibold text-gray-600">status: setup in process (cpa.1)</p>
                </div>
            </div>
        </div>
    </body>
</html>
