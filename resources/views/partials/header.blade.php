<header>
    <section class="section_header_top ">
        <div class="header_top d-flex justify-content-end gap-5 ">
            <h6>DC POWER VISA&#169;</h6>
            <h6>ADDITIONAL DC SITE <i class="fa-solid fa-caret-down fa-sm" style="color: #ffffff;"></i></h6>
        </div>
    </section>

    <section class="section_header_bot d-flex justify-content-between align-items-center">
            <div>
                <img src="{{Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc">
            </div>      
            <div>
                <ul class="d-flex justify-content-between gap-3">
                    <li>
                        <a href="{{route('characters')}}">CHARACTERS</a>
                    </li>

                    <li>
                        <a href="{{route('comics')}}">COMICS</a>
                    </li>

                    <li>
                        <a href="{{route('movies')}}">MOVIES</a>
                    </li>

                    <li>
                        <a href="{{route('tv')}}">TV</a>
                    </li>

                    <li>
                        <a href="{{route('games')}}">GAMES</a>
                    </li>

                    <li>
                        <a href="{{route('collectibles')}}">COLLECTIBLES</a>
                    </li>

                    <li>
                        <a href="{{route('videos')}}">VIDEOS</a>
                    </li>

                    <li>
                        <a href="{{route('fans')}}">FANS</a>
                    </li>

                    <li>
                        <a href="{{route('news')}}">NEWS</a>
                    </li>

                    <li>
                        <a href="">SHOP </a>
                    </li>

                </ul>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3">
                    <input type="text" placeholder="Search">
                    <button type="button"><i class="fa-solid fa-magnifying-glass fa-sm"></i></button>
                  </div>
            </div>
    </section>
    
</header>