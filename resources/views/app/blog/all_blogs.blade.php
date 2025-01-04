<x-layout
    title="All blog posts"
    description="Archive page for all blog posts"
>
    <h1>All Blog posts</h1>
    
    @if(!$posts->isEmpty())
        <ul>
        @foreach($posts as $post)
                <li class="mb-4 p-4 border border-gray-300 rounded">
                    <h3>{{$post->title}}</h3>
                    <p><strong>Author:</strong> {{$post->author->name}}</p>
                    <i class="mt-1 block">{{$post->excerpt}}</i>
                    
                    <ul class="flex flex-wrap gap-2 my-4">
                    @foreach($post->tags as $tag)
                        <li class="px-2 py-1 rounded white" style="background-color:{{$tag->color}}">
                            <small class="outline-1 outline-black text-white">{{$tag->tag}}</small>
                        </li>
                    @endforeach
                    </ul>
                    <x-button href="/blog/{{$post->id}}">Read post</x-button>
                </li>
        @endforeach
        </ul>
    
    @else
        <p>There are no blog posts.</p>
    @endif
</x-layout>