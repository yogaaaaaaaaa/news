@extends('component.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">

      @if(session()->has('Registation success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('Registation success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('LoginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
       {{ session('LoginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                id="emali" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="emali">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
            <small class="d-block mt-3"><a href="/register">Form Register</a></small>
          </main>
    </div>
</div>


@endsection