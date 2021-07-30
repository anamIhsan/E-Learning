<nav class="bg-navbar sticky top-0 z-10">
    <div class="container mx-auto py-5">
        <div class="flex justify-between items-center">
           <div class="menu-left">
                <a href="/">
                    <img src="images/logo.png" class="w-1/3">
                </a>
           </div>
            <div class="menu-center flex flex-row -ml-80">
                <div class="search-dropdown-button relative">
                    <div class="h-14 w-28 bg-gray-200 flex flex-row justify-center items-center px-11 gap-1">
                        <i class="fas fa-bars text-gray-600"></i>
                        <p class="text-gray-600 text-sm">CATEGORY</p>
                    </div>
                    <div class="search-dropdown absolute top-full left-0 bg-white shadow-md">
                        <ul class="text-left text-gray-600  bg-white border">
                            <a href="/categories"><li class="pl-3 pr-24 py-2 hover:bg-green-400 hover:text-white transition duration-300">PROGRAMING</li></a>
                            <a href="/categories"><li class="pl-3 pr-24 py-2 hover:bg-green-400 hover:text-white transition duration-300">DESIGN</li></a>
                            <a href="/categories"><li class="pl-3 pr-24 py-2 hover:bg-green-400 hover:text-white transition duration-300">PHOTOGRAPHY</li></a>
                            <a href="/categories"><li class="pl-3 pr-24 py-2 hover:bg-green-400 hover:text-white transition duration-300">PROGRAMING</li></a>
                        </ul>
                    </div>
                </div>
                
                <input type="text" class="bg-white py-2 pr-20 pl-3 outline-none" placeholder="Search courses">
                <a href="/all-categories">
                    <div class="h-14 w-16 bg-green-400 flex flex-row justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="menu-right flex flex-row gap-9 items-center">
                <a href="/login">
                    <div class="flex flex-row gap-1 items-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <p class="text-md">Login</p>
                    </div>
                </a>
                <a href="/register">
                    <button 
                        class="bg-green-400 hover:bg-green-500 transition duration-300 py-3 px-8 rounded-full text-white font-bold outline-none">
                        SIGN UP
                    </button>
                </a>
            </div>
        </div>
    </div>
</nav>