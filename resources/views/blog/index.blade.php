@extends('layouts.app')

@section('content')
 
<div class="container m-auto w-3/4 text-center pt-8">
    @if(session()->has('message'))
        <div class="bg-red-100 mb-6 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <p class="font-bold mt-2">{{session()->get('message')}}</p>
            </div>
        </div>
    @endif
</div>
<div class="container m-auto text-center pt-8 pb-8">
    
    <h1 class="text-6xl font-bold">All Posts</h1>
</div>

@if(auth::check())
    <div class="container text-right sm:grid mx-auto p-5 border-b border-gray-300">
        <a href="/blog/create" class="bg-green-700 text-right text-gray-100 py-4 px-5 shadow-lg rounded-lg font-bold uppercase text-l place-self-start hover:bg-green-900 transition duration-300">Add a new Post</a>
    </div>
@endif

@foreach($posts as $post)
    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
        <div class="flex">
            <img class="object-cover rounded-lg" src="/images/{{$post -> image_path}}" alt="">
        </div>

        <div>
            <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{$post -> title}}</h2>
            <div>
                By: <span class="text-gray-600 italic">{{$post -> user->name}}</span>
                on  <span class="text-gray-600 italic">{{date('d-m-Y', strtotime($post->updated_at))}}</span>
                <p class="text-l text-gray-700 py-8 leading-6">
                    {{$post -> description}}
                </p>
                <a href="/blog/{{$post -> slug}}" class="bg-blue-900 text-gray-100  py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start hover:bg-gray-800 transition duration-300">Read More</a>
            </div>
        </div>
    </div>
@endforeach


@endsection
