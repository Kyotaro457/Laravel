<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body class="antialised">
    <h1>Blog Name</h1>
        <a href='/posts/create'>create</a>
    <div class='posts'> 
      @foreach ($posts as $post)
        <div class='post'>
            <a href="/posts/{{ $post->id }}"> {{ $post->title }}</a>
            <p class='body'>{{ $post->body }}</p>
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
            </form>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            <p></p>
        </div>
        @endforeach
    </div>
    <div class='paginate'>
       {{ $posts->links() }}
    </div>
    <script>
        function deletePost(id){
            'use strict'
            
            if (confirm('削除すると復元できません。\n本当に削除しますか？')){
            document.getElementById(`form_${id}`).submit();
        }
        }
    </script>
</body>
</html>