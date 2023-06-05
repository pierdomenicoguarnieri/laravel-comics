@php
  $menu_cta = config('menus.menuCta');
  $cards_array = config('comics');
@endphp

@extends('layout.main')

@section('title')
  Homepage
@endsection

@section('content')
  <main>
    <div class="content">
      <div class="container">
        <span class="label">Current series</span>
        <div class="card-container">
          @foreach ($cards_array as $card)
          <div class="pg-card">
            <div class="img-container">
              <img src="{{$card['thumb']}}" alt="">
            </div>
            <span>{{$card['title']}}</span>
          </div>
          @endforeach
        </div>
        <div class="pg-btn-container">
          <button type="button">Load More</button>
        </div>
      </div>
    </div>

    <div class="cta">
      <div class="container">
        @foreach ($menu_cta as $element)
          <div class="element">
            <img src="{{Vite::asset('/resources/img/' . $element['img'])}}" alt="">
            <span>{{$element['text']}}</span>
          </div>
        @endforeach
      </div>
    </div>
  </main>
@endsection
