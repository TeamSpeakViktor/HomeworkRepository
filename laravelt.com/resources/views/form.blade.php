@extends('layout')

@section('title', 'News')

@section('content')

    <a type="button" class="btn btn-secondary" href="{{ route('news.index') }}">Back to news</a>
    <form method="POST"
          @if(isset($news))
          action="{{ route('news.update', $news) }}"
          @else
          action="{{ route('news.store') }}"
          @endif
          class="mt-3">
        @csrf
        @isset($news)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="Title"
                       value="{{ old('title', isset($news) ? $news->title : null) }}"
                       type="text" class="form-control" placeholder="Title" aria-label="Title">
                @error('Title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input name="Content"
                       value="{{ old('content',  isset($news) ? $news->content : null) }}"
                       type="text" class="form-control" placeholder="Content" aria-label="Content">
                @error('Content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input name="Date"
                       value="{{ old('date', isset($news) ? $news->date : null) }}"
                       type="Date" class="form-control" placeholder="Date" aria-label="Date">
                @error('date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
