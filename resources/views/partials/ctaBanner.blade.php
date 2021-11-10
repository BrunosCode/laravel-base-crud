<div class="c-ctaBanner">
  <div class="l-container l-row l-row--spacebetween">
      <a class="c-btn c-cta c-ctaBanner__btn">Sign-up Now!</a>

      <div class="l-row">
          <p class="c-cta">Follow now!</p>
          <ul class="c-ctaBanner__iconsLinks h-listReset l-row">
              @foreach (config("socialLinks") as $link)    
              <li>
                  <a href="{{ $link["url"] }}"
                  class="c-ctaBanner__link c-btn">
                      <img src="{{ asset("images/{$link['img']}") }}" alt="{{ $link["url"] }}"
                      class="c-footerBootom__icon">
                  </a>
              </li>
              @endforeach
          </ul>
      </div>
  </div>
</div>