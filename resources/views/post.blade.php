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
                    {{-- <article class="py-8 max-w-screen-md border-b border-gray-500">
                        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
                        <div class="text-base text-gray-500">
                            <a href="/authors/{{ $post->author->username }}" class="hover:underline"> {{ $post->author->name }}</a> | 
                            <a href="/categories/{{ $post->category->slug }}" class="hover:underline"> {{ $post->category->name }} </a> 
                            | {{ $post->date->diffForHumans() }}
                        </div>
                        <p class="my-4 font-light">
                            {!! nl2br(e($post['body'])) !!}
                        </p>
                        <a href="/blog" class="fon-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
                    </article> --}}

                    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
                        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                                <header class="mb-4 lg:mb-6 not-format">
                                    <address class="flex items-center mb-6 not-italic">
                                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{$post->author->name}}">
                                            <div>
                                                <a href="/authors/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{$post->author->name}}</a>
                                                <div class="flex justify-between items-center mb-5 text-gray-500">
                                                    <a href="/categories/{{ $post->category->slug }}" class="hover:underline">
                                                        <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                                            {{ $post->category->name }}
                                                        </span>
                                                    </a>
                                                    <span class="text-sm">{{$post->created_at->diffForHumans()}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </address>
                                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$post->title}}</h1>
                                </header>
                                <p>{{$post->body}}</p>
                                <a href="/blog" class="font-medium text-xs text-blue-500 hover:underline">&laquo; Back to posts</a>
                            </article>
                        </div>
                    </main>
                </div>
            </main>
        </div>
    </body>
</html>

