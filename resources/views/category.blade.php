@dd($category)

@extends('layouts.main')
@section('container')

<h1>Post Category {{ $category }}</h1>

<article class="mt-5">
@foreach ($posts as $post)
<h3>
   <a href="/blog/{{ $post->slug }}"> {{ $post->title }} </a>
</h3>
<p>{{ $post->excerpt }}</p>
</article>

@endforeach

@endsection

