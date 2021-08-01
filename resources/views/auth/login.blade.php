@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')
    <div class="login bg-navbar py-32 px-27">
        <div class="container mx-auto">
            <div class="bg-login py-10 rounded-xl">
                <div class="flex flex-col items-center">
                    <h1 class="text-5xl">Welcome Back!</h1>
                    <p class="text-lg text-gray-700 mt-4 mb-10">Apa yang akan kamu pelajari hari ini? Cari tahu, dengan kami.</p>

                    <div class="flex flex-col leading-loose">
                        <label for="email" class="">Email address :</label>
                        <input 
                            type="email" 
                            name="email" 
                            placeholder="enter your email" 
                            class="bg-white outline-none py-2 pl-2 shadow-md w-80"
                        >
                        <label for="password" class="">Password :</label>
                        <input 
                            type="password" 
                            name="password" 
                            placeholder="enter your password" 
                            class="bg-white outline-none py-2 pl-2 shadow-md w-80"
                        >
                        <a href="{{ route('user-home') }}">
                            <button 
                                class="bg-green-400 hover:bg-green-500 transition duration-300 shadow-md py-2 w-80 mt-12 text-white font-bold outline-none">
                                LOGIN
                            </button>
                        </a>
                        <a href="{{ route('register') }}">
                            <button 
                                class="bg-green-400 hover:bg-green-500 transition duration-300 shadow-md py-2 w-80 mt-3 text-white font-bold outline-none">
                                SIGN UP
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection