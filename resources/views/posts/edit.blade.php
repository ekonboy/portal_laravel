<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>Edit form</h1>
   
    <!-- @ dump($post->toArray()) esto muestra el array en la pagina-->

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')
        
        @include('posts.form-fields')
        
        <button type="submit">{{ __('Send') }}</button>
    </form>


    <a href="{{ route('posts.index') }}">Back</a>
    </x-layout>