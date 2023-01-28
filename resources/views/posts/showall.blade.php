@extends('layouts.app')

@section('content')
    <div class="px-3">
        <h1 class="tw-text-4xl">POSTS</h1>

        <div class="tw-grid tw-grid-cols-4 tw-gap-3 tw-py-3">
            @foreach($data as $post)
                <a href="/posts/{{$post->id}}" class="tw-border hover:tw-bg-gray-100 tw-bg-gray-300 tw-p-5 text-center">{{$post->title}}</a>
            @endforeach
        </div>
    </div>
@stop
