@extends ('layout')

@section('content')
@foreach ($items as $item)
<div class = "m-5 p-3 bg-light" style = "overflow: auto;">
  <h1 style = "color: red;"> {{$item->title}} </h1>
  <div class = "bg-gray-800"  >
    <h3> {{$item->excerpt}} </h3>
    <p> {{$item->body}} </p>
  </div>
  <a href = "\items\{{$item->user->id}}"> <strong> {{$item->user->name}} </strong> </a>
</div>
@endforeach

@endsection
