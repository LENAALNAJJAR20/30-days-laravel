@extends('components.app')
@section('content')
    <P>About page</P>
@endsection
@section('contantall')
    <section class="bg-gray-100">
        @foreach($blogdetails as $blog)
            <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                    <div class="max-w-lg">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Smart Tecnologys</h2>
                        <p class="mt-4 text-gray-600 text-lg">{{$blog['description']}}</h6></p>
                        <div class="mt-8">
                        </div>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <img src="{{ Storage::url('image/rjnk39FIQyr1zUNfvR0TUhhuvLsuH6UqXxPX8SZF.png')}}" alt="About Us Image"
                             class="object-cover rounded-lg shadow-md" style="width: 200px">
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
