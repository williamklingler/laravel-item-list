@extends ('layout')

@section ('content')
@foreach ($users as $user)
<h1> <a href="\items\{{$user->id}}"> {{$user->name}} </a> </h1>
@endforeach

@endsection
