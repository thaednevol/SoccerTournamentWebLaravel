@extends('general.layout')

@section('content')



    @foreach ($users as $user)
        <li>{{ $user }}</li>
    @endforeach

	
@stop