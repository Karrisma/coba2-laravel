@extends('layouts.main')

@section('container')

   <h1>Curiculum Vitei</h1> 
   <img src="img/{{$image}}" alt="{{$name}}" width="200" class="img-thumbnail rounded-circle">
   <h5>{{$name}}</h5>
   <h5>{{$address}}</h5>
   <h5>{{$email}}</h5>
  
   <h5>{{$pendidikan}}</h5>
   <h5>{{$organisasi}}</h5>
   @endsection
