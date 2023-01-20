<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/sass/style.scss', 'resources/js/app.js'])
        <script type="module">

            // Enable pusher logging - don't include this in production
            // Pusher.logToConsole = {!! json_encode(config('app.debug')) !!};

            // var pusher = new Pusher({!! json_encode(config('broadcasting.connections.pusher.key')) !!}, {
            //     cluster: 'ap1'
            // });

            // var channel = pusher.subscribe('global-channel');
            // channel.bind('global-event', function(data) {
            //     console.log(data);
            //     alert(JSON.stringify(data));
            // });
        </script>
    </head>
    <body class="font-sans antialiased"
        x-data="{ darkMode: false }"
        x-init="if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            localStorage.setItem('darkMode', JSON.stringify(true));
        }
        darkMode = JSON.parse(localStorage.getItem('darkMode'));
        $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        x-cloak>
        <div x-bind:class="{'dark' : darkMode === true}" class="min-h-screen bg-gray-100 dark:bg-gray-900 flex flex-col justify-between">
            <div>
                @include('layouts.navigation')

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-600 shadow">
                        <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>
