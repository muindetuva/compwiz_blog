<x-layout>
    <img src="{{asset('storage/'. $post->image)}}" alt="Post Image">
    <h1 class="font-bold mt-3 text-xl">{{$post->title}}</h1>
    <p class="text-sm font-extralight">
        {{$post->user->name}} &#x2022; {{date('d M Y', strtotime($post->created_at))}}
    </p>

    <div class="mt-3">
        {!! $post->content !!}
    </div>

</x-layout>

