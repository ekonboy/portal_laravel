<x-layout meta-title="Blog title" meta-description="Blog description">




    {{-- @if (session('status'))
    <div class="status">
        {{ session('status') }}
    </div>
@endif --}}



    <h1>Blog</h1>
    <a href="{{ route('posts.create') }}">Create new post</a>

    @foreach ($posts as $post)
        {{-- <h2>{{ $post->title }}</h2>  --}}
        <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
        {{--  @dump($post) --}}
    @endforeach

    {{-- @dump($posts) --}}
</x-layout>
