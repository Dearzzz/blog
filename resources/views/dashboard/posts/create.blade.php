@extends('dashboard.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
  </div>

  <div class="col-lg-8">

      <form method="POST" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
        @csrf

        {{-- Title --}}
        
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">

          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

          {{-- Slug --}}

        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
          
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          
        </div>

          {{-- Category --}}

        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">

            @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                    
                <option value="{{ $category -> id }}" selected>{{ $category->name }}</option>

                @else
                <option value="{{ $category -> id }}" >{{ $category->name }}</option>
                    
                @endif

            @endforeach
          </select>
        </div>

        {{-- Upload Image --}}

        <div class="mb-3">
          <label for="image" class="form-label @error('image') is-invalid @enderror">Post Image</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
          
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

        </div>

        {{-- Body --}}

        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          @error('body')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <textarea class="form-control" id="body" rows="3" name="body">{{ old('body') }}</textarea>
        </div>
        

        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>

  </div>

  {{-- Slugable --}}

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
  </script>


@endsection

@section('script')
    
  {{-- CKEditor --}}

<script>
  ClassicEditor
      .create( document.querySelector( '#body' ) )
      .catch( error => {
          console.error( error );
      } );

      function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
          imgPreview.src = oFREvent.target.result;
        }

      }


</script>

@endsection