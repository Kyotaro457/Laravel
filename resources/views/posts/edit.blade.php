<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
</head>
<body>
    <h1 class='title'></h1>
    <div class='content'>
    <form action="/posts/{{ $post->id }}" method='POST'>
        @csrf
        @method('PUT')
        <div class='content_title'>
        <h2>Title</h2>
             <input type='text' name='post[title]' value="{{ $post->title }}">
             <p class='title__error' style="color:red">{{ $errors->first('post.title') }}</p>
             </div>
             <div class='content_body'>
        <h2>Body</h2>
        <textarea name='post[body]'  value="{{ old('$post->body') }}"></textarea>
        <p class='title__body' style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
        <input type='submit' value='update'>
    </form>
    <div class='footer'>
        <a href="/posts/{{ $post->id }}">back</a>
    </div>
    </div>
</body>
</html>