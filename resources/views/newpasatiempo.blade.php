@extends('layouts.app')

@section('content')
<div class="container">

  @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
   @endif

    <form method="POST" action="{{ route('create') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-success">
                {{ __('Crear') }}
            </button>
            <a type="button"  href="{{ route('pasatiempo') }}"class="btn btn-warning">
                {{ __('Volver') }}
            </a>
        </div>
    </div>



</form>

 
  
</div>
@endsection
