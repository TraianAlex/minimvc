@extends('layouts.app')
@section('content')
Home page<br>
Test cache: the time is {{ time() }}<br>
@foreach ($data as $cat)
    <p>This is category {{ $cat['id'] }} => {{ $cat['name'] }}</p>
@endforeach
<br>showing {{$page}} out of {{$total}}<br><br>
@include('partials.pagination', ['url' => 'home/category', 'total' => $total])
@endsection
