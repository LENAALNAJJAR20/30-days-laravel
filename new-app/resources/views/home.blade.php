@extends('components.app')

@section('title')
    <p style="font-size: larger; color: #2d3748">Home Page</p>

    <form action="{{ route('posts.index') }}" method="GET">
        <div class="relative inline-block text-left" style="margin-right:10px">
            <!-- Dropdown menu -->
            <div class="dropdown-menu absolute bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4 left-0 w-48">
                <ul class="py-1">
                    <li>
                        <button type="submit" name="category" value="0" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">
                            All Categories
                        </button>
                    </li>
                    @foreach($categories as $category)
                        <li>
                            <button type="submit" name="category" value="{{ $category->id }}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">
                                {{ $category->name }}
                            </button>
                        </li>
                        <hr>
                    @endforeach
                </ul>
            </div>
        </div>
    </form>
@endsection

@section('content')
    <!-- Icons and Links -->
    <div class="flex justify-center space-x-4 mb-6">
        <i class="fa-solid fa-plus"></i>
        <a href="{{ route('posts.create') }}" style="font-size: 20px; border-radius: 5px; padding: 5px 10px; display: flex; align-items: center;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 30px;">
                <path d="M64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16L64 80zM0 96C0 60.7 28.7 32 64 32l320 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96zM200 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
            </svg>
            Add Post
        </a>
        <a href="{{ route('category.index') }}" style="font-size: 20px; border-radius: 5px; padding: 5px 10px; display: flex; align-items: center;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 30px;">
                <path d="M40 48C26.7 48 16 58.7 16 72l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24L40 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM16 232l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0z"/>
            </svg>
            Categories
        </a>
    </div>

    <!-- Main Content -->
    <section class="py-6 sm:py-12 dark:bg-gray-100 dark:text-gray-800">
        <div class="container p-6 mx-auto space-y-8">
            <div class="space-y-2 text-center">
                <h2 class="text-3xl font-bold">Important Technologies</h2>
                <p class="font-serif text-sm dark:text-gray-600">The Smart Technologies In Jordan</p>
            </div>

            <div class="grid grid-cols-2 gap-x-3 gap-y-4 md:grid-cols-6 lg:grid-cols-3">
                @foreach($posts as $blog)
                    <article class="flex flex-col dark:bg-gray-50">
                        <a rel="noopener noreferrer" href="/blogesdetails/{{$blog['id']}}" aria-label="Blog Details">
                            <img alt="{{ $blog['title'] }}" class="object-cover w-full h-52 dark:bg-gray-500"
                                 src="{{ Storage::url($blog['image']) }}">
                        </a>
                        <div class="flex flex-col flex-1 p-6">
                            <h5 class="text-xs tracking-wider uppercase hover:underline dark:text-violet-600">
                                {{ $blog['title'] }}
                            </h5>
                            <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">
                                THE Blog Written By
                                <span class="text-xs tracking-wider uppercase hover:underline dark:text-violet-600"
                                      style="font-size: 17px; color: #000000">
                                    {{ $blog->author->name }}
                                </span>
                            </h3>

                            <h6 class="flex-1 py-2 text-lg font-semibold leading-snug">

                                <span class="text-xs tracking-wider uppercase hover:underline dark:text-violet-600"
                                      style="font-size: 17px; color: #000000">
                                   {{ $blog->category->name }}
                                </span>
                            </h6>
                            <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-600">
                                <span style="font-size: 15px">Price of product: {{ $blog['price'] }}$</span>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
             {{$posts->links()}}
        </div>
    </section>
@endsection
