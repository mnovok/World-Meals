@extends('layouts.master')

@section('content')

#endsection@extends('layouts.master')
@section('content')
    @foreach ($meals as $meal)
        <p>User: {{ $meal->title }}</p>
    @endforeach
@stop