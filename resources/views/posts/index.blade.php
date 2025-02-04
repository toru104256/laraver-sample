<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Posts List</title>
        <!-- Add any CSS or JavaScript files here -->
    </head>
    <body>
        <h1>Posts List</h1>

        <!-- Display the list of posts -->
        <ul>
            @foreach ($posts as $post)
                <li>
                    <strong>{{ $post->name }}</strong> <!-- Replace 'title' with the actual column name -->
                    <p>{{ $post->contents }}</p> <!-- Replace 'content' with the actual column name -->
                </li>
            @endforeach
        </ul>
    </body>
    </html>
