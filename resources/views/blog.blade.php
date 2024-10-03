<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- @vite('resources/css/app.css') --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-0">
                        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                            @foreach ($posts as $post)
                            
                                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                    <div class="flex justify-between items-center mb-5 text-gray-500">
                                        <a href="/categories/{{ $post->category->slug }}" class="hover:underline">
                                            <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                                {{ $post->category->name }}
                                            </span>
                                        </a>
                                        <span class="text-sm">{{$post->created_at->diffForHumans()}}</span>
                                    </div>
                                    <a href="/blog/{{ $post->slug }}">
                                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                                            {{$post->title}}
                                        </h2>
                                    </a>
                                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit ($post->body, 150) }}</p>
                                    <div class="flex justify-between items-center">
                                        <a href="/authors/{{ $post->author->username }}" class="hover:underline">
                                            <div class="flex items-center space-x-4">
                                                <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{$post->author->name}}" />
                                                <span class="font-medium text-xs dark:text-white">
                                                    {{$post->author->name}}
                                                </span>
                                            </div>
                                        </a>
                                        <a href="/blog/{{ $post->slug }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 text-xs hover:underline">
                                            Read more
                                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </article>      
                                
                                {{-- <article class="py-8 max-w-screen-md border-b border-gray-500">
                                    <a href="/blog/{{ $post['slug'] }}" class="hover:underline">
                                        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
                                    </a>
                                    <div class="text-base text-gray-500">
                                        <a href="/authors/{{ $post->author->username }}" class="hover:underline"> {{ $post->author->name }}</a> | 
                                        <a href="/categories/{{ $post->category->slug }}" class="hover:underline"> {{ $post->category->name }}</a> 
                                        | {{ $post->date->diffForHumans() }}
                                    </div>
                                    <p class="my-4 font-light">
                                        {{ Str::limit($post['body'], 100) }}
                                    </p>
                                    <a href="/blog/{{ $post['slug'] }}" class="fon-medium text-blue-500 hover:underline">Read more &raquo;</a>
                                </article> --}}
                                
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
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>

