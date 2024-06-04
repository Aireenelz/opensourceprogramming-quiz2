<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    
    <form action="{{ route('posts.search') }}" method="POST">
        @csrf
        <input type="text" name="query" placeholder="Search for posts...">
        <button type="submit">Search</button>
    </form>

    <ul>
        @foreach ($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong><br>
                {{ $post->content }}<br>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>