@extends('layouts.app')
@section('css')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> --}}
@endsection
@section('content')
@if($data)
    @foreach($data as $item)
        {{ $item }}<br>
    @endforeach
@endif
<div class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="d-block img-fluid my-3" src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyDW8nO9JhT_pEjebobq9pgUF2cEp0EUb1I&amp;markers=Alexander+platz&amp;center=Berlin&amp;zoom=13&amp;size=640x500&amp;sensor=false"></div>
        <div class="col-md-6">
          <h1>Contact us</h1>
          <p>We would love to hear from you</p>
          <form method="post" action="contact/send">
            <div class="form-group"> <label for="InputName">Your name</label>
              <input type="text" class="form-control" id="InputName" placeholder="Your name" name="name"> </div>
            <div class="form-group"> <label for="InputEmail1">Email address</label>
              <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email" name="email"> </div>
            <div class="form-group"> <label for="Textarea">Write here</label> <textarea class="form-control" id="Textarea" rows="3" placeholder="Type here" name="text"></textarea> </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
  @section('js')
  {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> --}}
@endsection
