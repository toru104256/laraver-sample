<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post Details</title>
    </head>
    <body>
        <h1>{{ $posts->title }}</h1>
        <p>{{ $posts->content }}</p>

        <h2>Comments</h2>
        <ul>
            @foreach ($posts->comments as $comment)
                <li>
                    <strong>{{ $comment->commenter_name }}:</strong>
                    <p>{{ $comment->content }}</p>
                    <small>{{ $comment->created_at->diffForHumans() }}</small>
                </li>
            @endforeach
        </ul>
    </body>
    </html>
