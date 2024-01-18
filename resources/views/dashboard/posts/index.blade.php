@extends('dashboard.layouts.main')

@section('container')

{{-- Header Dashboard Post --}}

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Post</h1>
</div>

{{-- Alert --}}

<div class="col-lg-8">
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
</div>

{{-- Table Post --}}

<div class="table-responsive col-lg-10">
  <a href="/dashboard/posts/create" class="btn btn-primary my-3">Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        
        {{-- Looping --}}

        @foreach ($posts as $post)
        <tr>

          {{-- Table Body --}}
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>

            {{-- See Post --}}

            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>

            {{-- Edit Post --}}

            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>

            {{-- Delete Post --}}

            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><i class="bi bi-x-circle"></i></button>
            </form>

          </td>
        </tr>
            
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection