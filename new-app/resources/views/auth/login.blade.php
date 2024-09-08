@extends('components.app')

@section('title')
    login Page
@endsection

@section('content')
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-600 bg-no-repeat bg-cover relative items-center" style="background-image: url({{ Storage::url('image/L0JakOoakx2RpEos3h57392lOoVzsZ2dcgJy0lLw.jpg') }});">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Keep it special</h1>
                <p class="text-3xl my-4">Capture your personal memory in unique way, anywhere.</p>
            </div>
            <div class="bottom-0 absolute p-4 text-center right-0 left-0 flex justify-center space-x-4">
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0" style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" style="background-image: url({{ Storage::url('image/L0JakOoakx2RpEos3h57392lOoVzsZ2dcgJy0lLw.jpg') }});">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-30">
                <h1 class="my-6" style="font-size: 55px">
                   Login
                </h1>
                <div class="py-6 space-x-2">
                    <span class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white">f</span>
                    <span class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white">G+</span>
                    <span class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white">in</span>
                </div>
                <p class="text-gray-100">
                    or use email your account
                </p>
                <form method="POST" action="/login" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    @csrf

                    <div class="pb-2 pt-4">
                        <input type="email" name="email" id="email" placeholder="Email" :value="old('email')"  class="block w-full p-4 text-lg rounded-sm bg-black" required>
                        @error('email')
                        <div style="color: white; font-weight: bold; font-size: 13px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-4 text-lg rounded-sm bg-black" type="password" name="password" id="password" placeholder="Password" required>
                        @error('password')
                        <div style="color: white; font-weight: bold; font-size: 13px">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-right text-gray-400 hover:underline hover:text-gray-100">
                        <a href="#">Forgot your password?</a>
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button class="uppercase block w-full p-4 text-lg rounded-full bg-indigo-500 hover:bg-indigo-500 focus:outline-none" style="background-color: black">login in </button>
                    </div>

                </form>
            </div>
        </div>
    </section>

@endsection
