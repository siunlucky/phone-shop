<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex items-center justify-center h-full bg-slate-200">
        <div class="w-full px-4 pt-6 mx-auto lg:w-4/12">
            <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white border-0 rounded-lg shadow-lg">
                <div class="flex-auto px-4 py-10 pt-10">
                    <div class="mb-3 font-bold text-center text-blueGray-400">
                        <a class="text-3xl font-bold font-heading" href="#">
                            Gadget<span class="text-red-600">On</span>
                        </a>
                        <small>Register</small>
                    </div>
                    <form action="/register/store" method="post">
                        @csrf
                        {{-- <div
                            class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Danger</span>
                            <div>
                                <span class="font-medium">Ensure that these requirements are met:</span>
                                <ul class="mt-1.5 ml-4 text-red-700 list-disc list-inside">
                                    <li>At least 10 characters (and up to 100 characters)</li>
                                    <li>At least one lowercase character</li>
                                    <li>Inclusion of at least one special character, e.g., ! @ # ?</li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="relative w-full mb-3">
                            <label class="block mb-2 text-xs font-bold text-black uppercase" for="name">
                                Your Name
                            </label>
                            <input type="text" name="name" id="name" autofocus
                                class="@error('name') border-red-500 @enderror w-full px-3 py-3 text-sm text-black transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 focus:outline-none focus:ring"
                                placeholder="Full Name">
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block mb-2 text-xs font-bold text-black uppercase" for="email">
                                Your Email
                            </label>
                            <input type="email" name="email" id="email" required
                                class="@error('email') border-red-500 @enderror w-full px-3 py-3 text-sm text-black transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 focus:outline-none focus:ring"
                                placeholder="example01@gmail.com">
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block mb-2 text-xs font-bold text-black uppercase" for="password">
                                Password
                            </label>
                            <input type="password" name="password" id="password" required
                                class="@error('password') border-red-500 @enderror w-full px-3 py-3 text-sm text-black transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 focus:outline-none focus:ring"
                                placeholder="Password">
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block mb-2 text-xs font-bold text-black uppercase" for="password">
                                Repeat Your Password
                            </label>
                            <input type="password" name="password_confirmation" id="password    " required
                                class="@error('repeat-password') border-red-500 @enderror w-full px-3 py-3 text-sm text-black transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 focus:outline-none focus:ring"
                                placeholder="Repeat Password">
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block mb-2 text-xs font-bold text-black uppercase" for="password">
                                Gender
                            </label>
                            <div class="flex">
                                <div class="mr-3 form-check">
                                    <input
                                        class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-blue-600 checked:border-blue-600 focus:outline-none"
                                        type="radio" value="male" id="male" name="gender">
                                    <label class="inline-block text-sm text-gray-800 form-check-label" for="gender">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-blue-600 checked:border-blue-600 focus:outline-none"
                                        type="radio" value="female" id="female" name="gender">
                                    <label class="inline-block text-sm text-gray-800 form-check-label" for="gender">
                                        Female
                                    </label>
                                </div>
                            </div>


                        </div>

                        <div class="relative w-full mb-3">
                            <label class="block mb-2 text-xs font-bold text-black uppercase" for="address">
                                Your Address
                            </label>
                            <input type="text" name="address" id="address" required
                                class="@error('address') border-red-500 @enderror w-full px-3 py-3 text-sm text-black transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 focus:outline-none focus:ring"
                                placeholder="Jl. Sanan 1A No. 26">
                        </div>

                        <div>
                            <label class="inline-flex items-center mt-2 cursor-pointer">
                                <input id="agree" name="agree" value="agree" type="checkbox" required
                                    class="w-5 h-5 ml-1 transition-all duration-150 ease-linear border-0 rounded form-checkbox text-blueGray-700 ">
                                <span class="ml-2 text-sm font-semibold text-black">
                                    I agree all statements in <u>Terms of service</u>
                                </span>
                            </label>
                        </div>
                        <div class="mt-4 text-center bg-gray-800">
                            <button
                                class="w-full px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear rounded shadow outline-none bg-blueGray-800 active:bg-blueGray-600 hover:shadow-lg focus:outline-none"
                                type="submit">
                                Sign In
                            </button>
                        </div>
                        <div class="flex justify-center mt-4">
                            <span class="text-sm font-semibold text-black">
                                Have already an account? <a href="/login"><u>Login Here</u></a>
                            </span>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>



</body>

</html>