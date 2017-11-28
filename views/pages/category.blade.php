@extends('layouts.app')
@section('content')
Home page<br>
Test cache: the time is {{ time() }}<br>
@foreach ($data as $cat)
    <p>This is category {{ $cat['id'] }} => {{ $cat['name'] }}</p>
@endforeach
<br>showing {{$page}} out of {{$pagination}}
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    @for ($i = 1; $i < $total; $i++)
        <li><a href="{{ SITE_ROOT }}/home/category/{{ $i }}">{{ $i }}</a></li>
    @endfor
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
@endsection
