@extends('components.app')
@section('content')
    <p style="font-size: larger;color: #2d3748">Bloges Details</p>
    <h1 style="text-align: center ;font-size: larger;color: cornflowerblue">this page view details about each
        tecnology</h1>
@endsection
@section('contantall')
    <div class="relative isolate overflow-hidden bg-gray-850 py-21 sm:py-44">
        <img src="{{ Storage::url('images/image8.jpg') }}"
             class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center"
             style="width: 2000px;height: 500px">
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
             aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div
            class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
            aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h1 style="font-size: larger;color:cornflowerblue"
                    class="text-4xl font-bold tracking-tight text-white sm:text-6xl">this bloges witten by <span
                        style="color: black">{{$blog['auth']}}</span></h1>
                {{--            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Work with us</h2>--}}
                <h6 class="mt-6 text-lg leading-8 text-gray-300" style="color: black">{{$blog['title']}} is
                    A {{$blog['description']}}</h6>
                {{--            <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>--}}
            </div>
        </div>
    </div>
    </div>
@endsection
