<x-layout>
    <div class="mb-3">
        <h1 class="text-2xl font-bold text-center mt-3">
            All Posts
        </h1>
        <p class="text-center text-xs">Latest tech trends, our opinions and our thoughts.</p>
    </div>

    <div class="flex flex-col lg:flex-row flex-wrap">
        @foreach($posts as $post)
            <x-post
                :post="$post"
            ></x-post>
        @endforeach
    </div>
</x-layout>
