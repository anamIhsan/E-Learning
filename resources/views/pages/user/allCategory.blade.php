@extends('layouts.appLogin')

@section('title')
    All Categories
@endsection

@section('content')

    {{-- Categories --}}
    <div class="categories py-14">
        <div class="container mx-auto">
            <div class="flex flex-col">
                <h1 class="text-4xl">All Courses</h1>
                <hr class="bg-black rounded-full mb-10 mt-1 w-52 h-1">
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