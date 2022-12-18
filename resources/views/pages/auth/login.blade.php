<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @vite('resources/css/app.css')
</head>

<body class="overflow-y-hidden">
    <div class="flex items-center justify-center h-screen bg-slate-200">
        <div class="w-full px-4 pt-6 mx-auto lg:w-4/12">
            <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white border-0 rounded-lg shadow-lg">
                <div class="flex-auto px-4 py-10 pt-10">
                    <div class="mb-3 font-bold text-center text-blueGray-400">
                        <a class="text-3xl font-bold font-heading" href="#">
                            Gadget<span class="text-red-600">On</span>
                        </a>
                        <small>Login</small>
                    </div>
                    <form method="post" action="/login/authenticate">
                        @csrf

                        @if(session()->has('error'))
                        <div class="relative px-4 py-3 mb-4 text-red-700 bg-red-100 border border-red-400 rounded"
                            role="alert">
                            <strong class="font-bold">Login Failed!</strong>
                            <span class="block sm:inline">Incorrect username or password</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg class="w-6 h-6 text-red-500 fill-current" role="button"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path
                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                </svg>
                            </span>
                        </div>
                        @endif

                        <div class="relative w-full mb-3">
                            <label class="block mb-2 text-xs font-bold text-black uppercase" for="email">
                                Email
                            </label>
                            <input type="email" name="email" id="email" autofocus
                                class="w-full px-3 py-3 text-sm text-black transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 focus:outline-none focus:ring"
                                placeholder="Email">
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block mb-2 text-xs font-bold text-black uppercase" for="password">
                                Password
                            </label>
                            <input type="password" name="password" id="password" required
                                class="w-full px-3 py-3 text-sm text-black transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 focus:outline-none focus:ring"
                                placeholder="Password">
                        </div>
                        <div>
                            <label class="inline-flex items-center mt-2 cursor-pointer">
                                <input id="rememberMe" name="rememberMe" value="rememberMe" type="checkbox"
                                    class="w-5 h-5 ml-1 transition-all duration-150 ease-linear border-0 rounded form-checkbox text-blueGray-700">
                                <span class="ml-2 text-sm font-semibold text-black">
                                    Remember me
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
                                Don't have an account? <a href="/register"><u>Register Here</u></a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>



</body>

</html>