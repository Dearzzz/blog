@extends('dashboard.layouts.main')

@section('container')

{{-- Header Dashboard Post --}}

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Category</h1>
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

<div class="table-responsive col-lg-8">
  <a href="/dashboard/categories/create" class="btn btn-primary my-3">Create New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        
        {{-- Looping --}}

        @foreach ($categories as $category)
        <tr>

          {{-- Table Body --}}
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>

            {{-- See category --}}

            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>

            {{-- Edit category --}}

            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>

            {{-- Delete category --}}

            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
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