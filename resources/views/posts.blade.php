@extends('layout')

    @section('title', 'Posts List')

    @section('content')
        <h1>Posts List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contents</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->contents }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
