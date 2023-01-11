<div class="sticky top-0 z-50">
    <section class="relative mx-auto">
        <!-- navbar -->
        <nav class="flex justify-between w-full bg-zinc-200 text-zinc-700">
            <div class="flex items-center justify-between w-full px-5 py-6 xl:px-12">
                <a class="text-3xl font-bold font-heading" href="/">
                    <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                    Gadget<span class="text-red-600">On</span>
                </a>
                <!-- Header Icons -->
                <div class="items-center hidden space-x-5 xl:flex">
                    <!-- Sign In / Register      -->
                    @if (Auth::check())
                    @if(Auth()->user()->role == 'member')
                    <a class="flex items-center pr-2 hover:text-black" href="{{ route('cart.list') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="absolute flex ml-4 -mt-5">
                            <span
                                class="absolute inline-flex w-3 h-3 bg-pink-400 rounded-full opacity-75 animate-ping"></span>
                            <span class="relative inline-flex w-3 h-3 bg-pink-500 rounded-full">
                            </span>
                        </span>
                    </a>
                    @endif
                    {{-- <div class="flex items-center hover:text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:text-black" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div> --}}
                    {{-- <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                        data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer"
                        src="/assets/image/Samsung.jpg" alt="User dropdown"> --}}


                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                        class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-black md:mr-0"
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 mr-2 rounded-full" src="/assets/image/Samsung.jpg" alt="user photo">
                        {{ ucfirst(Auth::user()->name) }}
                        <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div class="font-medium ">{{ ucfirst(Auth::user()->role) }}</div>
                            <div class="truncate">{{ Auth::user()->email }}</div>
                        </div>
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            @if (Auth()->user()->role == 'admin')
                            <li>
                                <a href="/admin" class="block px-4 py-2 text-red-600 hover:bg-gray-100">Manage
                                    Product</a>
                            </li>
                            @endif

                            <li>
                                <a href="/"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">History</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="/logout"
                                class="block px-4 py-2 text-sm text-gray-700 text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </div>
                    </div>
                    @else
                    <a class="flex items-center px-2 font-medium text-gray-900 hover:text-black" href="/register">
                        Register
                    </a>
                    <a class="flex items-center px-2 font-medium text-gray-900 hover:text-black" href="/login">
                        Login
                    </a>

                    @endif

                </div>
            </div>
            <!-- Responsive navbar -->
            <a class="flex items-center mr-6 xl:hidden" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:text-black" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="absolute flex ml-4 -mt-5">
                    <span class="absolute inline-flex w-3 h-3 bg-pink-400 rounded-full opacity-75 animate-ping"></span>
                    <span class="relative inline-flex w-3 h-3 bg-pink-500 rounded-full">
                    </span>
                </span>
            </a>
            <a class="self-center mr-12 navbar-burger xl:hidden" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:text-black" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </a>
        </nav>

    </section>
</div>