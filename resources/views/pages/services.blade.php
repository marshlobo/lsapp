@extends('layouts.app')
@section('content')
<h1> {{$title}}</h1>
<ul>
    @if (count($services))
        @foreach ($services as $item)
        <li>{{$item}}</li>            
        @endforeach
    @endif  
@endsection
   

