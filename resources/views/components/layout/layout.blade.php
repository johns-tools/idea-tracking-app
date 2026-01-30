<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Default Title' }}</title>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>

    <body class="bg-background text-foreground">
        <x-layout.navigation />
        <main>
            {{ $slot }}
        </main>
    </body>

</html>
