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
        <div class="pg-upper-content py-5">
          <div class="row">
            <div class="col col-8 flex-column">
              <h1 class="text-uppercase">{{$comic['title']}}</h1>

              <div class="pg-price-container border-bottom border-black mt-3">
                <div class="left py-3">
                  <span class="ms-4">U.S. Price: {{$comic['price']}}</span>
                  <span class="text-uppercase me-4">available</span>
                </div>
                <div class="right h-100 text-center border-start border-black py-3">
                  <span class="text-capitalize">check availability</span>
                </div>
              </div>

              <p class="mt-3 fs-5">{{$comic['description']}}</p>
            </div>

            <div class="col col-4 flex-column text-end text-uppercase">
              <span>Advertisement</span>
              <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="Adv">
            </div>
          </div>
        </div>

        <div class="pg-lower-content">

        </div>
      </div>
    </div>
  </main>
@endsection
