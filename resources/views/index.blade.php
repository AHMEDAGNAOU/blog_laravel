@extends('layouts.app') 

@section('content')

    <!-- HERO -->
    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-900 text-5xl uppercase font-bold pb-10 border-text-black">Welcome to my Blog</h1>
        <a href="/" class="bg-gray-100 text-gray-900 py-4 px-5 rounded-lg font-bold uppercase text-xl hover:shadow-2xl hover:bg-gray-900 hover:text-gray-100 transition duration-300">Start Reading</a>
    </div>
        
    <!-- How to be a expert -->
    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/42/960/620" alt="">
        </div>
        <div class="flex flex-col items-left justify-center my-10 mx-8 md:mx-0 sm:m-0">
            <h2 class="font-bold text-gray-700 text-4xl uppercase ">
                How to be an expert in 2023
            </h2>

            <p class="font-bold text-gray-600 text-xl pt-2">
                You can find a list of all programming languages here.
            </p>

            <p class="py-4 text-gray-500 text-sm leading-5">
                Get the same rendom image every time based on a seed, by adding to the start of the url, You may combine any of the options above. For example, to grt a sepecific image that is grayscale and blurred
            </p>
            
            <a href="/" class="bg-blue-900 text-gray-100  py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start hover:bg-blue-700 transition duration-300">Read More</a>

        </div>
    </div>

    <!-- Blog Categoreies -->
        <!-- <div class="text-center p-15 bg-gray-500 text-gray-100">
            <h2 class="text-2xl">Blog Categories</h2>
            <ul class="container mx-auto pt-10 sm:grid grid-clos-4">
                <li class="font-bold text-2xl py-2">UX Design Thinking</li>
                <li class="font-bold text-2xl py-2">Programming Languages</li>
                <li class="font-bold text-2xl py-2">Graphic Design</li>
                <li class="font-bold text-2xl py-2">Front-End Development</li>
            </ul>
        </div> -->
        <div class="container w-full h-full mx-auto text-center bg-gray-900 shadow-lg rounded-2xl flex items-center justify-center hover:shadow-2xl hover:bg-gray-800 transition duration-300"><!-- -->
            <div class="flex flex-col py-10 justify-around h-full">
                <h2 class="text-2xl text-gray-100">Blog Categories</h2>
                <div>
                    <ul class="flex flex-col leading-loose pt-10 text-center gap-7 space-y-6 text-gray-100 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0 l">
                        <li class="no-underline hover:underline font-bold text-2xl py-2 text-sm" title="Design"> UX Design Thinking </li>
                        <li class="no-underline hover:underline font-bold text-2xl py-2 text-sm" title="Programming">Programming Languages </li>
                        <li class="no-underline hover:underline font-bold text-2xl py-2 text-sm" title="Graphic">Graphic Design </li>
                        <li class="no-underline hover:underline font-bold text-2xl py-2 text-sm" title="Development">Front-End Development</li>
                    </ul>
                </div>  
            </div>
        </div>

    <!-- Recent Posts -->
    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Receent Posts</h2>
        <p class="text-gray-700 leading-6 px-10">
            Do you want to show your recent posts in WordPress? Displaying recent posts helps users easily discover your new content and spend more time on your site.
            You can add a list of your latest posts in your sidebar, after the end of your post content, inside your post content with a shortcode, in your footer widget area, or anywhere else you like.
            In this article, we will show you how to display recent posts in WordPress using a variety of different methods.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-900 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pd-15 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-200 text-yellow-900 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">PHP</a></li>
                    <li class="bg-yellow-200 text-yellow-900 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Programming</a></li>
                    <li class="bg-yellow-200 text-yellow-900 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Languages</a></li>
                    <li class="bg-yellow-200 text-yellow-900 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Backend</a></li>
                </ul>

                <h3 class="text-l py-10 leading-6">
                    PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.
                </h3>

                <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 mb-12 rounded-lg font-bold uppercase text-l hover:bg-gray-100 hover:text-yellow-900 transition duration-300  inline-block">Red More</a>
            </div>
        </div>

        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/id/212/960/620" alt="">
        </div>
    </div>


@endsection