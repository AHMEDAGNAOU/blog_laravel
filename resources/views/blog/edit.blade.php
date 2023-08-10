@extends('layouts.app')

@section('content')

<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold text-gray-900">Edit Post</h1>
</div>

<div class="container m-auto w-4/5 text-center pt-15 pb-5">
    <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="Title" value="{{$post -> title}}" class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5">
        <textarea name="description" placeholder="Description" class="w-full h-60 text-l rounded-lg shadow-lg border-b p-7 mb-5"> {{$post -> description}}</textarea>
        
        <div class="flex items-center justify-center shadow-lg w-full">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" name="image" type="file" class="hidden" />
            </label>
        </div> 
        <button type="submit" class="bg-green-700 shadow-2xl text-gray-100 mt-8 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start hover:bg-green-900 transition duration-300" >Submit the post</button>
    </form>
</div>

@endsection
