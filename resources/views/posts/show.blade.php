<x-layout>
    <img src="{{asset('storage/'. $post->image)}}" alt="Post Image">
    <h1 class="font-bold mt-3 text-xl">{{$post->title}}</h1>
    <p class="text-sm font-extralight">Alfred Tuva &#x2022; 1 Feb 2023</p>

    <div class="mt-3">
        {!! $post->content !!}
    </div>

</x-layout>

