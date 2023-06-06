@extends('layout.main')

@section('title')
  {{Route::currentRouteName()}}
@endsection

@section('content')
  <main>
    <div class="content">
      <div class="container">
        <span class="label">{{Route::currentRouteName()}}</span>
        <h1>No content available</h1>
      </div>
    </div>
  </main>
@endsection
