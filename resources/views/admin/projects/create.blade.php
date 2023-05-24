@extends('layouts.admin')
@section('page-title', 'Crea un nuovo Project')

@section('content')
      <div class="col-10 mt-5">
            <form method="POST" action="{{ route('admin.projects.store') }}">
                  @csrf

                  <div class="form-floating mb-3">
                        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                              id="title" placeholder="Inserisci il titolo del progetto..." value="{{ old('title') }}">
                        <label for="title">Titolo</label>
                  </div>
                  @error('title')
                        <div class="invalid-feedback">
                              {{ $message }}
                        </div>
                  @enderror

                  <div class="form-floating mb-3">
                        <input name="image_src" type="text" class="form-control @error('image_src') is-invalid @enderror"
                              id="image_src" placeholder="Inserisci un url valido per l'immagine..."
                              value="{{ old('image_src') }}">
                        <label for="image_src">Url Immagine</label>
                  </div>
                  @error('image_src')
                        <div class="invalid-feedback">
                              {{ $message }}
                        </div>
                  @enderror

                  <div class="form-floating mb-3">
                        <input name="description" type="text"
                              class="form-control @error('description') is-invalid @enderror" id="description"
                              placeholder="Inserisci il titolo del progetto" value="{{ old('image_src') }}">
                        <label for="description">Descrizione</label>
                  </div>
                  @error('description')
                        <div class="invalid-feedback">
                              {{ $message }}
                        </div>
                  @enderror


                  <button class="btn btn-success" type="submit">CREA</button>
            </form>

      </div>
@endsection
