@php
  $menu_footer = config('menus.footer_menu');
  $menu_social = config('menus.social_menu');
@endphp

<footer>
  <div class="top">

    <div class="container">

      <div class="left">

        @foreach ($menu_footer as $menu_col)
        <div class="col">

          @foreach ($menu_col as $key => $menu_section )
          <h4>{{$key}}</h4>

          <nav>
            <ul>

              @foreach ($menu_section as $item)
              <li>
                <a href="{{route($item['href'])}}">{{$item['text']}}</a>
              </li>
              @endforeach
            </ul>
          </nav>
          @endforeach
        </div>
      @endforeach
      </div>
      <div class="right">
      </div>
    </div>
  </div>

  <div class="bottom">

    <div class="container">

      <div class="left">
        <span>Sing-up now!</span>
      </div>

      <div class="right">
        <span>Follow us</span>

        <nav>
          <ul>
            @foreach ($menu_social as $icon)
            <li>
              <a><img src="{{Vite::asset($icon['img'])}}" alt=""></a>
            </li>
            @endforeach
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer>
