@extends('layouts.auth')

@section('title')
    Register
@endsection

@section('content')
    <div class="login bg-navbar py-24 px-96">
        @if ($errors->any())
            <div class="text-sm text-left text-white bg-red-500 border p-4 rounded-sm mb-3" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container mx-auto">
            <div class="bg-login py-10 rounded-xl">
                <div class="flex flex-col items-center">
                    <h1 class="text-5xl">Sign Up For Free</h1>
                    <p class="text-lg text-gray-700 mt-4 mb-10">Bergabunglah dengan Komunitas Belajar Gratis Terbesar di Dunia</p>

                    <form class="flex flex-col items-center" action="{{ route('register-store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('POST')
                        <div class="flex flex-row space-x-8">
                            <div class="flex flex-col leading-loose">
                                <label for="email" class="">Name :</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    value="{{ old('name') }}"
                                    placeholder="enter your name" 
                                    class="bg-white outline-none py-2 pl-2 shadow-md w-80"
                                >
                                <label for="password" class="">Password :</label>
                                <input 
                                    type="password" 
                                    name="password" 
                                    placeholder="enter your password" 
                                    class="bg-white outline-none py-2 pl-2 shadow-md w-80"
                                >
                            </div>
                            <div class="flex flex-col leading-loose">
                                <label for="email" class="">Email address :</label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    value="{{ old('email') }}"
                                    placeholder="enter your email" 
                                    class="bg-white outline-none py-2 pl-2 shadow-md w-80"
                                >
                                <label for="password" class="">Profile :</label>
                                <input 
                                    type="file" 
                                    name="profile_file" 
                                    class="bg-white outline-none py-55 pl-2 shadow-md w-80"
                                >
                            </div>
                        </div>
                        <div class="flex flex-col mt-2">
                            <label for="roles" class="">Daftar sebagai :</label>
                            <select name="roles" id="" class="bg-white outline-none py-3 pl-2 shadow-md w-80">
                                    <option value="USER">Student</option>
                                    <option value="ADMIN">Teacher</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="bg-green-400 hover:bg-green-500 transition duration-300 shadow-md py-3 w-80 mt-12 text-white font-bold outline-none">
                            CONTINUE
                        </button>
                    </form>
                    <a href="{{ route('login') }}">
                        <button 
                            class="bg-green-400 hover:bg-green-500 transition duration-300 shadow-md py-3 w-80 mt-3 text-white font-bold outline-none">
                            BACK TO SIGN IN
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection