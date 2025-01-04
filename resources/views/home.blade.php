{{-- @extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @for ($i = 0; $i < 10; $i++)
                    <div class="mt-8">
                        <a href="#">
                            <img src="https://image.tmdb.org/t/p/w500/sample-movie-poster.jpg" alt="movie poster"
                                class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">Movie Title</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                    <g data-name="Layer 2">
                                        <path
                                            d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                            data-name="star" />
                                    </g>
                                </svg>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">Action, Thriller, Comedy</div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @for ($i = 0; $i < 10; $i++)
                    <div class="mt-8">
                        <a href="#">
                            <img src="https://image.tmdb.org/t/p/w500/sample-movie-poster-2.jpg" alt="movie poster"
                                class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">Now Playing Movie</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                    <g data-name="Layer 2">
                                        <path
                                            d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                            data-name="star" />
                                    </g>
                                </svg>
                                <span class="ml-1">90%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">Action, Thriller, Comedy</div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection --}}



@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/fast.png" alt="Fast & Furious 9"
                            class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Fast and furious</a>
                        <div class="flex items-center  text-gray-400 text-sm gap-1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-5 w-4 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>


                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2015</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/joker.jpg" alt="Joker"
                            class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Joker</a>
                        <div class="flex items-center  text-gray-400 text-sm gap-1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-5 w-4 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>


                            <span>star</span>
                            <span class="ml-1">90%</span>
                            <span class="mx-2">|</span>
                            <span>Oct 4, 2019</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="/images/kate.png" alt="Kate"
                                class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">Kate</a>
                            <div class="flex items-center  text-gray-400 text-sm gap-1 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-5 w-4 text-orange-500">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>


                                <span>star</span>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2015</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/images/john.png" alt="John Wick"
                                    class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">Joker</a>
                                <div class="flex items-center  text-gray-400 text-sm gap-1 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-5 w-4 text-orange-500">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>


                                    <span>star</span>
                                    <span class="ml-1">90%</span>
                                    <span class="mx-2">|</span>
                                    <span>Oct 4, 2019</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    Action, Thriller, Comedy
                                </div>
                            </div </div>
                            <div class="mt-8">
                                <a href="#">
                                    <img src="/images/john.png" alt="John Wick"
                                        class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                                </a>
                                <div class="mt-2">
                                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Joker</a>
                                    <div class="flex items-center  text-gray-400 text-sm gap-1 mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-5 w-4 text-orange-500">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                clip-rule="evenodd" />
                                        </svg>


                                        <span>star</span>
                                        <span class="ml-1">90%</span>
                                        <span class="mx-2">|</span>
                                        <span>Oct 4, 2019</span>
                                    </div>
                                    <div class="text-gray-400 text-sm">
                                        Action, Thriller, Comedy
                                    </div>
                                </div </div>
                                <div class="mt-8">
                                    <a href="#">
                                        <img src="/images/bloody.png" alt="bloody"
                                            class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                                    </a>
                                    <div class="mt-2">
                                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Joker</a>
                                        <div class="flex items-center  text-gray-400 text-sm gap-1 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="size-5 w-4 text-orange-500">
                                                <path fill-rule="evenodd"
                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                    clip-rule="evenodd" />
                                            </svg>


                                            <span>star</span>
                                            <span class="ml-1">90%</span>
                                            <span class="mx-2">|</span>
                                            <span>Oct 4, 2019</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">
                                            Action, Thriller, Comedy
                                        </div>
                                    </div </div>
                                    <div class="mt-8">
                                        <a href="#">
                                            <img src="/images/six-under.png" alt="six underground"
                                                class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                                        </a>
                                        <div class="mt-2">
                                            <a href="#" class="text-lg mt-2 hover:text-gray-300">Joker</a>
                                            <div class="flex items-center  text-gray-400 text-sm gap-1 mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="size-5 w-4 text-orange-500">
                                                    <path fill-rule="evenodd"
                                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                        clip-rule="evenodd" />
                                                </svg>


                                                <span>star</span>
                                                <span class="ml-1">90%</span>
                                                <span class="mx-2">|</span>
                                                <span>Oct 4, 2019</span>
                                            </div>
                                            <div class="text-gray-400 text-sm">
                                                Action, Thriller, Comedy
                                            </div>
                                        </div </div>
                                        <div class="mt-8">
                                            <a href="#">
                                                <img src="/images/parasite.jpg" alt="John Wick"
                                                    class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                                            </a>
                                            <div class="mt-2">
                                                <a href="#" class="text-lg mt-2 hover:text-gray-300">Joker</a>
                                                <div class="flex items-center  text-gray-400 text-sm gap-1 mt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="size-5 w-4 text-orange-500">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                            clip-rule="evenodd" />
                                                    </svg>


                                                    <span>star</span>
                                                    <span class="ml-1">90%</span>
                                                    <span class="mx-2">|</span>
                                                    <span>Oct 4, 2019</span>
                                                </div>
                                                <div class="text-gray-400 text-sm">
                                                    Action, Thriller, Comedy
                                                </div>
                                            </div </div>
                                            <div class="mt-8">
                                                <a href="#">
                                                    <img src="/images/parasite.jpg" alt="John Wick"
                                                        class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                                                </a>
                                                <div class="mt-2">
                                                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Joker</a>
                                                    <div class="flex items-center  text-gray-400 text-sm gap-1 mt-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="size-5 w-4 text-orange-500">
                                                            <path fill-rule="evenodd"
                                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                                clip-rule="evenodd" />
                                                        </svg>


                                                        <span>star</span>
                                                        <span class="ml-1">90%</span>
                                                        <span class="mx-2">|</span>
                                                        <span>Oct 4, 2019</span>
                                                    </div>
                                                    <div class="text-gray-400 text-sm">
                                                        Action, Thriller, Comedy
                                                    </div>
                                                </div </div>
                                                <div class="mt-8">
                                                    <a href="#">
                                                        <img src="/images/parasite.jpg" alt="John Wick"
                                                            class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                                                    </a>
                                                    <div class="mt-2">
                                                        <a href="#"
                                                            class="text-lg mt-2 hover:text-gray-300">Joker</a>
                                                        <div class="flex items-center  text-gray-400 text-sm gap-1 mt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="currentColor" class="size-5 w-4 text-orange-500">
                                                                <path fill-rule="evenodd"
                                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                                                    clip-rule="evenodd" />
                                                            </svg>


                                                            <span>star</span>
                                                            <span class="ml-1">90%</span>
                                                            <span class="mx-2">|</span>
                                                            <span>Oct 4, 2019</span>
                                                        </div>
                                                        <div class="text-gray-400 text-sm">
                                                            Action, Thriller, Comedy
                                                        </div>
                                                    </div </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endsection
