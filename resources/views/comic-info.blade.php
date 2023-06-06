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

              <p class="mt-3 text-muted">{{$comic['description']}}</p>
            </div>

            <div class="col col-4 flex-column text-end text-uppercase">
              <span>Advertisement</span>
              <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="Adv">
            </div>
          </div>
        </div>

      </div>
      <div class="pg-lower-content py-5 border-top border-dark-subtle bg-light">
        <div class="container">
          <div class="row">

            <div class="col d-flex flex-column text-start">
              <h4>Talent</h4>

              <table class="table mt-3">

                <tbody>
                  <tr class="table-light">
                    <td class="w-25">Art by:</td>
                    <td>{{implode(", ", $comic['artists'])}}</td>
                  </tr>

                  <tr class="table-light">
                    <td class="w-25">Written by:</td>
                    <td>{{implode(", ", $comic['writers'])}}</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="col d-flex flex-column text-start">

              <h4>Specs</h4>

              <table class="table mt-3">

                <tbody>
                  <tr class="table-light">
                    <td class="w-25">Series:</td>
                    <td>{{$comic['series']}}</td>
                  </tr>

                  <tr class="table-light">
                    <td class="w-25">U.S. Price:</td>
                    <td>{{$comic['price']}}</td>
                  </tr>

                  <tr class="table-light">
                    <td class="text-capitalize w-25">on sale date:</td>
                    <td>{{$comic['sale_date']}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="pg-button-container w-100 mt-5">
            <a href="{{route('comics')}}"><button type="button" class="btn bt-primary">Torna alla home</button></a>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
