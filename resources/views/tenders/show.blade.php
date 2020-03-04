@extends('layouts.app')
  
     @section('content')
     <a href="/tenders" class="btn btn-primary">Go Back</a>
     
<h1>{{$chereta->title}}</h1>
<small>written on{{$chereta->created_at}}</small>
<div>
    {{$chereta->body}}
</div>  
 
@endsection