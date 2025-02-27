
@extends('layouts.main')
@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row mb-3 justify-content-center">
   <div class="col-md-6">
      <form action="/blog">
         @if (request('category'))
         <input type="hidden" name="category" value="{{ request('category') }}">
         @endif
         @if (request('author'))
         <input type="hidden" name="author" value="{{ request('author') }}">
         @endif
         <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit" >Search</button>
          </div>
          
      </form>
   </div>
</div>


@if ($posts->count())
<div class="card mb-3">
   @if ($posts[0]->image)

      <div style="max-height: 350px; overflow: hidden;r">

      <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">    

      </div>

   @else
                    
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="category">

   @endif
   
   <div class="card-body text-center ">
     <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
     <p>
      <small class="text-body-secondary">
         by: <a href="/blog?author={{ $posts[0]->author->username }}" 
            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog??category={{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
         </small>
         </p>

     <p class="card-text">{{ $posts[0]->excerpt }}</p>

     <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
   </div>
 </div>
 
 
 
 <div class="container">

   <div class="row">
      @foreach ($posts as $post)
         <div class="col-md-4 mb-3">
            <div class="card">
               <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                  <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
               </div>
               @if ($post->image)

                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid d-block">    

                @else
                    
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="category">

                @endif
               
               <div class="card-body">
                  <h5 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-dark text-decoration-none">{{ $post->title }}</a></h5>
                  <p>by: <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name}} </a>{{ $post->created_at->diffForHumans() }} </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>
               </div>
            </div>
         </div>
      @endforeach
   </div>
 </div>

 @else
 <p class="text-center fs-4">No Post Found</p>
@endif

{{ $posts->links() }}


@endsection

