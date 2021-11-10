<footer class="c-footer">
    <div class="l-container l-row l-row--spacebetween">
        <nav class="c-footer__nav l-col l-wrap">
            @foreach (config('footerNav') as $list)
            <ul class="c-footer__list h-listReset">
                <li>
                    <h3 class="c-footer__subtitle">{{ $list["title"] }}</h3>
                </li>
                @foreach ($list["links"] as $link)
                <li>
                    <a href="{{ $link["url"] }}" class="c-footer__link c-link l-row">{{ $link["text"] }}</a>
                </li>
                @endforeach
            </ul>
            @endforeach
      </nav>
      <img class="c-footer__img" src="{{ asset('/images/dc-logo-bg.png') }}" alt="">
  </div> 
  @include('partials.ctaBanner')
</footer>