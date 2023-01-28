
@extends('layouts.app')

@section('content')
    <div class="container row space-y-2">
        <h1 class="tw-text-4xl">Create Post</h1>
        <form action="/posts/store" class="form" method="post">
            @csrf
            <div class="form-group @if($errors->has('title')) has-error @endif">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="form-group @if($errors->has('content')) has-error @endif">
                <label>Content</label>
                <textarea class="form-control" name="content" cols="3" rows="5">{{ old('content') }}</textarea>
                <span class="text-danger">{{ $errors->first('content') }}</span>
            </div>
            <div class="form-group @if($errors->has('image')) has-error @endif">
                <label>Image</label>
                <input class="form-control" name="image">{{ old('image') }}
                <span class="text-danger">{{ $errors->first('image') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@stop
