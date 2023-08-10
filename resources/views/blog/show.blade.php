@extends('layouts.app')

@section('content')


    
<div class="container m-auto w-4/5 text-center pt-15 pb-5">
    @if(session()->has('message'))
        <div class="bg-green-100 mb-6 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <p class="font-bold mt-2">{{session()->get('message')}}</p>
                </div>
        </div>
    @endif
    <h1 class="text-6xl font-bold text-gray-900">{{$post -> title}}</h1>
    <div class="my-7">
        By: <span class="text-gray-600 italic">{{$post -> user->name}}</span>
        on  <span class="text-gray-600 italic">{{date('d-m-Y', strtotime($post->updated_at))}}</span>
    </div>

    <div class="flex h-96">
        <img class="object-cover rounded-lg w-full" src="/images/{{$post -> image_path}}" alt="">
    </div>
</div>

<div class="container m-auto w-4/5 pb-5">
    <p class="text-l text-gray-700 py-8 leading-6">
        {{$post -> description}}
    </p>
    @if(Auth::user() && Auth::user()->id == $post->user_id)
        <a href="/blog/{{$post -> slug}}/edit" class="bg-green-700 text-right text-gray-100 mt-10 py-4 px-5 shadow-2xl rounded-lg font-bold uppercase text-l place-self-start hover:bg-green-900 transition duration-300">Edit Post</a>
        <form action="/blog/{{$post->slug}}" method="POST" class="inline-block">
            @csrf
            @method('delete')

            <button type="submit" class="bg-red-700 text-right text-gray-100 mt-10 py-4 px-5 shadow-2xl rounded-lg font-bold uppercase text-l place-self-start hover:bg-red-900 transition duration-300">Delete Post</button>
        </form> 
    @endif
</div>

@endsection
