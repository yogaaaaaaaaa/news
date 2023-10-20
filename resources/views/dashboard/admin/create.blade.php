@extends('dashboard.layouts.main')


@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new Category</h1>
    </div>

    <div class="col-mb-6">
        <form method="post" action="/dashboard/admin" class="mb-5">
            @csrf 
            <div class="mb-3">
              <label for="name" class="form-label">Category</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  autofocus
              value="{{ old('name') }}">
              @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"   
              value="{{ old('slug') }}">
              @error('slug')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

<script>
        const title = document.querySelector("#name");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

</script>


@endsection