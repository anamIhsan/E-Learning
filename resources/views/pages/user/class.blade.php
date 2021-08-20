@extends('layouts.appLogin')

@section('title')
    Study Class
@endsection

@section('content')
    <div class="class">
        <div class="container mx-auto">
            <div class="flex flex-col p-10 space-y-10">
                <div class="title">
                    <p class="text-sm text-gray-600">Category</p>
                    <p class="mb-2 font-medium text-gray-800">{{ $courses->category->name }}</p>
                </div>
                <div class="thumbnail">
                    <h1 class="text-3xl font-medium text-gray-800 mb-2 -mt-7">{{ $courses->title }}</h1>
                    <img 
                        src="/profile/{{ $courses->thumbnail }}" 
                        class="w-full h-404 rounded-lg" 
                        data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1500"
                    >
                </div>
                <div class="description">
                    <h1 class="text-3xl font-medium text-gray-800">Description</h1>
                    <p class="text-gray-600 leading-loose mt-5">
                        {{ $courses->description }}
                    </p>
                </div>
                <div class="chapter">
                    <h1 class="text-3xl font-medium text-gray-800">Chapter</h1>
                    <div class="flex bg-white hover:bg-splide transition duration-300 flex-col shadow-xl py-5 px-10 rounded-xl space-y-3 mt-5">
                        @php
                            $dataAos = 0
                        @endphp
                        @foreach ($chapters as $chapter)
                            @if ($chapter->courses_id === $courses->id)
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-700" data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="{{ $dataAos += 100 }}">
                                        {{ $chapter->title }}
                                    </p>
                                    <a href="{{ route('video', $chapter->id) }}" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="{{ $dataAos += 100 }}">
                                        <button 
                                            class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                            LIHAT DETAIL CHAPTER
                                        </button>
                                    </a>
                                </div>
                                <hr class="bg-gray-200 rounded-full mt-5 h-1">
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
