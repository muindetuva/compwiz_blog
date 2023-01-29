<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body class="filament-body bg-gray-100 text-gray-900">


<div class="flex items-center justify-center min-h-screen bg-gray-100 text-gray-900 py-12">
    <div class="w-screen px-6 -mt-16 space-y-8 md:mt-0 md:px-2 max-w-md">
        <div class="p-8 space-y-4 bg-white/50 backdrop-blur-xl border border-gray-200 shadow-2xl rounded-2xl relative">
            <div class="flex justify-center w-full">
                <div class="filament-brand text-xl font-bold tracking-tight">
                    <span class="text-yellow-500">Compwiz</span>
                    <span class="text-green-500">Blog</span>
                </div>
            </div>

            <h2 class="text-2xl font-bold tracking-tight text-center">
                Login
            </h2>

            <div>
                <form class="space-y-8" action="/register" method="POST">
                    @csrf
                    <div class="grid grid-cols-1      filament-forms-component-container gap-6">
                        <div class="col-span-1">
                            <div class="filament-forms-field-wrapper">
                                <div class="space-y-2">
                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                        <label
                                            class=" inline-flex items-center space-x-3 rtl:space-x-reverse"
                                            for="name"
                                        >
                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                Name
                                                <sup class="font-medium text-danger-700">*</sup>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="flex items-center space-x-2 rtl:space-x-reverse group">
                                        <div class="flex-1">
                                            <input type="text"
                                                   id="name" required=""
                                                   name="name"
                                                   class="outline-yellow-500 p-2 block w-full transition duration-75 rounded-lg shadow-sm focus:border-yellow-500 focus:ring-1 focus:ring-inset focus:ring-yellow-500 disabled:opacity-70 border-gray-300"
                                            >
                                            @error('name')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="filament-forms-field-wrapper">

                                <div class="space-y-2">
                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                        <label
                                            class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                                            for="email">


        <span class="text-sm font-medium leading-4 text-gray-700">
            Email address
                        <sup class="font-medium text-danger-700">*</sup>
                </span>
                                        </label>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 rtl:space-x-reverse group">
                                        <div class="flex-1">
                                            <input type="email"
                                                   name="email"
                                                   autocomplete="on" id="email" required=""
                                                   class="outline-yellow-500 p-2 block w-full transition duration-75 rounded-lg shadow-sm focus:border-yellow-500 focus:ring-1 focus:ring-inset focus:ring-yellow-500 disabled:opacity-70 border-gray-300"
                                            >
                                            @error('email')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-span-1">
                            <div class="filament-forms-field-wrapper">
                                <div class="space-y-2">
                                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                        <label
                                            class=" inline-flex items-center space-x-3 rtl:space-x-reverse"
                                            for="password"
                                        >
                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                Password
                                                <sup class="font-medium text-danger-700">*</sup>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="flex items-center space-x-2 rtl:space-x-reverse group">
                                        <div class="flex-1">
                                            <input type="password"
                                                   id="password" required=""
                                                   name="password"
                                                   class="outline-yellow-500 p-2 block w-full transition duration-75 rounded-lg shadow-sm focus:border-yellow-500 focus:ring-1 focus:ring-inset focus:ring-yellow-500 disabled:opacity-70 border-gray-300"
                                            >
                                            @error('password')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <button type="submit"
                            class="inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-yellow-500 hover:bg-yellow-500 focus:bg-yellow-400 focus:ring-offset-yellow-700 w-full">
                        Register
                    </button>

                </form>

            </div>
        </div>
    </div>
</div>
</body>
</html>
