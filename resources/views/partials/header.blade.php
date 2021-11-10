<header class="c-header">
    <div class="l-container l-row l-row--spacebetween">
        <a href="#">
            <img  class="c-header__logo" src="{{ asset("images/dc-logo.png")}}" alt="DC Logo">
        </a>
        <nav class="c-header__nav">
            <ul class="l-row h-listReset">
                @foreach (config('headerNav') as $link)
                <li class="h-align--stretch">
                    <a href="{{ $link["url"] }}" class="c-header__link c-link {{$link["current"] ? "active" : ""}}">
                        {{ $link["text"] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
        <form class="c-header__search">
            <input class="c-header__input" type="text" placeholder="Search">
        </form>
    </div>
</header>