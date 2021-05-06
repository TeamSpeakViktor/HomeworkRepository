@extends('layout')

@section('title', 'News')

@section('content')
    <a class="btn btn-primary" role="button"href="{{ route('news.create') }}">Create news</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Date</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $new)
        <tr>
            <th scope="row">{{ $new->id}}</th>

            <td><a href="{{ route('news.show', $new) }}"> {{ $new->title }}</a>
            </td>
            <td><a href="{{ route('news.show', $new) }}">{{ $new->content }}</a>
            </td>
            <td><a href="{{ route('news.show', $new) }}">{{ $new->date}}</a>
            </td>
            <td>
                <form method="POST" action="{{ route('news.destroy', $new) }}">
                    <a type="button" class="btn btn-warning" href="{{ route('news.edit', $new) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>

@endsection
