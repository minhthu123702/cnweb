<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>Danh sách bài viết</h1>
    
    @if($posts->isEmpty())
        <p>Không có bài viết nào.</p>
    @else
        @foreach($posts as $post)
            <p>{{ $post->content }}</p>
        @endforeach
    @endif
</body>
</html>
