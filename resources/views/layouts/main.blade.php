<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie app</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800" x-data="{ isOpen: false }">
        <div class="container mx-auto px-4 py-6">
            {{-- Mobile Menu Button --}}
            <div class="flex lg:hidden justify-between items-center">
                <a href="#" class="flex items-center">
                    <svg class="w-10 h-10 mr-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #ccc
                                }

                                .cls-2 {
                                    fill: #eaeaea
                                }

                                .cls-3 {
                                    fill: #2eb1b7
                                }

                                .cls-4 {
                                    fill: #5dc6d1
                                }

                                .cls-5 {
                                    fill: #ce5959
                                }

                                .cls-6 {
                                    fill: #6c2e7c
                                }
                            </style>
                        </defs>
                        <g id="Icons">
                            <path class="cls-1" d="M23,14v3H21.64A3.984,3.984,0,0,0,23,14Z" />
                            <path class="cls-1" d="M2.36,17H1V14A3.984,3.984,0,0,0,2.36,17Z" />
                            <path class="cls-2"
                                d="M23,5v9a3.984,3.984,0,0,1-1.36,3H23v2a4,4,0,0,1-4,4H5a4,4,0,0,1-4-4V17H2.36A3.984,3.984,0,0,1,1,14V5A4,4,0,0,1,5,1H19A4,4,0,0,1,23,5Z" />
                            <path class="cls-3" d="M23,17v2a4,4,0,0,1-4,4H5a4,4,0,0,1-4-4V17Z" />
                            <path class="cls-4" d="M21.64,17A4,4,0,0,1,19,18H5a4,4,0,0,1-2.64-1Z" />
                            <path class="cls-5"
                                d="M11.119,6.156l3.072,1.535a1.463,1.463,0,0,1,0,2.618l-3.072,1.535A1.464,1.464,0,0,1,9,10.535V7.465A1.464,1.464,0,0,1,11.119,6.156Z" />
                        </g>
                        <g data-name="Layer 4" id="Layer_4">
                            <path class="cls-6"
                                d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0Zm3,19a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H19a3,3,0,0,1,3,3Z" />
                            <path class="cls-6" d="M19,16H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                            <path class="cls-6"
                                d="M9.168,12.63a2.452,2.452,0,0,0,2.4.108L14.638,11.2a2.464,2.464,0,0,0,0-4.408L11.566,5.262A2.464,2.464,0,0,0,8,7.465v3.07A2.448,2.448,0,0,0,9.168,12.63ZM10,7.465a.452.452,0,0,1,.22-.394A.474.474,0,0,1,10.464,7a.466.466,0,0,1,.208.051l3.071,1.534a.464.464,0,0,1,0,.83l-3.072,1.534a.458.458,0,0,1-.452-.02.452.452,0,0,1-.22-.394Z" />
                        </g>
                    </svg>
                    <span class="text-xl font-semibold">Movie App</span>
                </a>
                <button @click="isOpen = !isOpen" class="text-gray-300 hover:text-gray-100 focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path x-show="!isOpen" fill-rule="evenodd" d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h16v2H4v-2z">
                        </path>
                        <path x-show="isOpen" fill-rule="evenodd"
                            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z">
                        </path>
                    </svg>
                </button>
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex lg:items-center lg:justify-between">
                <ul class="flex items-center">
                    <li>
                        <a href="#" class="flex items-center">
                            <svg class="w-10 h-10 mr-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #ccc
                                        }

                                        .cls-2 {
                                            fill: #eaeaea
                                        }

                                        .cls-3 {
                                            fill: #2eb1b7
                                        }

                                        .cls-4 {
                                            fill: #5dc6d1
                                        }

                                        .cls-5 {
                                            fill: #ce5959
                                        }

                                        .cls-6 {
                                            fill: #6c2e7c
                                        }
                                    </style>
                                </defs>
                                <g id="Icons">
                                    <path class="cls-1" d="M23,14v3H21.64A3.984,3.984,0,0,0,23,14Z" />
                                    <path class="cls-1" d="M2.36,17H1V14A3.984,3.984,0,0,0,2.36,17Z" />
                                    <path class="cls-2"
                                        d="M23,5v9a3.984,3.984,0,0,1-1.36,3H23v2a4,4,0,0,1-4,4H5a4,4,0,0,1-4-4V17H2.36A3.984,3.984,0,0,1,1,14V5A4,4,0,0,1,5,1H19A4,4,0,0,1,23,5Z" />
                                    <path class="cls-3" d="M23,17v2a4,4,0,0,1-4,4H5a4,4,0,0,1-4-4V17Z" />
                                    <path class="cls-4" d="M21.64,17A4,4,0,0,1,19,18H5a4,4,0,0,1-2.64-1Z" />
                                    <path class="cls-5"
                                        d="M11.119,6.156l3.072,1.535a1.463,1.463,0,0,1,0,2.618l-3.072,1.535A1.464,1.464,0,0,1,9,10.535V7.465A1.464,1.464,0,0,1,11.119,6.156Z" />
                                </g>
                                <g data-name="Layer 4" id="Layer_4">
                                    <path class="cls-6"
                                        d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0Zm3,19a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H19a3,3,0,0,1,3,3Z" />
                                    <path class="cls-6" d="M19,16H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                    <path class="cls-6"
                                        d="M9.168,12.63a2.452,2.452,0,0,0,2.4.108L14.638,11.2a2.464,2.464,0,0,0,0-4.408L11.566,5.262A2.464,2.464,0,0,0,8,7.465v3.07A2.448,2.448,0,0,0,9.168,12.63ZM10,7.465a.452.452,0,0,1,.22-.394A.474.474,0,0,1,10.464,7a.466.466,0,0,1,.208.051l3.071,1.534a.464.464,0,0,1,0,.83l-3.072,1.534a.458.458,0,0,1-.452-.02.452.452,0,0,1-.22-.394Z" />
                                </g>
                            </svg>
                            <span class="text-xl font-semibold">Movie App</span>
                        </a>
                    </li>
                    <li class="ml-16">
                        <a href="#" class="hover:text-gray-300">Home</a>
                    </li>
                    <li class="ml-6">
                        <a href="#" class="hover:text-gray-300">Movies</a>
                    </li>
                    <li class="ml-6">
                        <a href="#" class="hover:text-gray-300">Tv Shows</a>
                    </li>
                    <li class="ml-6">
                        <a href="#" class="hover:text-gray-300">Actors</a>
                    </li>
                </ul>

                <div class="flex items-center">
                    <div class="relative">
                        <input type="text"
                            class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
                            placeholder="Search">
                        <div class="absolute top-0 left-0 flex items-center h-full ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <a href="#">
                            <img src="/images/avatar.png" alt="avatar" class="rounded-full w-8 h-8">
                        </a>
                    </div>
                </div>
            </div>

            {{-- Mobile Navigation Menu --}}
            <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" class="lg:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium hover:text-gray-300 hover:bg-gray-800">Home</a>
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium hover:text-gray-300 hover:bg-gray-800">Movies</a>
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium hover:text-gray-300 hover:bg-gray-800">TV
                        Shows</a>
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium hover:text-gray-300 hover:bg-gray-800">Actors</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="px-3">
                        <div class="relative">
                            <input type="text"
                                class="bg-gray-800 text-sm rounded-full w-full px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
                                placeholder="Search">
                            <div class="absolute top-0 left-0 flex items-center h-full ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>
</body>

</html>
