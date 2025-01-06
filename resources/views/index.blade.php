@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        {{-- <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/fast.png" alt="Fast & Furious 9"
                            class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Fast and Furious</a>
                        <div class="flex items-center text-gray-400 text-sm gap-1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>85%</span>
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
                        <div class="flex items-center text-gray-400 text-sm gap-1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>90%</span>
                            <span class="mx-2">|</span>
                            <span>Oct 4, 2019</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Crime, Drama, Thriller
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/images/kate.png" alt="Kate"
                            class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Kate</a>
                        <div class="flex items-center text-gray-400 text-sm gap-1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>85%</span>
                            <span class="mx-2">|</span>
                            <span>Sep 10, 2021</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/images/john.png" alt="John Wick"
                            class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">John Wick</a>
                        <div class="flex items-center text-gray-400 text-sm gap-1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>86%</span>
                            <span class="mx-2">|</span>
                            <span>Oct 24, 2014</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Crime, Thriller
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/images/bloody.png" alt="Bloody Daddy"
                            class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Bloody Daddy</a>
                        <div class="flex items-center text-gray-400 text-sm gap-1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>72%</span>
                            <span class="mx-2">|</span>
                            <span>Jun 9, 2023</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Crime
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/images/six-under.png" alt="6 Underground"
                            class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">6 Underground</a>
                        <div class="flex items-center text-gray-400 text-sm gap-1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>63%</span>
                            <span class="mx-2">|</span>
                            <span>Dec 13, 2019</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/images/parasite.jpg" alt="Parasite"
                            class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm gap-1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>92%</span>
                            <span class="mx-2">|</span>
                            <span>May 30, 2019</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Comedy, Drama, Thriller
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/painter.png" alt="Parasite"
                            class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Painter</a>
                        <div class="flex items-center text-gray-400 text-sm gap-1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 text-orange-500">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>92%</span>
                            <span class="mx-2">|</span>
                            <span>May 30, 2019</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Comedy, Drama, Thriller
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            @foreach ($popularMovies as $popularMovie)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <div class="mt-8">
                        <a href="#">
                            <img src="/images/parasite.jpg" alt="Parasite"
                                class="w-full h-[450px] object-cover rounded-lg hover:opacity-75 transition-opacity duration-300">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                            <div class="flex items-center text-gray-400 text-sm gap-1 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-4 text-orange-500">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>92%</span>
                                <span class="mx-2">|</span>
                                <span>May 30, 2019</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Comedy, Drama, Thriller
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
