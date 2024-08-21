@extends('components.app')
@section('content')
    <p style="font-size: larger;color: #2d3748">Home Page</p>
@endsection
@section('contantall')
    <section class="py-6 sm:py-12 dark:bg-gray-100 dark:text-gray-800">
        <div class="container p-6 mx-auto space-y-8">
            <div class="space-y-2 text-center">
                <h2 class="text-3xl font-bold">important tecnologys</h2>
                <p class="font-serif text-sm dark:text-gray-600">The smart tecnologys in Joradn</p>
            </div>
            <div class="grid grid-cols-2 gap-x-3 gap-y-4 md:grid-cols-6 lg:grid-cols-3">
                @foreach($blogs as $blog)
                    <article class="flex flex-col dark:bg-gray-50">
                        <a rel="noopener noreferrer" href="/blogesdetails/{{$blog['id']}}"
                           aria-label="Te nulla oportere reprimique his dolorum">
                            <img alt="" class="object-cover w-full h-52 dark:bg-gray-500"
                                 src="{{ Storage::url('images/'.$blog['image']) }}">
                        </a>
                        <div class="flex flex-col flex-1 p-6">
                            <a rel="noopener noreferrer" href="#"
                               aria-label="Te nulla oportere reprimique his dolorum"></a>
                            <h5 class="text-xs tracking-wider uppercase hover:underline dark:text-violet-600">{{$blog['title']}}</h5>
                            <h3 class="flex-1 py-2 text-lg font-semibold leading-snug">this bloges witten by <span
                                    class="text-xs tracking-wider uppercase hover:underline dark:text-violet-600"
                                    style="font-size: 15px">{{$blog['auth']}}</h3>
                            <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-600">
                                <span> price of product {{$blog['price']}}$</span>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
