<label>{{ __('Title') }}:<br />
    <input name="title" type="text" value="{{ old('title', $post->title) }}"><br />
    @error('title')
        <small style="color:red">{{ $message }}</small><br />
    @enderror
</label>
<label>{{ __('Body') }}:<br />
    <textarea name="body">{{old('body', $post->body)}}</textarea><br />
    @error('body')
    <small style="color:red">{{ $message }}</small><br />
@enderror
</label><br />
