<html lang="en"
    style="--color-theme: #111111; --color-light-theme: #2a2a2e; --color-light-theme2: #454549; --color-light-theme3: #212227; --color-light-theme10: #181819; --color-dark-theme: #000000; --color-dark-theme2: #050505; --color-dark-theme3: #0c0c0c; --color-input-number: #30374a; --color-sitebar-theme: #1a1b1d; --color-sitebar-item: #2e3133; --color-list-theme: #21283b; --color-list-border: #535353; --color-theme-gradient1: #141617; --color-theme-gradient2: #232328; --color-border: #35353e; --color-border2: #35353e; --color-border3: #35353e; --color-contrast: #ff7701; --color-bitcoin: #ea8b1a; --color-shadow: #191919; --color-hover: #e7e7e7; --color-black: #000000; --color-dark: #212529; --color-dark-2: #2a2e32; --color-dark-3: #5d606c; --color-info: #10caf0; --color-danger: #d53232; --color-warning: #ffbb33; --color-success: #06a044; --color-primary: #4285f4; --color-purple: #9a1fe8; --color-secondary: #858585; --color-white: #ffffff; --color-white-60: #e6e6e6; --color-white-70: #e6e6e6; --color-white-80: #e6e6e6; --color-white-90: #e6e6e6; --color-gray: #d1d0d0; --color-gray-65: #a7a5a5; --color-gray-70: #b3b2b2; --color-light-gray: #e6e5e5; --btn-shadow-color: #b3b3b3; --btn-update-color: #00c851; --btn-delete-color: #ff4444; --btn-cancel-color: #a0a0a0; --btn-add-color: #33b5e5; --bg-blur-opacity: #0f1216; --bg-currency-dropdown: #141417; --table-body-gradient: #25272c; --table-header: #191a1f; --table-body: #202128; --input-number: #272a30; --button-swap: #27a17a; --busd-color: #efb90a; --bg-swap: #191c21; --bg-circle-color: #202128; --bg-circle-gradient: #d4e8e5; --bg-modal: #202329; --bg-total-asset: #272b34; --bg-navigation-bar: #2b2f39; --bg-pie-chart: #232730; --btn-toggle-scan: #555961; --color-theme-light-10: #181819; --color-theme-light-50: #262e43; --bg-gradient-winrate: #373c45; --pagination-gradient1: #16181a; --pagination-gradient2: #484f5c; --btn-gradient1: #31363f; --btn-gradient2: #474e5f; --bg-card-vip: #212227; --bg-qr-code: #fff; --vip-header: #ff7701; --vip-sub-header: #ffad66; --bg-gradient1: #17181a; --bg-gradient2: #1f2023; --confirm-alert: rgba(38, 41, 45, 0.8); --modal-header: #272c30; --bg-home-gradient1: #16171a; --bg-home-gradient2: #1a1c1f; --footer-gradient1: #1d1f22; --footer-gradient2: #1b1d20; --home-card-gradient1: #25272c; --home-card-gradient2: #191a1d; --home-card-gradient3: #222427; --home-card-gradient4: #1d1e21; --home-bg-on-sidebar: rgba(17, 20, 24, 0.5); --box-shadow-color: rgba(0, 0, 0, 0); --box-shadow-color2: #0c0c0c; --box-shadow-color3: #000000; --box-shadow-color4: #101010; --color-dropdown-setting: #2a2a2e; --color-progress-bar: #d1d0d0; --current-theme: dark; --bg-input: #d1d0d0; --color-input: #111111; --color-account-dropdown: #1a1b1d; --color-account-dropdown-active: #2a2a2e; --color-daily-card: #181819; --color-daily-item: #202021; --color-white-real: #FAFBFD; --color-sliding-gradient1: rgba(21, 22, 24, 0.1); --color-sliding-gradient2: rgba(21, 22, 24, 1); --color-item-card-list: #181819;">

