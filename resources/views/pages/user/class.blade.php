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
                    <p class="mb-2 font-medium text-gray-800">Photography</p>
                </div>
                <div class="thumbnail">
                    <h1 class="text-3xl font-medium text-gray-800 mb-2 -mt-7">Design Instruments for Communication</h1>
                    <img src="images/thumbnail3.jpeg" class="w-full h-404 rounded-lg">
                </div>
                <div class="description">
                    <h1 class="text-3xl font-medium text-gray-800">Description</h1>
                    <p class="text-gray-600 leading-loose mt-5 mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 

                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 

                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 

                        in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 

                        like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p class="text-gray-600 leading-loose">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 

                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 

                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 

                        in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 

                        like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="chapter">
                    <h1 class="text-3xl font-medium text-gray-800">Chapter</h1>
                    <div class="flex bg-white hover:bg-splide transition duration-300 flex-col shadow-xl py-5 px-10 rounded-xl space-y-3 mt-5">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="/video">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                    LIHAT DETAIL CHAPTER
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="/video">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                    LIHAT DETAIL CHAPTER
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="/video">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                    LIHAT DETAIL CHAPTER
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="/video">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                    LIHAT DETAIL CHAPTER
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="/video">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                    LIHAT DETAIL CHAPTER
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700">
                                Keterampilan Mengasuh - Perawatan Damensia
                            </p>
                            <a href="#">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-2 px-5 rounded-lg text-white font-bold outline-none">
                                    LIHAT DETAIL CHAPTER
                                </button>
                            </a>
                        </div>
                        <hr class="bg-gray-200 rounded-full mt-5 h-1">
                    </div>
                </div>
                <div class="review-dropdown-button relative">
                    <h1 class="text-3xl font-medium text-gray-800">Reviews</h1>
                    <div class="review-dropdown absolute top-full left-0 flex bg-white hover:bg-splide w-1/2 transition duration-300 flex-col shadow-xl py-5 px-10 rounded-xl space-y-3">
                        <h5>Tuliskan Review Terbaikmu!</h5>
                        <textarea 
                            name="" 
                            class="shadow-xl rounded-xl focus:ring-2 focus:ring-blue-600 outline-none p-5"
                            rows="7"
                            placeholder="Ketik pesan . . . . . . ."
                            style="resize: none;"
                        ></textarea>
                        <div class="flex justify-end -space-x-12">
                            <a href="#">
                                <button 
                                    class="bg-red-400 hover:bg-red-500 transition duration-300 py-3 px-3 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                    CANCEL
                                </button>
                            </a>   
                            <a href="#">
                                <button 
                                    class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-3 mt-8 ml-70 rounded-lg text-white font-bold outline-none">
                                    SUBMIT
                                </button>
                            </a>  
                        </div>  
                    </div>
                </div>
                <div class="reviews1">
                    <div class="grid grid-cols-3 gap-8">
                        <div class="">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="images/user.png" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="images/user.png" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="images/user.png" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="images/user.png" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="images/user.png" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-span-1 bg-white shadow-lg p-8 rounded-xl">
                                <img src="images/user.png" class="w-1/4">
                                <p class="mt-2 text-gray-700">Pepet Markopet</p>
                                <p class="text-sm text-gray-400 mb-5">pepetmarkopet@gmail.com</p>
                                <p class="text-lg overflow-hidden">
                                    penjelasan mudah dimengerti, cocok untuk pemula python
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
