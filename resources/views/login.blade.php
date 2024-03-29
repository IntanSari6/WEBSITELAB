@extends('layouts.main')

@section('container')
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div
                    class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                    @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            @if(session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4
                                class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
                                LOGIN</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="/login" class="needs-validation" novalidate="">
                              @csrf
                                <div class="form-group">
                                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" authofocus required value="{{ old('email') }}">
                                  <label for="email">Email address</label>
                                  @error('email')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                      <label for="password">Password</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        LOGIN
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<div class="login-brand">
    <h4><img src="dist/assets/img/stisla-fill.svg" alt="logo" width="30" class="shadow-light rounded-circle">
        LABKOM</h4>
</div>
</div>
@endsection
