@extends('layouts.template')
@section('content')
  <link rel="stylesheet" href="/css/styleHome.css">

  <div class="container">

      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header"><h5>{{ __('Editar Perfil') }}</h5></div>
                  <div class="cajaImagen">
                      <img src="/storage/{{auth::user()->avatar}}" class="avatarPerfil">
                  </div>



                  <div class="card-body">
                      <form method="POST" action="/perfil" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cambiar nombre de usuario:') }}</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Modificar su email:') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Cambiar su avatar:') }}</label>

                              <div class="col-md-6">
                                  <input id="avatar" type="file" @error('image') is-invalid @enderror name="avatar" >

                                  @error('image')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Enviar') }}
                                  </button>

                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
