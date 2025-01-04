@if($post !== null)
    <x-layout
        title="{{$post->author->name}} &ndash; {{$post->title}}"
        description=""
        layout="blog"
    >
        <div class="flex flex-wrap w-full justify-between items-center mb-4">
            <h1 class="mb-0">{{$post->title}}</h1>
        </div>
        <p>{{$post->content}}</p>
        <div class="mt-4">
            <x-button href="/blog">Back to blogs</x-button>
        </div>
    </x-layout>
@else
<x-layout
    title="No blog post found"
    description=""
>
    <div class="flex w-full justify-between items-center mb-4">
        <h1 class="mb-0">404: No blog post found</h1>
        <p><a href="/blog">Back to blog posts</a></p>
    </div>
    <p>There is currently no blog post with the specified ID. Try again later.</p>
</x-layout>
@endif

