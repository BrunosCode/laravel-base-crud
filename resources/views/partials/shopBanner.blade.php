<div class="c-banner">
  <div class="l-container">
      <ul class="c-banner__list l-row l-row--spacebetween h-listReset">
          @foreach (config("shopLinks") as $link)    
          <li>
              <a href="{{ $link["url"] }}"
              class="c-banner__link c-btn">
                  <img src="{{ asset("images/{$link['img']}") }}" alt="{{ $link["text"] }}" class="c-banner__icon">
                  <span class="c-banner__text">{{ $link["text"] }}</span>
              </a>
          </li>
          @endforeach
      </ul>
  </div>
</div>