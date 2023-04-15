<div>
    <label for="title-input">Title</label>
    <input id="title-input" type="text" name="title" value="{{old('title', optional($conference ?? null)->title)}}">
    @error('title')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="content-input">Content</label>
    <textarea id="content-input" type="text" name="content">{{old('content', optional($conference ?? null)->content)}}</textarea>
    @error('content')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="address-input">Address</label>
    <textarea id="address-input" type="text" name="address">{{old('address', optional($conference ?? null)->address)}}</textarea>
    @error('address')
    <p>{{$message}}</p>
    @enderror
</div>
