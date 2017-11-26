@extends('layouts.app')
@section('content')
Home page<br>
@foreach ($data as $cat)
    <p>This is category {{ $cat['id'] }} => {{ $cat['name'] }}</p>
@endforeach
@endsection
