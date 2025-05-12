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
            </div>
        </section>
    </main>
@endsection
