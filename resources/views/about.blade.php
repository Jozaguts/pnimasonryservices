@extends('components.layouts.app')
@section('content')
    <main class="WxEditableArea" id="contentArea">
        <div id="contentAreaElement" class="kelement"></div>
        <section data-pcid="4040.2" id="kpg_509457" class="kedit" data-bgcolor="#EEEFF5" style="background:#EEEFF5">
            <div class="container">

                <div class="text-center col-lg-8 mx-auto">

                    <div class="keditable koPreTitle aos-init aos-animate" data-aos="fade-in">{{ __('about.title') }}</div>

                    <h2 class="keditable aos-init aos-animate" data-aos="fade-in">{{ __('about.subtitle') }}</h2>
                    <div class="koSeparator koSeparatorBlock aos-init aos-animate" data-aos="fade-in" data-bg="--color1"
                        style="background: var(--color1); width: 100px;"></div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-12 mx-auto " style="width: 400px; height: 600px;">
                            <img class="kimgfilter3 lazy entered loaded" alt="" data-ll-status="loaded"
                                src="https://placehold.co/400x600">
                        </div>
                        <div class="col-md-6 col-lg-6 col-12 pt-4">
                            <div class="keditable aos-init aos-animate" data-aos="fade-in" style="text-align: justify;">
                                <p class="keditable aos-init aos-animate" data-aos="fade-in" style="text-align: justify;">
                                    {{ __('about.history_1') }}
                                </p>
                                <p class="keditable aos-init aos-animate" data-aos="fade-in" style="text-align: justify;">
                                    {{ __('about.history_2') }}
                                </p>
                                <p class="keditable aos-init aos-animate" data-aos="fade-in" style="text-align: justify;">
                                    {{ __('about.history_3') }}
                                </p>
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <a href="tel:{{ __('ui.contact_phone') }}" class="elementor-icon" tabindex="-1"
                                                aria-label="{{ __('ui.contact_phone') }}">
                                                <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                            </a>
                                        </div>
                                        <div class="elementor-icon-box-content">
                                            <h3 class="elementor-icon-box-title">
                                                <a href="tel:{{ __('ui.contact_phone') }}">
                                                    {{ __('ui.contact_phone') }}
                                                </a>
                                            </h3>
                                            <p class="elementor-icon-box-description">
                                                Contact us for a quote today!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-lg-6 mb-3 mb-md-4 aos-init aos-animate" data-aos="fade-up">

                        <div class="bg-white keditWhite kimgfilter3">

                            <div class="row g-0">

                                <div class="col-4 p-2 kimgcover">

                                    <img class="kimgfilter3 lazy entered loaded"
                                        alt="{{ __('about.cards.waterproof.image_alt') }}"
                                        title="{{ __('about.cards.waterproof.image_title') }}"
                                        data-src="{{ asset('data/images/about_2.webp') }}" data-ll-status="loaded"
                                        src="{{ asset('data/images/about_2.webp') }}">
                                </div>

                                <div class="col-8">

                                    <div class="p-4">

                                        <h5 class="keditable m-0">{{ __('about.cards.waterproof.title') }}</h5>

                                        <small class="keditable">{{ __('about.cards.waterproof.subtitle') }}</small>

                                        <div class="mt-3 keditable">"{{ __('about.cards.waterproof.phrase') }}"
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-3 mb-md-4 aos-init aos-animate" data-aos="fade-up">

                        <div class="bg-white keditWhite kimgfilter3">

                            <div class="row g-0">

                                <div class="col-4 p-2 kimgcover">

                                    <img class="kimgfilter3 lazy entered loaded"
                                        alt="{{ __('about.cards.block.image_alt') }}"
                                        title="{{ __('about.cards.block.image_title') }}"
                                        data-src="{{ asset('data/images/concrete.webp') }}" data-ll-status="loaded"
                                        src="{{ asset('data/images/concrete.webp') }}">
                                </div>

                                <div class="col-8">

                                    <div class="p-4">

                                        <h5 class="keditable m-0">{{ __('about.cards.block.title') }}</h5>

                                        <small class="keditable">{{ __('about.cards.block.subtitle') }}</small>

                                        <div class="mt-3 keditable">"{{ __('about.cards.block.phrase') }}"
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-3 mb-md-4 aos-init aos-animate" data-aos="fade-up">

                        <div class="bg-white keditWhite kimgfilter3">

                            <div class="row g-0">

                                <div class="col-4 p-2 kimgcover">

                                    <img class="kimgfilter3 lazy entered loaded"
                                        alt="{{ __('about.cards.stucco.image_alt') }}"
                                        title="{{ __('about.cards.stucco.image_title') }}"
                                        data-src="{{ asset('data/images/stucco.webp') }}" data-ll-status="loaded"
                                        src="{{ asset('data/images/stucco.webp') }}">
                                </div>

                                <div class="col-8">

                                    <div class="p-4">

                                        <h5 class="keditable m-0">{{ __('about.cards.stucco.title') }}</h5>

                                        <small class="keditable">{{ __('about.cards.stucco.subtitle') }}</small>

                                        <div class="mt-3 keditable">"{{ __('about.cards.stucco.phrase') }}"
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-3 mb-md-4 aos-init aos-animate" data-aos="fade-up">

                        <div class="bg-white keditWhite kimgfilter3">

                            <div class="row g-0">

                                <div class="col-4 p-2 kimgcover">

                                    <img class="kimgfilter3 lazy entered loaded"
                                        alt="{{ __('about.cards.stamp_concrete.image_alt') }}"
                                        title="{{ __('about.cards.stamp_concrete.image_title') }}"
                                        data-src="{{ asset('data/images/stamp_concrete.webp') }}" data-ll-status="loaded"
                                        src="{{ asset('data/images/stamp_concrete.webp') }}">
                                </div>

                                <div class="col-8">

                                    <div class="p-4">

                                        <h5 class="keditable m-0">{{ __('about.cards.stamp_concrete.title') }}</h5>

                                        <small class="keditable">
                                            {{ __('about.cards.stamp_concrete.subtitle') }}
                                        </small>

                                        <div class="mt-3 keditable">"{{ __('about.cards.stamp_concrete.phrase') }}"</div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-3 mb-md-4 aos-init aos-animate" data-aos="fade-up">

                        <div class="bg-white keditWhite kimgfilter3">

                            <div class="row g-0">

                                <div class="col-4 p-2 kimgcover">

                                    <img class="kimgfilter3 lazy entered loaded"
                                        alt="{{ __('about.cards.stone.image_alt') }}"
                                        title="{{ __('about.cards.stone.image_title') }}"
                                        data-src="{{ asset('data/images/about_3.webp') }}" data-ll-status="loaded"
                                        src="{{ asset('data/images/stone.webp') }}">
                                </div>

                                <div class="col-8">

                                    <div class="p-4">

                                        <h5 class="keditable m-0">{{ __('about.cards.stone.title') }}</h5>

                                        <small class="keditable">{{ __('about.cards.stone.subtitle') }}</small>

                                        <div class="mt-3 keditable">"{{ __('about.cards.stone.phrase') }}"</div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-3 mb-md-4 aos-init aos-animate" data-aos="fade-up">

                        <div class="bg-white keditWhite kimgfilter3">

                            <div class="row g-0">

                                <div class="col-4 p-2 kimgcover">

                                    <img class="kimgfilter3 lazy entered loaded"
                                        alt="{{ __('about.cards.pavers.image_alt') }}"
                                        title="{{ __('about.cards.pavers.image_title') }}"
                                        data-src="{{ asset('data/images/pavers.webp') }}" data-ll-status="loaded"
                                        src="{{ asset('data/images/pavers.webp') }}">
                                </div>

                                <div class="col-8">

                                    <div class="p-4">

                                        <h5 class="keditable m-0">{{ __('about.cards.pavers.title') }}</h5>

                                        <small class="keditable">{{ __('about.cards.pavers.subtitle') }}</small>

                                        <div class="mt-3 keditable">"{{ __('about.cards.pavers.phrase') }}"
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-3 mb-md-4 aos-init aos-animate" data-aos="fade-up">

                        <div class="bg-white keditWhite kimgfilter3">

                            <div class="row g-0">

                                <div class="col-4 p-2 kimgcover">

                                    <img class="kimgfilter3 lazy entered loaded"
                                        alt="{{ __('about.cards.concrete.image_alt') }}"
                                        title="{{ __('about.cards.concrete.image_title') }}"
                                        data-src="{{ asset('data/images/about_4.webp') }}" data-ll-status="loaded"
                                        src="{{ asset('data/images/about_4.webp') }}">
                                </div>

                                <div class="col-8">

                                    <div class="p-4">

                                        <h5 class="keditable m-0">{{ __('about.cards.concrete.title') }}</h5>

                                        <small class="keditable">{{ __('about.cards.concrete.subtitle') }}</small>

                                        <div class="mt-3 keditable">"{{ __('about.cards.concrete.phrase') }}"</div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-3 mb-md-4 aos-init aos-animate" data-aos="fade-up">

                        <div class="bg-white keditWhite kimgfilter3">

                            <div class="row g-0">

                                <div class="col-4 p-2 kimgcover">

                                    <img class="kimgfilter3 lazy entered loaded"
                                        alt="{{ __('about.cards.fences.image_alt') }}"
                                        title="{{ __('about.cards.fences.image_title') }}"
                                        data-src="{{ asset('data/images/fences.webp') }}" data-ll-status="loaded"
                                        src="{{ asset('data/images/fences.webp') }}">
                                </div>

                                <div class="col-8">

                                    <div class="p-4">

                                        <h5 class="keditable m-0">{{ __('about.cards.fences.title') }}</h5>

                                        <small class="keditable">{{ __('about.cards.fences.subtitle') }}</small>

                                        <div class="mt-3 keditable">"{{ __('about.cards.fences.phrase') }}"
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
