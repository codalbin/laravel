<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <title>MyApp</title>
    </head>
    <body class="h-full">
        <div class="min-h-full">
            <!-- Use the header component -->
            <x-headband />
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <!-- <x-slot:title>{{ $title }}></x-slot:title> -->
                    <h1 class="text-3xl font-bold tracking-tight text-gray-700">{{$title}}</h1>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <p class="mb-4">Create your tasks list</p>
                    @foreach($tasks as $task)
                        <div class="flex items-center space-x-2 mb-2">
                            <input type='checkbox'>
                            <p>{{ $task['taskName'] }}</p>
                        </div>
                    @endforeach
                </div>
            </main>
        </div>
    </body>
</html>

