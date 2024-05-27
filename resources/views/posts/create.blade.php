<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
</head>
<body>
    <h1>Blog Name</h1>
    <form action='/posts' method='POST'>
        @csrf
            <div class='title'>
    <h2>Title</h2>
         <input type='text' name='post[title]' placeholder='タイトル' required>
         </div>
         <div class='body'>
    <h2>Body</h2>
    <textarea name='post[body]' placeholder='今日も一日お疲れさまでした' rows='5' cols='40' required></textarea>
        </div>
    <input type='submit' value='store'>
    </form>
    <div class='footer'>
        <a href='/'>back</a>
    </div>
</body>
</html>