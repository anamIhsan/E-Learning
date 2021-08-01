@extends('layouts.appLogin')

@section('title')
    Learn Homepage
@endsection

@section('content')

    {{-- Slide --}}
    <div class="p-20 bg-splide">
        <div class="container mx-auto">
            <div id="splide1" class="splide">
                <div class="splide__track px-16">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="flex space-x-16 items-center">
                                <div class="">
                                    <img src="{{ asset('images/iklan1.png') }}" class="w-full rounded-xl">
                                </div>
                                <div class="space-y-16">
                                    <h1 class="text-3xl text-gray-700 font-bold w-404">
                                        Nvidia and UE4 Technologies Practice
                                    </h1>
                                    <div class="flex items-center space-x-9">
                                        <a href="{{ route('class') }}">
                                            <button 
                                                class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-8 rounded-lg text-white font-bold outline-none">
                                                START COURSE
                                            </button>
                                        </a>
                                        <p class="text-gray-500">
                                            100 x ditonton
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex space-x-16 items-center">
                                <div class="">
                                    <img src="{{ asset('images/iklan2.jpeg') }}" class="w-full rounded-xl">
                                </div>
                                <div class="space-y-16">
                                    <h1 class="text-3xl text-gray-700 font-bold w-404">
                                        Road Bike Manual or How to Be a Champion.
                                    </h1>
                                    <div class="flex items-center space-x-9">
                                        <a href="{{ route('class') }}">
                                            <button 
                                                class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-8 rounded-lg text-white font-bold outline-none">
                                                START COURSE
                                            </button>
                                        </a>
                                        <p class="text-gray-500">
                                            100 x ditonton
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex space-x-16 items-center">
                                <div class="">
                                    <img src="{{ asset('images/iklan3.jpeg') }}" class="w-full rounded-xl">
                                </div>
                                <div class="space-y-16">
                                    <h1 class="text-3xl text-gray-700 font-bold w-404">
                                        Design Instruments for Communication
                                    </h1>
                                    <div class="flex items-center space-x-9">
                                        <a href="{{ route('class') }}">
                                            <button 
                                                class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-8 rounded-lg text-white font-bold outline-none">
                                                START COURSE
                                            </button>
                                        </a>
                                        <p class="text-gray-500">
                                            100 x ditonton
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Category --}}
    <div class="category pt-28">
        <div class="container mx-auto">
            <div class="grid grid-cols-4 gap-14">
                <a href="{{ route('user-categories') }}">
                    <div class="transform hover:scale-110 motion-reduce:transform-none flex col-span-1 px-8 py-4 text-gray-700 bg-splide hover:bg-green-400 hover:text-white transition duration-300 items-center space-x-3 rounded-full w-64 h-16 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="text-xl">Photography</p>
                    </div>
                </a>
                <a href="{{ route('user-categories') }}">
                    <div class="transform hover:scale-110 motion-reduce:transform-none flex col-span-1 px-8 py-4 text-gray-700 bg-splide hover:bg-green-400 hover:text-white transition duration-300 items-center space-x-3 rounded-full w-64 h-16 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="text-xl">Programing</p>
                    </div>
                </a>
                <a href="{{ route('user-categories') }}">
                    <div class="transform hover:scale-110 motion-reduce:transform-none flex col-span-1 px-8 py-4 text-gray-700 bg-splide hover:bg-green-400 hover:text-white transition duration-300 items-center space-x-3 rounded-full w-64 h-16 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                        </svg>
                        <p class="text-xl">Shapes</p>
                    </div>
                </a>
                <a href="{{ route('user-categories') }}">
                    <div class="transform hover:scale-110 motion-reduce:transform-none flex col-span-1 px-8 py-4 text-gray-700 bg-splide hover:bg-green-400 hover:text-white transition duration-300 items-center space-x-3 rounded-full w-64 h-16 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <p class="text-xl">Sejarah</p>
                    </div>
                </a>
                <a href="{{ route('user-categories') }}">
                    <div class="transform hover:scale-110 motion-reduce:transform-none flex col-span-1 px-8 py-4 text-gray-700 bg-splide hover:bg-green-400 hover:text-white transition duration-300 items-center space-x-3 rounded-full w-64 h-16 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                        </svg>
                        <p class="text-xl">Cooking</p>
                    </div>
                </a>
                <a href="{{ route('user-categories') }}">
                    <div class="transform hover:scale-110 motion-reduce:transform-none flex col-span-1 px-8 py-4 text-gray-700 bg-splide hover:bg-green-400 hover:text-white transition duration-300 items-center space-x-3 rounded-full w-64 h-16 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="text-xl">Photography</p>
                    </div>
                </a>
                <a href="{{ route('user-categories') }}">
                    <div class="transform hover:scale-110 motion-reduce:transform-none flex col-span-1 px-8 py-4 text-gray-700 bg-splide hover:bg-green-400 hover:text-white transition duration-300 items-center space-x-3 rounded-full w-64 h-16 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="text-xl">Programing</p>
                    </div>
                </a>
                <a href="{{ route('user-categories') }}">
                    <div class="transform hover:scale-110 motion-reduce:transform-none flex col-span-1 px-8 py-4 text-gray-700 bg-splide hover:bg-green-400 hover:text-white transition duration-300 items-center space-x-3 rounded-full w-64 h-16 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                        </svg>
                        <p class="text-xl">Shapes</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- Populer --}}
    <div class="populer pt-32">
        <div class="container mx-auto">
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-4xl">Paling Populer</h1>
                <hr class="bg-black rounded-full mb-20 mt-2 w-64 h-1">
            </div>
            <div class="grid grid-cols-4 gap-7">
                <div class="col-span-1" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="">
                        <img src="{{ asset('images/iklan1.png') }}" class="w-full">
                    </div>
                    <div class="px-3 py-5 space-y-2 shadow-xl">
                        <div class="flex flex-row space-x-1 text-gray-500">
                            <h5 class="text-sm">
                                Photography
                            </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h1 class="text-lg">
                            Nvidia and UE4 Technologies Practice
                        </h1>
                        <p class="text-gray-500 text-sm">
                            100 x ditonton
                        </p>
                        <a href="{{ route('class') }}">
                            <button 
                                class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-5 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                START NOW
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-span-1" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="">
                        <img src="{{ asset('images/iklan2.jpeg') }}" class="w-full">
                    </div>
                    <div class="px-3 py-5 space-y-2 shadow-xl">
                        <div class="flex flex-row space-x-1 text-gray-500">
                            <h5 class="text-sm">
                                Programer
                            </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h1 class="text-lg">
                            Road Bike Manual or How to Be a Champion.
                        </h1>
                        <p class="text-gray-500 text-sm">
                            100 x ditonton
                        </p>
                        <a href="{{ route('class') }}">
                            <button 
                                class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-5 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                START NOW
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-span-1" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <div class="">
                        <img src="{{ asset('images/iklan3.jpeg') }}" class="w-full">
                    </div>
                    <div class="px-3 py-5 space-y-2 shadow-xl">
                        <div class="flex flex-row space-x-1 text-gray-500">
                            <h5 class="text-sm">
                                Cooking
                            </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h1 class="text-lg">
                            Design Instruments for Communication                        
                        </h1>
                        <p class="text-gray-500 text-sm">
                            100 x ditonton
                        </p>
                        <a href="{{ route('class') }}">
                            <button 
                                class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-5 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                START NOW
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-span-1" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                    <div class="">
                        <img src="{{ asset('images/iklan1.png') }}" class="w-full">
                    </div>
                    <div class="px-3 py-5 space-y-2 shadow-xl">
                        <div class="flex flex-row space-x-1 text-gray-500">
                            <h5 class="text-sm">
                                Photography
                            </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h1 class="text-lg">
                            Nvidia and UE4 Technologies Practice
                        </h1>
                        <p class="text-gray-500 text-sm">
                            100 x ditonton
                        </p>
                        <a href="{{ route('class') }}">
                            <button 
                                class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-5 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                START NOW
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-span-1" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000">
                    <div class="">
                        <img src="{{ asset('images/iklan2.jpeg') }}" class="w-full">
                    </div>
                    <div class="px-3 py-5 space-y-2 shadow-xl">
                        <div class="flex flex-row space-x-1 text-gray-500">
                            <h5 class="text-sm">
                                Programer
                            </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h1 class="text-lg">
                            Road Bike Manual or How to Be a Champion.
                        </h1>
                        <p class="text-gray-500 text-sm">
                            100 x ditonton
                        </p>
                        <a href="{{ route('class') }}">
                            <button 
                                class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-5 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                START NOW
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-span-1" data-aos="fade-up" data-aos-delay="1100" data-aos-duration="1000">
                    <div class="">
                        <img src="{{ asset('images/iklan1.png') }}" class="w-full">
                    </div>
                    <div class="px-3 py-5 space-y-2 shadow-xl">
                        <div class="flex flex-row space-x-1 text-gray-500">
                            <h5 class="text-sm">
                                Photography
                            </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h1 class="text-lg">
                            Nvidia and UE4 Technologies Practice
                        </h1>
                        <p class="text-gray-500 text-sm">
                            100 x ditonton
                        </p>
                        <a href="{{ route('class') }}">
                            <button 
                                class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-5 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                START NOW
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-span-1" data-aos="fade-up" data-aos-delay="1300" data-aos-duration="1000">
                    <div class="">
                        <img src="{{ asset('images/iklan2.jpeg') }}" class="w-full">
                    </div>
                    <div class="px-3 py-5 space-y-2 shadow-xl">
                        <div class="flex flex-row space-x-1 text-gray-500">
                            <h5 class="text-sm">
                                Programer
                            </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h1 class="text-lg">
                            Road Bike Manual or How to Be a Champion.
                        </h1>
                        <p class="text-gray-500 text-sm">
                            100 x ditonton
                        </p>
                        <a href="{{ route('class') }}">
                            <button 
                                class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-5 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                START NOW
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-span-1" data-aos="fade-up" data-aos-delay="1500" data-aos-duration="1000">
                    <div class="">
                        <img src="{{ asset('images/iklan3.jpeg') }}" class="w-full">
                    </div>
                    <div class="px-3 py-5 space-y-2 shadow-xl">
                        <div class="flex flex-row space-x-1 text-gray-500">
                            <h5 class="text-sm">
                                Cooking
                            </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h1 class="text-lg">
                            Design Instruments for Communication                        
                        </h1>
                        <p class="text-gray-500 text-sm">
                            100 x ditonton
                        </p>
                        <a href="{{ route('class') }}">
                            <button 
                                class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-5 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                START NOW
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
