<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie app</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
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
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>
</body>

</html>
