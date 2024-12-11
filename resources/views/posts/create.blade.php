<x-layout meta-title="Create new post" meta-description="Create new post">
    <h1>{{ __('Create a new post') }}</h1>
<!-- @ dump($errors->all())--><!--//esto muestra el error justo donde falla-->


    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        
      @include('posts.form-fields')

        <button type="submit">{{ __('Send') }}</button>
    </form>


    <br />
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
</x-layout>
