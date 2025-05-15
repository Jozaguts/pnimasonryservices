@extends('components.layouts.app')
@section('content')
    <div id="contentAreaElement" class="kelement"></div>
    <section class="kedit">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg">
                    <div class="col-container">
                        <div class="mt-2 mb-2 kimgRatio2">
                            <img title="PNI masonry services logo " alt="PNI masonry services logo"
                                 class="img-fluid lazy entered loaded" data-src="data/files/brandpniservicescurvas3.png"
                                 data-ll-status="loaded" src="data/files/brandpniservicescurvas3.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="col-container">
                        <h1 class="display-4 mt-2 mb-2 keditable">
                            {{ __('home.welcome_title_line1') }}<br>
                            {{ __('home.welcome_title_line2') }}
                        </h1>
                        <div style="background: rgb(239, 183, 26); height: 15px; width: 100px; margin-top: 30px; margin-bottom: 30px;"
                             data-bg="#efb71a" class="koSeparator koSeparatorBlock koSeparatorLeft"></div>
                        <div style="font-size: 24px;" class="mt-2 mb-2 keditable">
                            {{ __('home.welcome_subtitle') }}
                        </div>
                        <div class="koButtons d-flex mt-4 mb-2"><a
                                    class="btn btn-color1">{{ __('home.btn_get_started') }}</a>
                            <a class="btn btn-color2"
                               href="{{ LaravelLocalization::localizeUrl('about') }}">{{ __('home.btn_more_info') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-pcid="4016.2" id="kpg_841798" class="kedit">
        <div class="container text-center">
            <span class="keditable d-none"></span>
            <img class="img-fluid kimgfilter3 lazy entered error" alt="" title=""
                 data-src="data/files/b6543656-f33e-40b7-9f4a-8a77e9db18c1.mp4" data-ll-status="error"
                 src="data/files/b6543656-f33e-40b7-9f4a-8a77e9db18c1.mp4">
        </div>
    </section>
    <section data-pcid="4028.2" id="kpg_46478" class="kedit">

        <div class="no-container">
            <div class="keditable d-none"></div>

            <div class="row g-0 my-5 py-5">

                <div class="d-none col d-md-flex align-items-center"
                     style="transform:translateY(-1.5em) scale(1.4) rotate(2deg)">

                    <div class="kimgRatio1">
                        <img class="kimgfilter3 lazy entered loaded"
                         alt="{{__('home.images.home_1.alt')}}"
                         title="{{__('home.images.home_1.title')}}"
                         data-ll-status="loaded"
                         data-src="{{asset('data/images/about.webp')}}"
                         src="{{asset('data/images/about.webp')}}"
                        >
                    </div>

                </div>
                <div class="col d-flex align-items-center" style="transform:translateY(1em) scale(1.4) rotate(-5deg)">

                    <div class="kimgRatio1">
                        <img class="kimgfilter3 lazy entered loaded"
                             alt="{{__('home.images.home_2.alt')}}"
                             title="{{__('home.images.home_2.title')}}"
                             data-ll-status="loaded"
                             data-src="{{asset('data/images/home_2.jpg')}}"
                             src="{{asset('data/images/home_2.jpg')}}"
                        >

                    </div>

                </div>
                <div class="col d-flex align-items-center" style="transform:translateY(-2em) scale(1.3) rotate(3deg)">
                    <div class="kimgRatio1">
                        <img class="kimgfilter3 lazy entered loaded"
                             alt="{{__('home.images.home_3.alt')}}"
                             title="{{__('home.images.home_3.title')}}"
                             data-ll-status="loaded"
                             data-src="{{asset('data/files/img_2367..jpg')}}"
                             src="{{asset('data/files/img_2367..jpg')}}"
                        >
                    </div>

                </div>
                <div class="col d-flex align-items-center" style="transform:translateY(1.5em) scale(1.3) rotate(-5deg)">

                    <div class="kimgRatio1">
                        <img class="kimgfilter3 lazy entered loaded"
                             alt="{{__('home.images.home_4.alt')}}"
                             title="{{__('home.images.home_4.title')}}"
                             data-ll-status="loaded"
                             data-src="{{asset('data/images/home4.jpg')}}"
                             src="{{asset('data/images/home4.jpg')}}"
                        >
                    </div>

                </div>
                <div class="d-none col d-md-flex align-items-center"
                     style="transform:translateY(-1em) scale(1.3) rotate(5deg)">

                    <div class="kimgRatio1">
                        <img class="kimgfilter3 lazy entered loaded"
                             alt="{{__('home.images.home_5.alt')}}"
                             title="{{__('home.images.home_5.title')}}"
                             data-ll-status="loaded"
                             data-src="{{asset('data/images/pavers.jpg')}}"
                             src="{{asset('data/images/pavers.jpg')}}"
                        >
                    </div>

                </div>

            </div>

        </div>

    </section>
    <section data-pcid="4004.1" id="kpg_780057" class="kedit keditDark" data-bgcolor="#25274d" data-padding="100-120"
             style="background:#25274d;padding-top:100px;padding-bottom:120px">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 aos-init" data-aos="fade-up">
                    <h2 class="keditable">{{ __('home.creativity.title') }}</h2>
                    <div class="keditable">{{ __('home.creativity.description') }}</div>
                    <div class="px-5">
                        <div class="kimgRatio1 mt-4">
                            <img class="kimgfilter6 lazy entered loaded" alt="{{ __('home.creativity.image_alt') }}"
                                 title="{{ __('home.creativity.image_title') }}"
                                 data-src="data/files/screenshot2024-10-10at4.49.57am.png" data-ll-status="loaded"
                                 src="data/files/screenshot2024-10-10at4.49.57am.png">
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 aos-init" data-aos="fade-up">
                    <h2 class="keditable">{{ __('home.comfort.title') }}</h2>
                    <div class="keditable">{{ __('home.comfort.description') }}</div>
                    <div class="px-5">
                        <div class="kimgRatio1 mt-4">
                            <img class="kimgfilter6 lazy entered loaded" alt="{{ __('home.comfort.image_alt') }}"
                                 title="{{ __('home.comfort.image_title') }}" data-src="data/files/img_2350..jpg"
                                 data-ll-status="loaded" src="data/files/img_2350..jpg">
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 aos-init" data-aos="fade-up">
                    <h2 class="keditable">{{ __('home.innovation.title') }}</h2>
                    <div class="keditable">{{ __('home.innovation.description') }}</div>
                    <div class="px-5">
                        <div class="kimgRatio1 mt-4">
                            <img class="kimgfilter6 lazy entered loaded"
                                 alt="{{ __('home.innovation.image_title') }}"
                                 title="{{ __('home.innovation.image_title') }}"
                                 data-src="{{asset('data/images/stamp_concrete.jpg')}}"
                                 data-ll-status="loaded" src="{{asset('data/images/stamp_concrete.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="keditLayer_footer h-auto" data-color="rgb(255, 255, 255)" data-style="7" data-height="h-auto"
             style="fill:rgb(255, 255, 255);color:rgb(255, 255, 255);"><svg width="100%" height="100%" viewBox="0 0 3112 117" preserveAspectRatio="none">
                <g transform="matrix(0.997611, 0, 0, 0.926843, -0.999626, -425.946198)">
                    <g transform="matrix(1.05523,0,0,0.197876,-141.168,242.24)">
                        <path
                                d="M3091.86,1103.75C2087.93,1727.79 1103.28,1680.11 133.779,1103.75L133.779,1741.7L3091.86,1741.7L3091.86,1103.75Z"
                                style="fill-opacity:0.5;"></path>
                    </g>
                    <g transform="matrix(1.05523,0,0,0.197876,-141.168,242.24)">
                        <path
                                d="M3091.86,1204.82C2087.93,1828.86 1103.28,1781.18 133.779,1204.82L133.779,1741.7L3091.86,1741.7L3091.86,1204.82Z">
                        </path>
                    </g>
                </g>
            </svg></div>
    </section>
    <section data-pcid="4071" id="kpg_643497" class="kedit" data-bgcolor="#efb71a" style="background:#efb71a">
        <div class="container keditLayer">
            <div class="row justify-content-center">
                <div class="col col-md-8 text-center">
                    <h1 class="keditable aos-init" data-aos="fade-up">
                        {{ __('home.call_to_action_title') }}
                    </h1>
                    <div class="keditable aos-init" data-aos="fade-up" style="font-size: 18px;">
                        {{ __('home.call_to_action_text') }}<br>
                    </div>
                </div>
            </div>
        </div>

        <div class="keditLayer_footer h-auto" data-color="#e3d85f" data-style="7" data-height="h-auto"
             style="fill:#e3d85f;color:#e3d85f;"><svg width="100%" height="100%" viewBox="0 0 3112 117"
                                                      preserveAspectRatio="none">
                <g transform="matrix(0.997611, 0, 0, 0.926843, -0.999626, -425.946198)">
                    <g transform="matrix(1.05523,0,0,0.197876,-141.168,242.24)">
                        <path
                                d="M3091.86,1103.75C2087.93,1727.79 1103.28,1680.11 133.779,1103.75L133.779,1741.7L3091.86,1741.7L3091.86,1103.75Z"
                                style="fill-opacity:0.5;"></path>
                    </g>
                    <g transform="matrix(1.05523,0,0,0.197876,-141.168,242.24)">
                        <path
                                d="M3091.86,1204.82C2087.93,1828.86 1103.28,1781.18 133.779,1204.82L133.779,1741.7L3091.86,1741.7L3091.86,1204.82Z">
                        </path>
                    </g>
                </g>
            </svg>
        </div>
    </section>
    <section data-pcid="4005.1" id="kpg_614125" class="kedit keditDark kfilter21" data-bgradient="#6d71b7/#25274d/1"
             style="background: linear-gradient(to bottom,#6d71b7,#25274d);">
        <div class="row justify-content-center align-contents-center mx-5 mx-md-0 skiptranslate">
            <div class="col-12 col-md-auto d-flex align-items-center">
                    <span class="koIconStyle1 koIconHolder koIconSize100 me-1 ms-0"><i
                                class="koIcon fas fa-phone"></i></span>
                <div class="keditable me-5 ms-3">{{ __('ui.contact_phone') }}<a href="tel:2677337053"><br></a></div>
            </div>
            <div class="col-12 col-md-auto d-flex align-items-center my-4 my-md-0">
                    <span class="koIconStyle1 koIconHolder koIconSize100 me-1 ms-0"><i
                                class="koIcon fas fa-envelope"></i></span>
                <div class="keditable me-5 ms-3">{{ __('ui.contact_email') }}</div>
            </div>
            <div class="col-12 col-md-auto d-flex align-items-center">
                    <span class="koIconStyle1 koIconHolder koIconSize100 me-1 ms-0"><i
                                class="koIcon fas fa-map-marker-alt"></i></span>
                <div class="keditable ms-3">{{ __('ui.contact_address') }}<div>{{ __('ui.contact_city') }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection
