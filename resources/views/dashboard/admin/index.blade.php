@extends('dashboard.layouts.main')

{{-- halaman admin dashboard --}}
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories</h1>
    </div>

    {{-- menampikan pesan success --}}
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-4" role="alert">
      {{ session('success') }}
    </div>
    @endif

    <div class="table-responsive col-lg-4">
      <a href="/dashboard/admin/create" class="btn btn-primary mt-3">Create new Category</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
              <a href="/dashboard/admin/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="{{ route('admin.destroy', $category) }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Anda Yakin?')">
              <span data-feather="x-circle"></span></button>
              </form>
            </td>
          </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection