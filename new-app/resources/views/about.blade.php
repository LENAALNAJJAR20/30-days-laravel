@extends('components.app')

@section('title')
    About Page
@endsection

@section('content')
    <section class="bg-gray-100">
        @foreach($blogdetails as $blog)
            <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                    <!-- Content Section -->
                    <div class="max-w-lg">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Smart Technologies</h2>
                        <p class="mt-4 text-gray-600 text-lg">{{ $blog['description'] }}</p>
                    </div>

                    <!-- Image Section -->
                    <div class="mt-12 md:mt-0">

                        <img src="{{ Storage::url('image/dAaevN2hOTJmGMr3KDlxPCjk2ZxP6YcobCcG6MMs.jpg') }}"
                             alt="About Us Image"
                             class="object-cover rounded-lg shadow-md">

                        <img src="{{ Storage::url('image/rjnk39FIQyr1zUNfvR0TUhhuvLsuH6UqXxPX8SZF.png')}}" alt="About Us Image"
                             class="object-cover rounded-lg shadow-md" style="width: 200px">

                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
