@extends('layout')

    @section('title', 'Comments List')

    @section('content')
        <h1>Comments List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Post ID</th>
                    <th>Commenter Name</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->post_id }}</td>
                        <td>{{ $comment->commenter_name }}</td>
                        <td>{{ $comment->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
