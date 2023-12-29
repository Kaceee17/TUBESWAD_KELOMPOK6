@extends('layouts.layout')

@section('content')
<!-- Jumbotron -->
<section id="home">
  <div class="container">
    <div class="d-flex wrap justify-content-between align-items-center gap-5">
      <div style="width: 900px">
        <h2 class="fw-semibold fst-italic text-center"><b>WELCOME TO T-FLEET</b></h2>
        <br>
        <p class="mt-3">Yuk gaiss naik tayoooo</p>
        <div class="d-flex justify-content-lg-start mt-2">
        </div>
      </div>
      <div class="d-flex flex-column justify-content-between">
        <img class="logout card-img-top" style="width: 650px" src="{{ asset('images/TayoRMB.png') }}" alt="Tayo Image">
      </div>
    </div>
  </div>
</section>
<!-- Jumbotron End -->
@endsection