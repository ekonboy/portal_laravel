<x-layout meta-title="Blog title" meta-description="Blog description">




    {{-- @if (session('status'))
    <div class="status">
        {{ session('status') }}
    </div>
@endif --}}



    <h1>Blog</h1>
    <a href="{{ route('posts.create') }}">Create new post</a>

    @foreach ($posts as $post)
    <div style="display: flex;align-items:baseline">

        {{-- <h2>{{ $post->title }}</h2>  --}}
        <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>&nbsp;
        <a href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE');
            <button type="submit">{{ __('Delete') }}</button>
        </form>
        {{--  @dump($post) --}}

    </div>
    @endforeach

    {{-- @dump($posts) --}}
</x-layout>
