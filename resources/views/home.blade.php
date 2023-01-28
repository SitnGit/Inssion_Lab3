@extends('layouts.app')

@section('content')
<div class="container">
        <a href="/posts/create" class="tw-p-3 tw-text-white hover:tw-bg-blue-400 tw-bg-blue-600">Create Post</a>
        <a href="/posts/create2" class="tw-p-3 tw-text-white hover:tw-bg-blue-400 tw-bg-blue-600">Create Gallery</a>

        <a href="/posts/all" class="tw-p-3 tw-text-white hover:tw-bg-red-400 tw-bg-red-600">Show All</a>
        <div class="tw-py-5 ">
            <h1 class="tw-text-4xl tw-py-4">Latest Posts</h1>
            <div class="tw-grid tw-grid-cols-3 tw-gap-3">
                @foreach($posts as $post)
                    <a href="/posts/{{$post->id}}" class="tw-border hover:tw-bg-gray-100 tw-bg-gray-300 tw-p-5 text-center">{{$post->title}}</a>
                @endforeach
            </div>
        </div>
</div>
@endsection
