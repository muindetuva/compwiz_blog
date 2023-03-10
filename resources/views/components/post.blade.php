<a href="{{'/posts/' . $post->id }}"
   class="w-64 mx-auto  hover:shadow-md transition duration-300 ease-in-out my-2 border">
    <img src="{{ asset('storage/'. $post->image)  }}" alt="Blog image">
    <div class="p-2">

        <p class="mt-1 text-xs font-medium">
            {{$post->user->name}} &#x2022; {{date('d M Y', strtotime($post->created_at))}}
        </p>
        <div class="flex justify-between items-center">
            <p class="mt-1 font-bold">{{ $post->title }}</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                 class="w-4 h-4">
                <path fill-rule="evenodd"
                      d="M8.25 3.75H19.5a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z"
                      clip-rule="evenodd"/>
            </svg>

        </div>
        <p class="mt-1 text-sm">
            {{ $post->caption }}
        </p>
    </div>
</a>
