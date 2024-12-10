<x-layout meta-title="Create new post" meta-description="Create new post">
    <h1>{{ __('Create a new post') }}</h1>
<!-- @ dump($errors->all())--><!--//esto muestra el error justo donde falla-->


    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>{{ __('Title') }}:<br />
            <input name="title" type="text" value="{{ old('title') }}"><br />
            @error('title')
                <small style="color:red">{{ $message }}</small><br />
            @enderror
        </label>
        <label>{{ __('Body') }}:<br />
            <textarea name="body">{{old('body')}}</textarea><br />
            @error('body')
            <small style="color:red">{{ $message }}</small><br />
        @enderror
        </label><br />
        <button type="submit">{{ __('Send') }}</button>
    </form>


    <br />
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
</x-layout>
