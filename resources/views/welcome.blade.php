<x-layout>
    <h1 class="text-2xl font-bold text-center mt-3">
        Tales From Our Team
    </h1>
    <p class="text-center text-xs">Latest tech trends, our opinions and our thoughts.</p>

    <div class="mt-3  relative">
        <img class="lg:h-80 object-cover brightness-50 w-4/5 m-auto" src="{{asset('images/welcome.jpg')}}"
             alt="welcom image">
        <p class="absolute bottom-2 brightness-100 inset-x-1/4 text-white text-xs">
            We hope you enjoy our ramblings.
        </p>
    </div>

    <div class="mt-5">
        <h3 class="text-center font-medium mb-3">Latest Posts</h3>

        <div class="flex flex-col lg:flex-row">
            @foreach($posts as $post)
                <x-post :post="$post"></x-post>
            @endforeach
        </div>


        <a class="block text-center text-sm font-medium my-3 text-yellow-500 hover:text-yellow-700"
           href="/posts">
            See All Posts
        </a>
    </div>

</x-layout>
