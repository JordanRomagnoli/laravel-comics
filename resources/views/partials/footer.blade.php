@php
    $linksFooter = [
    'DC COMICS'=>[
        'Characters',
        'Comics',
        'Movie',
        'TV',
        'Games',
        'Videos',
        'News'
    ],
    'DC'=>[
        'Terms Of Use',
        'Privacy policy(New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Contact Us'
    ],
    'SITES'=>[
        'DC',
        'MAD Magazine',
        'DC Universe',
        'DC Power Visa'
    ],
    'SHOP'=>[
        'Shop DC',
        'Shop DC collectibles'
    ]
];

$socialFooter =[
    [
        "img" => "resources/img/footer-facebook.png",
    ],
    [
        "img"=> "resources/img/footer-twitter.png",
    ],
    [
        "img"=> "resources/img/footer-youtube.png",
    ],
    [
        "img"=> "resources/img/footer-pinterest.png",
    ],
    [
        "img"=> "resources/img/footer-periscope.png",
    ]
];
@endphp

<footer>
    <section class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-6 left">
                    <div class="row">
                        <div class="col-4">
                            <h5>DC COMICS</h5>
                            <ul>
                                @foreach ($linksFooter['DC COMICS'] as $singleLink)
                                    <li>
                                        <a href="">{{ $singleLink }}</a>
                                    </li>
                                @endforeach
                            </ul>

                            <h5>SHOP</h5>
                            <ul>
                                @foreach ($linksFooter['SHOP'] as $singleLink)
                                    <li>
                                        <a href="">{{ $singleLink }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-4">
                            <h5>DC</h5>
                            <ul>
                                @foreach ($linksFooter['DC'] as $singleLink)
                                    <li>
                                        <a href="">{{ $singleLink }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-4">
                            <h5>SITES</h5>
                            <ul>
                                @foreach ($linksFooter['SITES'] as $singleLink)
                                    <li>
                                        <a href="">{{ $singleLink }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet consectetur, <span>adipisicing elit</span>. Laborum inventore nemo assumenda veritatis <span>voluptatibus</span>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 right">
                    
                </div>
            </div>
        </div>
    </section>

    <section class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-6 left">
                    <a href="#nogo">sign-up now!</a>
                </div>
                <div class="col-6 right">
                    <span>follow us</span>
                    <ul>
                        @foreach($socialFooter as $singleSocial)
                            <li>
                                <a href="">
                                    <img src="{{ Vite::asset($singleSocial['img']) }}" alt="">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
