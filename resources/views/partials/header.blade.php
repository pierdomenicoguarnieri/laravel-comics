@php
  $menu_header = config('menus.header_menu');
@endphp

<header>
  <div class="container">
    <div class="left">
      <a href="{{route('home')}}"><img src="/img/dc-logo.png" alt="DC Comics Logo"></a>
    </div>
    <div class="right">
      <nav>
        <ul>
          @foreach ($menu_header as $link)
          <li>
            <a
            href="{{route($link['href'])}}"
            class="text-uppercase {{Route::currentRouteName() === $link['href'] ? 'active' : ''}}">
              {{$link['text']}}
            </a>
          </li>
          @endforeach
        </ul>
      </nav>
    </div>
  </div>
</header>
