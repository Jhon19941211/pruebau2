@extends('layouts.app')

@section('content')
<div class="container">
  
<a type="button" href="{{ route('pasatiempo')}} " class="btn btn-danger">Atrás</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($pasatiempos as $value=>$key)
  <tr>
      <td>{{$key->id}}</td>
      <td>{{$key->name}}</td>
    </tr>
  @endforeach
  
  </tbody>
</table>


 
  
</div>
@endsection
