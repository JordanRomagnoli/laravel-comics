@php
    $links = [
        [
            'url' => 'characters',
            'label' => 'Characters',
            'active' => false,
        ],
        [
            'url' => '/',
            'label' => 'Comix',
            'active' => true,
        ],
        [
            'url' => 'movies',
            'label' => 'Movies',
            'active' => false,
        ],
        [
            'url' => 'tv',
            'label' => 'Tv',
            'active' => false,
        ],
        [
            'url' => 'games',
            'label' => 'Games',
            'active' => false,
        ],
        [
            'url' => 'collectibles',
            'label' => 'Collectibles',
            'active' => false,
        ],
        [
            'url' => 'videos',
            'label' => 'Videos',
            'active' => false,
        ],
        [
            'url' => 'fans',
            'label' => 'Fans',
            'active' => false,
        ],
        [
            'url' => 'news',
            'label' => 'News',
            'active' => false,
        ],
        [
            'url' => 'shop',
            'label' => 'Shop',
            'active' => false,
        ],
    ];
@endphp

<header>
    <div class="container">
        <div class="d-flex justify-content-between  align-items-center ">

            <div class="logo-frame">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>

            <nav>
                <ul class="p-0 m-0">
                    @foreach ($links as $link)
                        <li class="m-2 mb-0 mt-0">
                                <a href="{{ $link['url'] }}">
                                    {{ strtoupper($link['label']) }}
                                </a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            
            <form action="get">
                <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
            </form>
            
        </div>
    </div>
</header>