<head>
    <meta charset="utf-8">
    <title>{{$config->name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="{{$config->keywords}}">
    <link href="{{asset('storage/' . $config->favicon)}}" rel="shortcut icon" type="image/x-icon">
    <link rel="icon" href="{{asset('storage/' . $config->favicon)}}" type="image/x-icon">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{$config->name}}">
    <meta property="og:title" content="{{$config->title}}">
    <meta property="og:image" content="{{asset('storage/' . $config->image_description)}}">
    <meta property="og:description" content="{{$config->description}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="manifest" href="manifest.webmanifest">
    <meta name="theme-color" content="#111111">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.e9ec43b7e4a4ad65.css" media="all" onload="this.media='all'">
    <link rel="stylesheet" href="/assets/bootstrap-drawer.min.css">
    <link rel="stylesheet" href="/css/home.css">
</head>

<body>
    <app-root _nghost-gyu-c13="" ng-version="13.3.12">
        <div _ngcontent-gyu-c13="" class="refresh-container">
            <div _ngcontent-gyu-c13="" class="refresh-spinner">
                <div _ngcontent-gyu-c13="" class="spinner"></div>
            </div>
            <div _ngcontent-gyu-c13="" class="content"><router-outlet _ngcontent-gyu-c13=""></router-outlet><app-home
                    _nghost-gyu-c56="">
                    <div _ngcontent-gyu-c56="" id="app-homepage">
                        <app-public-navbar _ngcontent-gyu-c56=""
                            _nghost-gyu-c48="">
                            <div _ngcontent-gyu-c48="" id="app-navbar" class="sticky">
                                <div _ngcontent-gyu-c48="" class="logo-banner"><img _ngcontent-gyu-c48=""
                                        src="{{$config->logo ? asset('storage/' . $config->logo) :'/util-images/bx-logo.png'}}"></div>
                                <div _ngcontent-gyu-c48="" class="nav-right">
                                    @if (Auth::check())
                                        <a _ngcontent-gyu-c48="" href="{{route('profile')}}"
                                            class="btn btn-login text-nowrap" tabindex="0">
                                            {{Auth::user()->username}}
                                        </a>
                                    @else
                                        <a _ngcontent-gyu-c48="" href="{{route('login')}}"
                                            class="btn btn-login text-nowrap" tabindex="0">
                                            Login
                                        </a>
                                        <a _ngcontent-gyu-c48="" href="{{route('register')}}" class="btn btn-sign-up text-nowrap text-white-real" tabindex="0">
                                            Sign Up
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </app-public-navbar>
                        <div _ngcontent-gyu-c56="" class="poster-container">
                            <div _ngcontent-gyu-c56="" class="poster-inner">
                                <div _ngcontent-gyu-c56="" class="grid-container-one">
                                    <div _ngcontent-gyu-c56="" class="grid-column best-in-class">
                                        <h1 _ngcontent-gyu-c56="">Best-in-Class Binary Options Trading</h1>
                                        <h5 _ngcontent-gyu-c56="" class="for-desktop">We are ready to embark on building
                                            a successful trading career on this platform.
                                        </h5>
                                        <h5 _ngcontent-gyu-c56="" class="for-mobile"> We are ready to embark on
                                            building<br _ngcontent-gyu-c56=""> a successful trading career<br
                                                _ngcontent-gyu-c56=""> on this platform. </h5>
                                                <a href="{{route('trade')}}" class="btn-trade-now text-white-real" tabindex="0">Trade Now</a>
                                    </div>
                                    <div _ngcontent-gyu-c56="" class="grid-column animation-image"><dotlottie-player
                                            _ngcontent-gyu-c56="" src="assets/video/animation-small.json"
                                            background="tranparent" speed="1" loop="" autoplay=""
                                            class="dotlottie"></dotlottie-player>
                                        <div _ngcontent-gyu-c56="" class="hide-footer-video"></div>
                                        <div _ngcontent-gyu-c56="" class="coin-amimation"><img _ngcontent-gyu-c56=""
                                                src="assets/icon/coin/bnb-large.png" alt="bnb" class="coin bnb"><img
                                                _ngcontent-gyu-c56="" src="assets/icon/coin/trx.png" alt="trx"
                                                class="coin trx"><img _ngcontent-gyu-c56=""
                                                src="assets/icon/coin/sol.png" alt="sol" class="coin sol"></div>

                                    </div>
                                </div>
                            </div><app-coin-card-sliding _ngcontent-gyu-c56="" _nghost-gyu-c50="">
                                <div _ngcontent-gyu-c50="" class="coin-card-container">
                                    <div _ngcontent-gyu-c50="" class="title"><img _ngcontent-gyu-c50=""
                                            src="assets/icon/advertising.png"> Join our platform to trade
                                        leading cryptocurrencies instantly. </div>
                                    <div _ngcontent-gyu-c50="" class="sliding">
                                        <div _ngcontent-gyu-c50="" class="sliding-content">
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/btc.svg"><span
                                                        _ngcontent-gyu-c50="">BTC/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$90,099.73</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-success">
                                                            <span _ngcontent-gyu-c50="">+</span>2.34% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/eth.svg"><span
                                                        _ngcontent-gyu-c50="">ETH/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$3,179.45</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -2.14% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/bnb.png"><span
                                                        _ngcontent-gyu-c50="">BNB/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$613.1</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -1.92% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/bch.png"><span
                                                        _ngcontent-gyu-c50="">BCH/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$434.9</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-success">
                                                            <span _ngcontent-gyu-c50="">+</span>1.14% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/sol.png"><span
                                                        _ngcontent-gyu-c50="">SOL/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$213.23</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-success">
                                                            <span _ngcontent-gyu-c50="">+</span>1.28% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/ltc.png"><span
                                                        _ngcontent-gyu-c50="">LTC/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$74.64</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -2.66% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/ordi.png"><span
                                                        _ngcontent-gyu-c50="">ORDI/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$40.61</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -0.68% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/avax.png"><span
                                                        _ngcontent-gyu-c50="">AVAX/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$32.58</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -4.56% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/apt.png"><span
                                                        _ngcontent-gyu-c50="">APT/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$11.44</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -5.92% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/uni.png"><span
                                                        _ngcontent-gyu-c50="">UNI/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$8.512</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -4.26% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/pendle.png"><span
                                                        _ngcontent-gyu-c50="">PENDLE/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$5.333</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -3.51% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/near.png"><span
                                                        _ngcontent-gyu-c50="">NEAR/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$5.084</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -5.37% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/sui.png"><span
                                                        _ngcontent-gyu-c50="">SUI/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$3.2908</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-success">
                                                            <span _ngcontent-gyu-c50="">+</span>5.87% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/wld.png"><span
                                                        _ngcontent-gyu-c50="">WLD/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$2.272</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -5.45% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/stx.png"><span
                                                        _ngcontent-gyu-c50="">STX/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$1.922</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -3.61% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/op.png"><span
                                                        _ngcontent-gyu-c50="">OP/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$1.613</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -2.59% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/snx.png"><span
                                                        _ngcontent-gyu-c50="">SNX/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$1.506</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -5.81% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/ftm.png"><span
                                                        _ngcontent-gyu-c50="">FTM/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.6894</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -8.28% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/xrp.png"><span
                                                        _ngcontent-gyu-c50="">XRP/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.6836</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -3.15% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/arb.png"><span
                                                        _ngcontent-gyu-c50="">ARB/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.6074</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -3.21% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/ena.png"><span
                                                        _ngcontent-gyu-c50="">ENA/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.576</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -0.26% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/ada.png"><span
                                                        _ngcontent-gyu-c50="">ADA/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.5724</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-success">
                                                            <span _ngcontent-gyu-c50="">+</span>2.01% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/strk.png"><span
                                                        _ngcontent-gyu-c50="">STRK/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.465</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -6.73% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/pyth.png"><span
                                                        _ngcontent-gyu-c50="">PYTH/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.3992</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -3.36% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/doge.png"><span
                                                        _ngcontent-gyu-c50="">DOGE/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.39054</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -3.02% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/matic.png"><span
                                                        _ngcontent-gyu-c50="">POL/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.3709</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -6.62% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/aevo.png"><span
                                                        _ngcontent-gyu-c50="">AEVO/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.344</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -6.31% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/w.png"><span
                                                        _ngcontent-gyu-c50="">W/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.240</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -3.88% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/trx.png"><span
                                                        _ngcontent-gyu-c50="">TRX/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.1782</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -5.11% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c50="" class="coin-card shadow-bottom-mini">
                                                <div _ngcontent-gyu-c50="" class="symbol"><img _ngcontent-gyu-c50=""
                                                        alt="symbol" src="assets/icon/coin/shib.png"><span
                                                        _ngcontent-gyu-c50="">SHIB/USDT</span></div>
                                                <div _ngcontent-gyu-c50="" class="value">
                                                    <div _ngcontent-gyu-c50="" class="price">
                                                        <div _ngcontent-gyu-c50="" class="coin-price">$0.00002544</div>
                                                        <div _ngcontent-gyu-c50="" class="coin-percent text-danger">
                                                            -4.28% </div>
                                                    </div>
                                                    <div _ngcontent-gyu-c50="" class="chart"><app-coin-chart
                                                            _ngcontent-gyu-c50="" _nghost-gyu-c49="">
                                                            <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                    _ngcontent-gyu-c49="" width="100" height="50"
                                                                    style="display: block; box-sizing: border-box; height: 50px; width: 100px;"></canvas>
                                                            </div>
                                                        </app-coin-chart></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div _ngcontent-gyu-c50="" class="slide-left"></div>
                                        <div _ngcontent-gyu-c50="" class="slide-right"></div>
                                    </div>
                                </div>
                            </app-coin-card-sliding>
                        </div>
                        <div _ngcontent-gyu-c56="" class="gradient-panel1"><app-coin-table-list _ngcontent-gyu-c56=""
                                _nghost-gyu-c51="">
                                <div _ngcontent-gyu-c51="" class="coin-table-container">
                                    <div _ngcontent-gyu-c51="" class="navigator">
                                        <div _ngcontent-gyu-c51="" class="nav">
                                            <div _ngcontent-gyu-c51="" class="nav-item nav-animation active">Top Price
                                            </div>
                                            <div _ngcontent-gyu-c51="" class="nav-item nav-animation">Top Gainer</div>
                                        </div>
                                    </div>
                                    <div _ngcontent-gyu-c51="" class="table-layout">
                                        <table _ngcontent-gyu-c51="" class="custom-table">
                                            <thead _ngcontent-gyu-c51="">
                                                <tr _ngcontent-gyu-c51="">
                                                    <th _ngcontent-gyu-c51="">Name</th>
                                                    <th _ngcontent-gyu-c51="">Last Price</th>
                                                    <th _ngcontent-gyu-c51="">24h Change</th>
                                                    <th _ngcontent-gyu-c51="" class="hide-tablet">Chart</th>
                                                    <th _ngcontent-gyu-c51="">Trade</th>
                                                </tr>
                                            </thead>
                                            <tbody _ngcontent-gyu-c51="">
                                                <tr _ngcontent-gyu-c51="">
                                                    <td _ngcontent-gyu-c51="" class="td-coin"><img _ngcontent-gyu-c51=""
                                                            alt="Currency" src="assets/icon/coin/btc.svg"><span
                                                            _ngcontent-gyu-c51="">BTC/USDT</span></td>
                                                    <td _ngcontent-gyu-c51="">$90,099.73</td>
                                                    <td _ngcontent-gyu-c51="" class="text-success"><span
                                                            _ngcontent-gyu-c51="">+</span>2.34% </td>
                                                    <td _ngcontent-gyu-c51="" class="td-chart hide-tablet">
                                                        <div _ngcontent-gyu-c51="" class="chart"><app-coin-chart
                                                                _ngcontent-gyu-c51="" _nghost-gyu-c49="">
                                                                <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                        _ngcontent-gyu-c49="" width="150" height="50"
                                                                        style="display: block; box-sizing: border-box; height: 50px; width: 150px;"></canvas>
                                                                </div>
                                                            </app-coin-chart></div>
                                                    </td>
                                                    <td _ngcontent-gyu-c51=""><button _ngcontent-gyu-c51=""
                                                            class="btn-animation">Trade</button></td>
                                                </tr>
                                                <tr _ngcontent-gyu-c51="">
                                                    <td _ngcontent-gyu-c51="" class="td-coin"><img _ngcontent-gyu-c51=""
                                                            alt="Currency" src="assets/icon/coin/eth.svg"><span
                                                            _ngcontent-gyu-c51="">ETH/USDT</span></td>
                                                    <td _ngcontent-gyu-c51="">$3,179.45</td>
                                                    <td _ngcontent-gyu-c51="" class="text-danger">-2.14% </td>
                                                    <td _ngcontent-gyu-c51="" class="td-chart hide-tablet">
                                                        <div _ngcontent-gyu-c51="" class="chart"><app-coin-chart
                                                                _ngcontent-gyu-c51="" _nghost-gyu-c49="">
                                                                <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                        _ngcontent-gyu-c49="" width="150" height="50"
                                                                        style="display: block; box-sizing: border-box; height: 50px; width: 150px;"></canvas>
                                                                </div>
                                                            </app-coin-chart></div>
                                                    </td>
                                                    <td _ngcontent-gyu-c51=""><button _ngcontent-gyu-c51=""
                                                            class="btn-animation">Trade</button></td>
                                                </tr>
                                                <tr _ngcontent-gyu-c51="">
                                                    <td _ngcontent-gyu-c51="" class="td-coin"><img _ngcontent-gyu-c51=""
                                                            alt="Currency" src="assets/icon/coin/bnb.png"><span
                                                            _ngcontent-gyu-c51="">BNB/USDT</span></td>
                                                    <td _ngcontent-gyu-c51="">$613.1</td>
                                                    <td _ngcontent-gyu-c51="" class="text-danger">-1.92% </td>
                                                    <td _ngcontent-gyu-c51="" class="td-chart hide-tablet">
                                                        <div _ngcontent-gyu-c51="" class="chart"><app-coin-chart
                                                                _ngcontent-gyu-c51="" _nghost-gyu-c49="">
                                                                <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                        _ngcontent-gyu-c49="" width="150" height="50"
                                                                        style="display: block; box-sizing: border-box; height: 50px; width: 150px;"></canvas>
                                                                </div>
                                                            </app-coin-chart></div>
                                                    </td>
                                                    <td _ngcontent-gyu-c51=""><button _ngcontent-gyu-c51=""
                                                            class="btn-animation">Trade</button></td>
                                                </tr>
                                                <tr _ngcontent-gyu-c51="">
                                                    <td _ngcontent-gyu-c51="" class="td-coin"><img _ngcontent-gyu-c51=""
                                                            alt="Currency" src="assets/icon/coin/bch.png"><span
                                                            _ngcontent-gyu-c51="">BCH/USDT</span></td>
                                                    <td _ngcontent-gyu-c51="">$434.9</td>
                                                    <td _ngcontent-gyu-c51="" class="text-success"><span
                                                            _ngcontent-gyu-c51="">+</span>1.14% </td>
                                                    <td _ngcontent-gyu-c51="" class="td-chart hide-tablet">
                                                        <div _ngcontent-gyu-c51="" class="chart"><app-coin-chart
                                                                _ngcontent-gyu-c51="" _nghost-gyu-c49="">
                                                                <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                        _ngcontent-gyu-c49="" width="150" height="50"
                                                                        style="display: block; box-sizing: border-box; height: 50px; width: 150px;"></canvas>
                                                                </div>
                                                            </app-coin-chart></div>
                                                    </td>
                                                    <td _ngcontent-gyu-c51=""><button _ngcontent-gyu-c51=""
                                                            class="btn-animation">Trade</button></td>
                                                </tr>
                                                <tr _ngcontent-gyu-c51="">
                                                    <td _ngcontent-gyu-c51="" class="td-coin"><img _ngcontent-gyu-c51=""
                                                            alt="Currency" src="assets/icon/coin/sol.png"><span
                                                            _ngcontent-gyu-c51="">SOL/USDT</span></td>
                                                    <td _ngcontent-gyu-c51="">$213.23</td>
                                                    <td _ngcontent-gyu-c51="" class="text-success"><span
                                                            _ngcontent-gyu-c51="">+</span>1.28% </td>
                                                    <td _ngcontent-gyu-c51="" class="td-chart hide-tablet">
                                                        <div _ngcontent-gyu-c51="" class="chart"><app-coin-chart
                                                                _ngcontent-gyu-c51="" _nghost-gyu-c49="">
                                                                <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                        _ngcontent-gyu-c49="" width="150" height="50"
                                                                        style="display: block; box-sizing: border-box; height: 50px; width: 150px;"></canvas>
                                                                </div>
                                                            </app-coin-chart></div>
                                                    </td>
                                                    <td _ngcontent-gyu-c51=""><button _ngcontent-gyu-c51=""
                                                            class="btn-animation">Trade</button></td>
                                                </tr>
                                                <tr _ngcontent-gyu-c51="">
                                                    <td _ngcontent-gyu-c51="" class="td-coin"><img _ngcontent-gyu-c51=""
                                                            alt="Currency" src="assets/icon/coin/ltc.png"><span
                                                            _ngcontent-gyu-c51="">LTC/USDT</span></td>
                                                    <td _ngcontent-gyu-c51="">$74.64</td>
                                                    <td _ngcontent-gyu-c51="" class="text-danger">-2.66% </td>
                                                    <td _ngcontent-gyu-c51="" class="td-chart hide-tablet">
                                                        <div _ngcontent-gyu-c51="" class="chart"><app-coin-chart
                                                                _ngcontent-gyu-c51="" _nghost-gyu-c49="">
                                                                <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                        _ngcontent-gyu-c49="" width="150" height="50"
                                                                        style="display: block; box-sizing: border-box; height: 50px; width: 150px;"></canvas>
                                                                </div>
                                                            </app-coin-chart></div>
                                                    </td>
                                                    <td _ngcontent-gyu-c51=""><button _ngcontent-gyu-c51=""
                                                            class="btn-animation">Trade</button></td>
                                                </tr>
                                                <tr _ngcontent-gyu-c51="">
                                                    <td _ngcontent-gyu-c51="" class="td-coin"><img _ngcontent-gyu-c51=""
                                                            alt="Currency" src="assets/icon/coin/ordi.png"><span
                                                            _ngcontent-gyu-c51="">ORDI/USDT</span></td>
                                                    <td _ngcontent-gyu-c51="">$40.61</td>
                                                    <td _ngcontent-gyu-c51="" class="text-danger">-0.68% </td>
                                                    <td _ngcontent-gyu-c51="" class="td-chart hide-tablet">
                                                        <div _ngcontent-gyu-c51="" class="chart"><app-coin-chart
                                                                _ngcontent-gyu-c51="" _nghost-gyu-c49="">
                                                                <div _ngcontent-gyu-c49="" class="line-chart"><canvas
                                                                        _ngcontent-gyu-c49="" width="150" height="50"
                                                                        style="display: block; box-sizing: border-box; height: 50px; width: 150px;"></canvas>
                                                                </div>
                                                            </app-coin-chart></div>
                                                    </td>
                                                    <td _ngcontent-gyu-c51=""><button _ngcontent-gyu-c51=""
                                                            class="btn-animation">Trade</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div _ngcontent-gyu-c51="" class="list-layout">
                                        <div _ngcontent-gyu-c51="">
                                            <div _ngcontent-gyu-c51="" class="item-list shadow-bottom-mini">
                                                <div _ngcontent-gyu-c51="" class="coin"><img _ngcontent-gyu-c51=""
                                                        alt="coin" src="assets/icon/coin/btc.svg">
                                                    <div _ngcontent-gyu-c51="" class="pair"><label
                                                            _ngcontent-gyu-c51="">BTC <span _ngcontent-gyu-c51=""
                                                                class="token">/ USDT</span></label></div>
                                                </div>
                                                <div _ngcontent-gyu-c51="" class="price">
                                                    <div _ngcontent-gyu-c51="" class="last"><label
                                                            _ngcontent-gyu-c51="">$90,099.73</label></div>
                                                    <div _ngcontent-gyu-c51="" class="change up"><span
                                                            _ngcontent-gyu-c51="">+</span>2.34% </div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c51="" class="item-list shadow-bottom-mini">
                                                <div _ngcontent-gyu-c51="" class="coin"><img _ngcontent-gyu-c51=""
                                                        alt="coin" src="assets/icon/coin/eth.svg">
                                                    <div _ngcontent-gyu-c51="" class="pair"><label
                                                            _ngcontent-gyu-c51="">ETH <span _ngcontent-gyu-c51=""
                                                                class="token">/ USDT</span></label></div>
                                                </div>
                                                <div _ngcontent-gyu-c51="" class="price">
                                                    <div _ngcontent-gyu-c51="" class="last"><label
                                                            _ngcontent-gyu-c51="">$3,179.45</label></div>
                                                    <div _ngcontent-gyu-c51="" class="change down">-2.14% </div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c51="" class="item-list shadow-bottom-mini">
                                                <div _ngcontent-gyu-c51="" class="coin"><img _ngcontent-gyu-c51=""
                                                        alt="coin" src="assets/icon/coin/bnb.png">
                                                    <div _ngcontent-gyu-c51="" class="pair"><label
                                                            _ngcontent-gyu-c51="">BNB <span _ngcontent-gyu-c51=""
                                                                class="token">/ USDT</span></label></div>
                                                </div>
                                                <div _ngcontent-gyu-c51="" class="price">
                                                    <div _ngcontent-gyu-c51="" class="last"><label
                                                            _ngcontent-gyu-c51="">$613.1</label></div>
                                                    <div _ngcontent-gyu-c51="" class="change down">-1.92% </div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c51="" class="item-list shadow-bottom-mini">
                                                <div _ngcontent-gyu-c51="" class="coin"><img _ngcontent-gyu-c51=""
                                                        alt="coin" src="assets/icon/coin/bch.png">
                                                    <div _ngcontent-gyu-c51="" class="pair"><label
                                                            _ngcontent-gyu-c51="">BCH <span _ngcontent-gyu-c51=""
                                                                class="token">/ USDT</span></label></div>
                                                </div>
                                                <div _ngcontent-gyu-c51="" class="price">
                                                    <div _ngcontent-gyu-c51="" class="last"><label
                                                            _ngcontent-gyu-c51="">$434.9</label></div>
                                                    <div _ngcontent-gyu-c51="" class="change up"><span
                                                            _ngcontent-gyu-c51="">+</span>1.14% </div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c51="" class="item-list shadow-bottom-mini">
                                                <div _ngcontent-gyu-c51="" class="coin"><img _ngcontent-gyu-c51=""
                                                        alt="coin" src="assets/icon/coin/sol.png">
                                                    <div _ngcontent-gyu-c51="" class="pair"><label
                                                            _ngcontent-gyu-c51="">SOL <span _ngcontent-gyu-c51=""
                                                                class="token">/ USDT</span></label></div>
                                                </div>
                                                <div _ngcontent-gyu-c51="" class="price">
                                                    <div _ngcontent-gyu-c51="" class="last"><label
                                                            _ngcontent-gyu-c51="">$213.23</label></div>
                                                    <div _ngcontent-gyu-c51="" class="change up"><span
                                                            _ngcontent-gyu-c51="">+</span>1.28% </div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c51="" class="item-list shadow-bottom-mini">
                                                <div _ngcontent-gyu-c51="" class="coin"><img _ngcontent-gyu-c51=""
                                                        alt="coin" src="assets/icon/coin/ltc.png">
                                                    <div _ngcontent-gyu-c51="" class="pair"><label
                                                            _ngcontent-gyu-c51="">LTC <span _ngcontent-gyu-c51=""
                                                                class="token">/ USDT</span></label></div>
                                                </div>
                                                <div _ngcontent-gyu-c51="" class="price">
                                                    <div _ngcontent-gyu-c51="" class="last"><label
                                                            _ngcontent-gyu-c51="">$74.64</label></div>
                                                    <div _ngcontent-gyu-c51="" class="change down">-2.66% </div>
                                                </div>
                                            </div>
                                            <div _ngcontent-gyu-c51="" class="item-list shadow-bottom-mini">
                                                <div _ngcontent-gyu-c51="" class="coin"><img _ngcontent-gyu-c51=""
                                                        alt="coin" src="assets/icon/coin/ordi.png">
                                                    <div _ngcontent-gyu-c51="" class="pair"><label
                                                            _ngcontent-gyu-c51="">ORDI <span _ngcontent-gyu-c51=""
                                                                class="token">/ USDT</span></label></div>
                                                </div>
                                                <div _ngcontent-gyu-c51="" class="price">
                                                    <div _ngcontent-gyu-c51="" class="last"><label
                                                            _ngcontent-gyu-c51="">$40.61</label></div>
                                                    <div _ngcontent-gyu-c51="" class="change down">-0.68% </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </app-coin-table-list>
                            <div _ngcontent-gyu-c56="" class="curved-bottom-div"><svg _ngcontent-gyu-c56=""
                                    viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg" class="curve">
                                    <defs _ngcontent-gyu-c56="">
                                        <linearGradient _ngcontent-gyu-c56="" id="gradient" x1="50%" y1="50%" x2="170%"
                                            y2="170%">
                                            <stop _ngcontent-gyu-c56="" offset="0%"
                                                style="stop-color: rgb(17, 17, 17); stop-opacity: 1;"></stop>
                                            <stop _ngcontent-gyu-c56="" offset="100%"
                                                style="stop-color: rgb(42, 45, 50); stop-opacity: 1;"></stop>
                                        </linearGradient>
                                    </defs>
                                    <path _ngcontent-gyu-c56="" fill="url(#gradient)" fill-opacity="1"
                                        d="M 0.255 140.353 C 0.255 140.353 181.779 114.41 322.542 115.941 C 456.635 117.4 643.699 157.831 751.793 177.145 C 859.887 196.459 992.339 211.779 1107.401 206.379 C 1222.463 200.979 1441.271 159.948 1441.271 159.948 L 1439.187 -2.161 L 1391.321 -2.161 C 1343.454 -2.161 1247.72 -2.161 1151.987 -2.161 C 1056.251 -2.161 960.518 -2.161 864.784 -2.161 C 769.051 -2.161 673.317 -2.161 577.583 -2.161 C 481.849 -2.161 386.116 -2.161 290.381 -2.161 C 194.647 -2.161 98.913 -2.161 51.046 -2.161 L -0.849 -2.161 L 0.255 140.353 Z">
                                    </path>
                                </svg></div>
                        </div>
                        <div _ngcontent-gyu-c56="" class="gradient-panel2">
                            <div _ngcontent-gyu-c56="" class="benefit-content">
                                <div _ngcontent-gyu-c56="" class="card-title"><span _ngcontent-gyu-c56=""
                                        class="easy">Easily</span><span _ngcontent-gyu-c56="" class="text"> grow your
                                        money with our trusted trading platform. Maximize profits up to 95%, earn
                                        commissions, and trade smarter with our top binary options platform!</span>
                                </div>
                                <div _ngcontent-gyu-c56="" class="card-image"><app-benefit-sliding _ngcontent-gyu-c56=""
                                        _nghost-gyu-c52="">
                                        <div _ngcontent-gyu-c52="" class="lists">
                                            <div _ngcontent-gyu-c52="" class="sliding">
                                                <div _ngcontent-gyu-c52="" class="item"><img _ngcontent-gyu-c52=""
                                                        src="assets/icon/benefits/1.png"></div>
                                                <div _ngcontent-gyu-c52="" class="item"><img _ngcontent-gyu-c52=""
                                                        src="assets/icon/benefits/2.png"></div>
                                                <div _ngcontent-gyu-c52="" class="item"><img _ngcontent-gyu-c52=""
                                                        src="assets/icon/benefits/3.png"></div>
                                                <div _ngcontent-gyu-c52="" class="item"><img _ngcontent-gyu-c52=""
                                                        src="assets/icon/benefits/4.png">
                                                    <div _ngcontent-gyu-c52="" class="volume">$131.66M</div>
                                                </div>
                                            </div>
                                        </div>
                                    </app-benefit-sliding></div>
                            </div>
                            <div _ngcontent-gyu-c56="" class="our-benefits">
                                <div _ngcontent-gyu-c56="" class="our-title">Our Benefits</div>
                                <div _ngcontent-gyu-c56="" class="our-container">
                                    <div _ngcontent-gyu-c56="" class="item shadow-bottom">
                                        <header _ngcontent-gyu-c56="">
                                            <div _ngcontent-gyu-c56="" class="icon"><img _ngcontent-gyu-c56=""
                                                    src="/assets/icon/benefits/5.png" alt=""></div>
                                            <div _ngcontent-gyu-c56="">Give 95% Profit</div>
                                        </header>
                                        <div _ngcontent-gyu-c56="" class="text"> Trading can offer the potential for
                                            profit, with a typical arrangement being that the trader gets 95% of the
                                            profit while the company keeps 5% as commission. However, it's important to
                                            remember that trading involves risks and there's no guarantee of profit.
                                        </div>
                                    </div>
                                    <div _ngcontent-gyu-c56="" class="item shadow-bottom">
                                        <header _ngcontent-gyu-c56="">
                                            <div _ngcontent-gyu-c56="" class="icon"><img _ngcontent-gyu-c56=""
                                                    src="/assets/icon/benefits/6.png" alt="" class="percent"></div>
                                            <div _ngcontent-gyu-c56="">Minimum Investment 1 USD</div>
                                        </header>
                                        <div _ngcontent-gyu-c56="" class="text"> When executing buy-sell orders in
                                            trading, it's common for platform to set limits on the minimum and maximum
                                            amounts that can be traded. In this case, the minimum amount specified is 1
                                            USD, while the maximum is 999,999 USD. </div>
                                    </div>
                                    <div _ngcontent-gyu-c56="" class="item shadow-bottom">
                                        <header _ngcontent-gyu-c56="">
                                            <div _ngcontent-gyu-c56="" class="icon"><img _ngcontent-gyu-c56=""
                                                    src="/assets/icon/benefits/7.png" alt="" class="percent-arrow">
                                            </div>
                                            <div _ngcontent-gyu-c56="">Options</div>
                                        </header>
                                        <div _ngcontent-gyu-c56="" class="text"> Stablecoin-margined option contracts
                                            offer a low-risk way to diversify your investment portfolio with potential
                                            for high returns. They also provide increased transparency and accessibility
                                            through decentralized platform transactions. Before investing, research and
                                            understand the potential risks and benefits. </div>
                                    </div>
                                    <div _ngcontent-gyu-c56="" class="item shadow-bottom">
                                        <header _ngcontent-gyu-c56="">
                                            <div _ngcontent-gyu-c56="" class="icon"><img _ngcontent-gyu-c56=""
                                                    src="/assets/icon/benefits/8.png" alt=""></div>
                                            <div _ngcontent-gyu-c56="">VIP Program</div>
                                        </header>
                                        <div _ngcontent-gyu-c56="" class="text"> Refer others to stablecoin-margined
                                            option contracts and earn a commission of up to 2.2% for each trade they
                                            complete. Simply share your unique referral link. The referral program can
                                            enhance your investment returns and help you achieve financial goals. </div>
                                    </div>
                                </div>
                                <div _ngcontent-gyu-c56="" class="volume-container">
                                    <div _ngcontent-gyu-c56="" class="item"><img _ngcontent-gyu-c56=""
                                            src="/assets/icon/volume.png" alt="">
                                        <div _ngcontent-gyu-c56="" class="title">Total Volume</div>
                                        <div _ngcontent-gyu-c56="" class="text">$131.66M</div>
                                    </div>
                                    <div _ngcontent-gyu-c56="" class="item"><img _ngcontent-gyu-c56=""
                                            src="/assets/icon/volume24.png" alt="">
                                        <div _ngcontent-gyu-c56="" class="title">24H Volume</div>
                                        <div _ngcontent-gyu-c56="" class="text">$1.99M</div>
                                    </div>
                                    <div _ngcontent-gyu-c56="" class="item"><img _ngcontent-gyu-c56=""
                                            src="/assets/icon/active_user.png" alt="">
                                        <div _ngcontent-gyu-c56="" class="title">Active users</div>
                                        <div _ngcontent-gyu-c56="" class="text">212.1K</div>
                                    </div>
                                    <div _ngcontent-gyu-c56="" class="item"><img _ngcontent-gyu-c56=""
                                            src="/assets/icon/trade_fee.png" alt="">
                                        <div _ngcontent-gyu-c56="" class="title">Total Trade profit Earne</div>
                                        <div _ngcontent-gyu-c56="" class="text">$29.51M</div>
                                    </div>
                                    <div _ngcontent-gyu-c56="" class="item"><img _ngcontent-gyu-c56=""
                                            src="/assets/icon/earned.png" alt="">
                                        <div _ngcontent-gyu-c56="" class="title">Commission Earned</div>
                                        <div _ngcontent-gyu-c56="" class="text">$6.01M</div>
                                    </div>
                                </div>
                                <div _ngcontent-gyu-c56="" class="spot-screen-mac">
                                    <div _ngcontent-gyu-c56="" class="image"><img _ngcontent-gyu-c56=""
                                            src="assets/images/spot-screen-mac.png" alt="mac"></div>
                                    <div _ngcontent-gyu-c56="" class="text"><span _ngcontent-gyu-c56="" class="extra">
                                            Buy</span><span _ngcontent-gyu-c56="" class="big"> and </span><span
                                            _ngcontent-gyu-c56="" class="extra"> Sell</span><br
                                            _ngcontent-gyu-c56=""><span _ngcontent-gyu-c56="" class="big">
                                            cryptocurrency with ease</span><br _ngcontent-gyu-c56="">
                                        <div _ngcontent-gyu-c56="" class="normal"> and take advantage of smooth, secure
                                            withdrawals across multiple chains. Our platform offers a formal and
                                            reliable trading experience, ensuring that every transaction is fast,
                                            efficient, and tailored to meet your needs, whether you're investing,
                                            trading, or managing your assets across different blockchain networks.
                                        </div>
                                    </div>
                                </div>
                                <div _ngcontent-gyu-c56="" class="trade-screen-ipad">
                                    <div _ngcontent-gyu-c56="" class="col-box ipad-left">
                                        <div _ngcontent-gyu-c56="" class="title"><span _ngcontent-gyu-c56=""
                                                class="text-contrast">Trade</span> Better..<br
                                                _ngcontent-gyu-c56=""><span _ngcontent-gyu-c56=""
                                                class="text-contrast">Any</span>where <span _ngcontent-gyu-c56=""
                                                class="text-contrast">Any</span>time. </div>
                                        <div _ngcontent-gyu-c56="" class="text"> To trade faster and better, use
                                            electronic trading platforms have a well-designed trading strategy with risk
                                            management techniques, and continuously educate yourself with market
                                            analysis and training. </div>
                                    </div>
                                    <div _ngcontent-gyu-c56="" class="col-box ipad-right"><img _ngcontent-gyu-c56=""
                                            src="/assets/images/trade_screen_tablet.png" class="img-ipad"></div>
                                </div>
                                <div _ngcontent-gyu-c56="" class="trade-screen-mac">
                                    <div _ngcontent-gyu-c56="" class="col-box mac-left"><img _ngcontent-gyu-c56=""
                                            src="/assets/images/trade_screen_mac.png"></div>
                                    <div _ngcontent-gyu-c56="" class="col-box mac-right">
                                        <div _ngcontent-gyu-c56="" class="title"><span _ngcontent-gyu-c56=""
                                                class="text-contrast">Earn</span> Commission <span _ngcontent-gyu-c56=""
                                                class="text-contrast">every</span> minute. </div>
                                        <div _ngcontent-gyu-c56="" class="text"> Earning commission every minute refers
                                            to the idea of generating a steady income through high-frequency trading
                                            using real-time market data and automated systems.Commission is earned by
                                            charging a fee for executing trades. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div _ngcontent-gyu-c56="" class="roadmap-content">
                            <div _ngcontent-gyu-c56="" class="roadmap w-100 d-flex justify-content-center"><img
                                    _ngcontent-gyu-c56="" src="/assets/images/roadmap.png"
                                    class="img-ipad"></div>
                        </div><app-public-footer _ngcontent-gyu-c56="" _nghost-gyu-c55="">
                            <div _ngcontent-gyu-c55="" class="footer-container">
                                <div _ngcontent-gyu-c55="" class="inner">
                                    <div _ngcontent-gyu-c55="" class="grid">
                                        <div _ngcontent-gyu-c55=""><img _ngcontent-gyu-c55=""
                                                src="/assets/icon/bx-logo-full.png">
                                            <div _ngcontent-gyu-c55="" class="mt-2 mb-1 opacity-75">© 2019 BX Trade All
                                                rights reserved.</div>
                                            <div _ngcontent-gyu-c55="">Email: <a _ngcontent-gyu-c55=""
                                                    href="mailto:support@bxtrade.net"
                                                    style="color: var(--color-contrast);">support@bxtrade.net</a></div>
                                        </div>
                                        <div _ngcontent-gyu-c55="" class="opacity-75">
                                            <div _ngcontent-gyu-c55="" class="mt-3 mb-1">License to carry on Finance LLC
                                            </div>
                                            <div _ngcontent-gyu-c55="" class="mb-1">Registration No.3 of 2019</div>
                                            <div _ngcontent-gyu-c55="">Address: 3rd Floor, Bank of Saint Lucia Limited,
                                                Bridge Street, Castries, Saint Lucia.</div>
                                        </div>
                                        <div _ngcontent-gyu-c55=""><a _ngcontent-gyu-c55=""
                                                class="link mt-3 mb-1">Help</a><a _ngcontent-gyu-c55=""
                                                class="link mb-1">Terms of use</a><a _ngcontent-gyu-c55=""
                                                class="link mb-1">Our Privacy Policy</a><a _ngcontent-gyu-c55=""
                                                class="link mb-1">About us</a><a _ngcontent-gyu-c55="" class="link">How
                                                to Register on BX Trade</a></div>
                                        <div _ngcontent-gyu-c55="">
                                            <div _ngcontent-gyu-c55="" class="select-language mt-3"><select-language
                                                    _ngcontent-gyu-c55="" _nghost-gyu-c53="">
                                                    <div _ngcontent-gyu-c53="" class="dropdown language"><a
                                                            _ngcontent-gyu-c53="" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            class="btn"><span _ngcontent-gyu-c53=""><img
                                                                    _ngcontent-gyu-c53=""
                                                                    src="assets/icon/language/lang-en.svg" height="15"
                                                                    width="20" alt="No"><span _ngcontent-gyu-c53=""
                                                                    class="ms-2">English</span><i _ngcontent-gyu-c53=""
                                                                    class="fas fa-sort-down"></i></span></a>
                                                        <ul _ngcontent-gyu-c53="" class="dropdown-menu language-menu"
                                                            style="margin-top: 5rem;">
                                                            <li _ngcontent-gyu-c53=""><a _ngcontent-gyu-c53=""
                                                                    role="button"
                                                                    class="dropdown-item d-flex align-items-center"><img
                                                                        _ngcontent-gyu-c53=""
                                                                        src="assets/icon/language/lang-en.svg"
                                                                        height="15" width="20" alt="No"><span
                                                                        _ngcontent-gyu-c53=""
                                                                        class="ms-2">English</span></a></li>
                                                            <li _ngcontent-gyu-c53="">
                                                                <hr _ngcontent-gyu-c53=""
                                                                    class="dropdown-divider p-0 m-0">
                                                            </li>
                                                            <li _ngcontent-gyu-c53=""><a _ngcontent-gyu-c53=""
                                                                    role="button"
                                                                    class="dropdown-item d-flex align-items-center"><img
                                                                        _ngcontent-gyu-c53=""
                                                                        src="assets/icon/language/lang-th.svg"
                                                                        height="15" width="20" alt="No"><span
                                                                        _ngcontent-gyu-c53=""
                                                                        class="ms-2">ไทย</span></a></li>
                                                            <li _ngcontent-gyu-c53="">
                                                                <hr _ngcontent-gyu-c53=""
                                                                    class="dropdown-divider p-0 m-0">
                                                            </li>
                                                            <li _ngcontent-gyu-c53=""><a _ngcontent-gyu-c53=""
                                                                    role="button"
                                                                    class="dropdown-item d-flex align-items-center"><img
                                                                        _ngcontent-gyu-c53=""
                                                                        src="assets/icon/language/lang-chi.svg"
                                                                        height="15" width="20" alt="No"><span
                                                                        _ngcontent-gyu-c53="" class="ms-2">中国</span></a>
                                                            </li>
                                                            <li _ngcontent-gyu-c53="">
                                                                <hr _ngcontent-gyu-c53=""
                                                                    class="dropdown-divider p-0 m-0">
                                                            </li>
                                                            <li _ngcontent-gyu-c53=""><a _ngcontent-gyu-c53=""
                                                                    class="dropdown-item d-flex align-items-center"><img
                                                                        _ngcontent-gyu-c53=""
                                                                        src="assets/icon/language/lang-hi.png"
                                                                        height="15" width="20" alt="No "><span
                                                                        _ngcontent-gyu-c53=""
                                                                        class="ms-2">भारत</span></a></li>
                                                            <li _ngcontent-gyu-c53="">
                                                                <hr _ngcontent-gyu-c53=""
                                                                    class="dropdown-divider p-0 m-0">
                                                            </li>
                                                            <li _ngcontent-gyu-c53=""><a _ngcontent-gyu-c53=""
                                                                    class="dropdown-item d-flex align-items-center"><img
                                                                        _ngcontent-gyu-c53=""
                                                                        src="assets/icon/language/lang-ja.png"
                                                                        height="15" width="20" alt="No "><span
                                                                        _ngcontent-gyu-c53="" class="ms-2">日本</span></a>
                                                            </li>
                                                            <li _ngcontent-gyu-c53="">
                                                                <hr _ngcontent-gyu-c53=""
                                                                    class="dropdown-divider p-0 m-0">
                                                            </li>
                                                            <li _ngcontent-gyu-c53=""><a _ngcontent-gyu-c53=""
                                                                    class="dropdown-item d-flex align-items-center"><img
                                                                        _ngcontent-gyu-c53=""
                                                                        src="assets/icon/language/lang-ko.png"
                                                                        height="15" width="20" alt="No "><span
                                                                        _ngcontent-gyu-c53=""
                                                                        class="ms-2">한국어</span></a></li>
                                                        </ul>
                                                    </div>
                                                </select-language><app-select-theme _ngcontent-gyu-c55=""
                                                    _nghost-gyu-c54="">
                                                    <div _ngcontent-gyu-c54="" class="dropdown theme"><a
                                                            _ngcontent-gyu-c54="" type="button"
                                                            data-bs-toggle="dropdown" id="dropdownTheme"
                                                            aria-expanded="false"
                                                            class="btn dropdown-toggle"><span
                                                                _ngcontent-gyu-c54="" class="me-5"><i
                                                                    _ngcontent-gyu-c54=""
                                                                    class="fa-solid fa-moon"></i><span
                                                                    _ngcontent-gyu-c54=""
                                                                    class="ms-2 me-1">Dark</span></span></a>
                                                        <ul _ngcontent-gyu-c54="" aria-labelledby="dropdownTheme"
                                                            class="dropdown-menu theme-menu">
                                                            <li _ngcontent-gyu-c54=""><a _ngcontent-gyu-c54=""
                                                                    role="button"
                                                                    class="dropdown-item d-flex align-items-center">
                                                                    <div _ngcontent-gyu-c54=""><i _ngcontent-gyu-c54=""
                                                                            class="fa-regular fa-moon"></i></div><span
                                                                        _ngcontent-gyu-c54="" class="ms-2">Dim</span>
                                                                </a></li>
                                                            <li _ngcontent-gyu-c54="">
                                                                <hr _ngcontent-gyu-c54=""
                                                                    class="dropdown-divider p-0 m-0">
                                                            </li>
                                                            <li _ngcontent-gyu-c54=""><a _ngcontent-gyu-c54=""
                                                                    role="button"
                                                                    class="dropdown-item d-flex align-items-center">
                                                                    <div _ngcontent-gyu-c54=""><i _ngcontent-gyu-c54=""
                                                                            class="fa-solid fa-moon"></i></div><span
                                                                        _ngcontent-gyu-c54="" class="ms-2">Dark</span>
                                                                </a></li>
                                                            <li _ngcontent-gyu-c54="">
                                                                <hr _ngcontent-gyu-c54=""
                                                                    class="dropdown-divider p-0 m-0">
                                                            </li>
                                                            <li _ngcontent-gyu-c54=""><a _ngcontent-gyu-c54=""
                                                                    role="button"
                                                                    class="dropdown-item d-flex align-items-center">
                                                                    <div _ngcontent-gyu-c54=""><i _ngcontent-gyu-c54=""
                                                                            class="fa-regular fa-lightbulb"></i></div>
                                                                    <span _ngcontent-gyu-c54=""
                                                                        class="ms-2">Light</span>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </app-select-theme></div>
                                        </div>
                                    </div>
                                    <hr _ngcontent-gyu-c55="" class="my-5">
                                    <div _ngcontent-gyu-c55="" class="mb-2 opacity-75 risk-warning"><i
                                            _ngcontent-gyu-c55="">Risk Warning: Trading binary options carries a high
                                            level of risk and can result in the loss of all your investment. As such,
                                            binary options may not be suitable for all investors. You should not invest
                                            money that you cannot afford to lose. Before trading binary options, you
                                            should carefully consider your investment objectives, level of experience,
                                            and risk appetite.</i></div>
                                    <div _ngcontent-gyu-c55="" class="opacity-75 risk-warning"><i
                                            _ngcontent-gyu-c55="">BX Trade is not responsible for any loss or damage
                                            resulting from your use of our services or your reliance on information
                                            provided on our website. You should always conduct your own research and
                                            seek independent financial advice before making any investment
                                            decisions.</i></div>
                                </div>
                            </div>
                        </app-public-footer>
                    </div>
                </app-home>
            </div>
        </div>
        <div class="drawer drawer-left slide" tabindex="-1" role="dialog" aria-labelledby="drawer-1-title"
            aria-hidden="true" id="drawer-1">
            <div class="drawer-content drawer-content-scrollable" role="document">
                <div class="drawer-header">
                    <h4 class="drawer-title" id="drawer-1-title">Drawer Title</h4>
                </div>
                <div class="drawer-body">
                    <p>Drawer body</p>
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="drawer" aria-label="Close">
                        Close
                    </button>
                </div>
                <div class="drawer-footer">Drawer footer</div>
            </div>
        </div>

    </app-root>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="/assets/bootstrap-drawer.js"></script>


</body>

</html>