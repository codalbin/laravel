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
                        <article class="py-8 max-w-screen-md border-b border-gray-500">
                            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
                            <div class="text-base text-gray-500">
                                <a href="/authors/{{ $post->author->id }}" class="hover:underline"> {{ $post->author->name }}</a> | {{ $post->date->diffForHumans() }}
                                {{-- <a href="#"> {{ $post['author'] }}</a> | {{ $post->created_at->format('j F Y') }} --}}
                                {{-- <a href="#"> {{ $post['author'] }}</a> | {{ $post['date'] }} --}}
                            </div>
                            <p class="my-4 font-light">
                                <!-- Allow to skips lines in the text -->
                                {!! nl2br(e($post['body'])) !!}
                            </p>
                            <a href="/blog" class="fon-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
                        </article>
                </div>
            </main>
        </div>
    </body>
</html>

