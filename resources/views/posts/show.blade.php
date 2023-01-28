@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="tw-text-4xl tw-p-5 tw-pl-12 tw-font-bold">{{$post->title}}</h1>
        @if($post->image!=" ")
        <div class="tw-grid tw-grid-cols-3 tw-p-5 tw-justify-center tw-justify-items-center">
            <div class="tw-col-span-1"><img class="w-64" src="{{$post->image}}"></div>
            <div class="tw-px-3 tw-col-span-2">{{$post->content}}</div>
        </div>
        @else
            @php
                $images = $post->content;
                $images = preg_split('/\r\n|\r|\n/',$images);
            @endphp
            <div class="tw-grid tw-grid-cols-4 tw-gap-5">
                @foreach($images as $image)
                    <img src="{{$image}}" class="w-64">
                @endforeach
            </div>
        @endif

    </div>
@stop
