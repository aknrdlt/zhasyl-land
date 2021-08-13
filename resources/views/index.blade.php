<video width="320" height="240" controls>
{{--    <source src="{{ Storage::url($video->file) }}" type="video/mp4">--}}
    <source src="{{ asset("storage/$link") }}" type="video/mp4">
</video>

<form method="get" action="/send">
    <input name="name" type="text" />
    <input name="phone" type="text" />
    <input name="message" type="text" />

    <input type="submit" value="Send"/>
</form>
