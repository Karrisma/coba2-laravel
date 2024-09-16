
@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <h5>{{ $post->author }}</h5>
    {{ $post->excerpt }}
</article>

<a href="/blog">Back To Posts</a>
@endsection