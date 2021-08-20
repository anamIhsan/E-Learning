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
                        @foreach ($course_splide as $course)
                            <li class="splide__slide">
                                <div class="flex space-x-16 items-center">
                                    <div class="" data-aos="fade-right" data-aos-duration="1000">
                                        <img src="/profile/{{ $course->thumbnail }}" class="w-full rounded-xl">
                                    </div>
                                    <div class="space-y-16" data-aos="fade-left" data-aos-duration="1000">
                                        <h1 class="text-3xl text-gray-700 font-bold w-404">
                                            {{ $course->title }}
                                        </h1>
                                        <div class="flex items-center space-x-9">
                                            <a href="{{ route('class', $course->id) }}">
                                                <button 
                                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-8 rounded-lg text-white font-bold outline-none">
                                                    START COURSE
                                                </button>
                                            </a>
                                            <div class="">
                                                <p class="text-gray-600">
                                                    Pengajar
                                                </p>
                                                <p class="text-lg">
                                                    Mr. {{ $course->user->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Category --}}
    <div class="category pt-28">
        <div class="container mx-auto">
            <div class="grid grid-cols-4 gap-14">
                @php
                    $dataAos = 0
                @endphp
                @foreach ($categories as $category)
                    <a href="{{ route('user-categories', $category->id) }}" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="{{ $dataAos += 100 }}">
                        <div class="transform hover:scale-110 motion-reduce:transform-none flex col-span-1 px-8 py-4 text-gray-700 bg-splide hover:bg-green-400 hover:text-white transition duration-300 items-center space-x-3 rounded-full w-64 h-16 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="text-xl">{{ $category->name }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Populer --}}
    <div class="populer pt-32">
        <div class="container mx-auto">
            <div class="flex flex-col justify-center items-center" data-aos="fade-down" data-aos-duration="2000">
                <h1 class="text-4xl">Paling Populer</h1>
                <hr class="bg-black rounded-full mb-20 mt-2 w-64 h-1">
            </div>
            <div class="grid grid-cols-4 gap-7">
                @foreach ($courses as $course)
                    <div class="col-span-1" data-aos="fade-up" data-aos-delay="{{ $dataAos += 100 }}" data-aos-duration="1000">
                        <div class="">
                            <img src="/profile/{{ $course->thumbnail }}" class="w-full">
                        </div>
                        <div class="px-3 py-5 space-y-2 shadow-xl">
                            <div class="flex flex-row space-x-1 text-gray-500">
                                <h5 class="text-sm">
                                    {{ $course->category->name }}
                                </h5>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h1 class="text-lg">
                                {{ $course->title }}
                            </h1>
                            <p class="text-gray-500 text-sm">
                                Mr. {{ $course->user->name }}
                            </p>
                            <a href="{{ route('class', $course->id) }}">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-5 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                    START NOW
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
@endsection
