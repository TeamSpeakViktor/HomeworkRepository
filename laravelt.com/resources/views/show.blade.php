@extends('layout')

@section('title', 'news')

@section('content')

    <a type="button" class="btn btn-secondary" href="{{ route('news.index') }}">Back to news</a>
    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{$news->id}}</li>
            <li class="list-group-item">Title: {{$news->title}}</li>
            <li class="list-group-item">Content: {{$news->content}}</li>
            <li class="list-group-item">Date {{$news->date->format('d/m/y H:i:s')}}</li>
            <li class="list-group-item">Created: {{$news->created_at->format('d/m/y H:i:s')}}</li>
            <li class="list-group-item">Updated: {{$news->updated_at->format('d/m/y H:i:s')}}</li>
        </ul>
    </div>

    <form method="POST" class="mt-3" action="{{ route('news.destroy', $news) }}">
        <a type="button" class="btn btn-warning" href="{{ route('news.edit', $news) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>

@endsection
