<nav class="bg-navbar sticky top-0 z-10">
    <div class="container mx-auto py-5 px-10">
        <div class="flex justify-between items-center">
           <div class="menu-left">
                <a href="{{ route('user-home') }}">
                    <img src="{{ asset('images/logo.png') }}" class="w-1/3">
                </a>
           </div>
            <div class="menu-center flex flex-col -ml-80 space-y-3">
                <h5 class="text-2xl text-white font-bold">
                    {{ $chapters->course->title }}
                </h5>
                <div>
                    <a href="{{ route('class', $chapters->course->id) }}" class="flex flex-row space-x-1 text-gray-300 hover:text-white duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        <p class="font-normal">Back to Class</p>
                    </a>
                </div>
            </div>
            <div class="menu-right flex flex-row items-center">
                <div class="relative inline-block dropdown">
                    <button 
                        class="flex flex-row space-x-2 pr-3 rounded-full items-center text-navbar transition duration-150 ease-in-out bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                        type="button" 
                        aria-haspopup="true" 
                        aria-expanded="true" 
                        aria-controls="headlessui-menu-items-117"
                    >
                        <img src="/profile/{{ Auth::user()->photo }}" class="w-14 h-14 m-1 rounded-full">
                        <p class="text-gray-600 font-semibold">Hi, {{ Auth::user()->name }}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                        <div class="absolute top-full left-7 bg-white shadow-md mt-1">
                            <ul class="text-left text-gray-600  bg-white border">
                                <a href="{{ route('dashboard') }}"><li class="pl-3 pr-10 py-2 hover:bg-blue-500 hover:text-white transition duration-300">Dashboard</li></a>
                                <a href="{{ route('dashboard-account') }}"><li class="pl-3 pr-10 py-2 hover:bg-blue-500 hover:text-white transition duration-300">Account</li></a>
                                <form action="{{ route('logout') }}" method="POST" class="w-full">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="pr-14 py-2 w-full hover:bg-blue-500 hover:text-white transition duration-300">
                                        logout
                                    </button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
