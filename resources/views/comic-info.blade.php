@extends('layout.main')

@section('title')
  Comic Infos
@endsection

@section('content')
  <main>
    <div class="pg-main-wrapper">
      <div class="pg-img-wrapper">
        <div class="pg-img-container">
          <img src="{{$comic['thumb']}}" alt="">
        </div>
      </div>
      <div class="container">
      </div>
    </div>
  </main>
@endsection
