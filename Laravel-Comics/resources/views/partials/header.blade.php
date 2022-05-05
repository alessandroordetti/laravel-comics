<div class="header-wrapper">
    <div class="img-wrapper">
        <img src="{{asset("images/dc-logo.png")}}" alt="Logo DC">
    </div>

    <nav>
        <ul>
            <li class="{{Route::currentRouteName() == 'guest.home' ? 'active' : ''}}">
                <a href="{{route('home-page')}}">
                    Characters
                </a>
            </li>
            <li>
                <a>
                    Comics
                </a>
            </li>
            <li>
                <a href="">
                    Movie
                </a>
            </li>
            <li>
                <a href="">
                    Tv
                </a>
            </li>
            <li>
                <a href="">
                    Games
                </a>
            </li>
            <li>
                <a href="">
                    Collectibles
                </a>
            </li>
            <li>
                <a href="">
                    Videos
                </a>
            </li>
            <li>
                <a href="">
                    Fans
                </a>
            </li>
            <li>
                <a href="">
                    News
                </a>
            </li>
            <li>
                <a href="">
                    Shop
                </a>
            </li>
        </ul>
    </nav>

    <div class="searchbar">
        <input type="text" placeholder="search">
    </div>
</div>

<div class="jumbotron">

</div>