<x-layout meta-title="Blog title" meta-description="Blog description">
    <h1>Blog</h1>

    @foreach ($posts as $post )
        <h2>{{ $post['title'] }}</h2>
    @endforeach

    {{-- @dump($posts) --}}
</x-layout>