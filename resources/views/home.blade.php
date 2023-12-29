@extends('layouts.layout')

@section('content')
<!-- Jumbotron -->
<section id="home">
  <div class="container">
    <div class="d-flex wrap justify-content-between align-items-center gap-5">
      <div style="width: 900px">
        <h3 style="font-size: 60px; font-weight: bold; text-align: center;">Welcome to T-FLEET</h3>
        <br>
        <br>
        <br>
        <br>
        <div class="d-flex justify-content-lg-start mt-2">
          <div class="d-flex flex-column justify-content-between">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2 style="font-size: 25px; font-weight: normal;">Qualitas Inter Harga Terjangkau?</h2>
            <br>
            <h2 style="font-size: 25px; font-weight: normal;">TUC TUC Solusinyaaa</h2>
          </div>
          <div class="d-flex flex-column justify-content-between">
            <img class="logout card-img-top" style="width: 900px" src="{{ asset('images/TayoRMB.png') }}" alt="Tayo Image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Jumbotron End -->
@endsection