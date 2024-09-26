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
                    
                    @foreach ($posts as $post)
                        <article class="py-8 max-w-screen-md border-b border-gray-500">
                            <a href="/blog/{{ $post['slug'] }}" class="hover:underline">
                                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
                            </a>
                            <div class="text-base text-gray-500">
                                <a href="/authors/{{ $post->author->username }}" class="hover:underline"> {{ $post->author->name }}</a> | 
                                <a href="/categories/{{ $post->category->slug }}" class="hover:underline"> {{ $post->category->name }}</a> 
                                | {{ $post->date->diffForHumans() }}
                                {{-- <a href="#"> {{ $post['author'] }}</a> | {{ $post->created_at->format('j F Y') }} --}}
                                {{-- <a href="#"> {{ $post['author'] }}</a> | {{ $post['date'] }} --}}
                            </div>
                            <p class="my-4 font-light">
                                {{ Str::limit($post['body'], 100) }}
                            </p>
                            <a href="/blog/{{ $post['slug'] }}" class="fon-medium text-blue-500 hover:underline">Read more &raquo;</a>
                        </article>
                        <!-- <article class="py-8 max-w-screen-md border-b border-gray-500">
                            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Article 2</h2>
                            <div class="text-base text-gray-500">
                                <a href="#"> Albin Tardivel</a> | 1 February 2024
                            </div>
                            <p class="my-4 font-light">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <a href="" class="fon-medium text-blue-500 hover:underline">Read more &raquo;</a>
                        </article> -->
                    @endforeach
                </div>
            </main>
        </div>
    </body>
</html>

