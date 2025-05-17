@extends('components.layouts.app')
@vite([ 'resources/js/pages/gallery.js', 'resources/css/services.css'])
@section('content')
    <main class="WxEditableArea" id="contentArea">
        <div id="contentAreaElement" class="kelement"></div>
        <section data-pcid="4040.2" id="kpg_509457" class="kedit" data-bgcolor="#EEEFF5" style="background:#EEEFF5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="wt-nav-block m-b30">
                            <h2 class="wt-nav-title">Services</h2>
                            <ul class="wt-nav wt-nav-pills">
                                <li class="{{ request()->is(LaravelLocalization::getCurrentLocale() . '/services/stone') ? 'item_active active' : '' }}">
                                    <a href="{{LaravelLocalization::localizeUrl('services').'/stone' }}">{{__('services.services.stone')}}</a>
                                </li>
                                <li class="{{ request()->is(LaravelLocalization::getCurrentLocale() . '/services/block') ? 'item_active active' : '' }}">
                                    <a href="{{LaravelLocalization::localizeUrl('services').'/block' }}">{{__('services.services.block')}}</a>
                                </li>
                                <li class="{{ request()->is(LaravelLocalization::getCurrentLocale() . '/services/concrete') ? 'item_active active' : '' }}">
                                    <a href="{{LaravelLocalization::localizeUrl('services').'/concrete' }}">{{__('services.services.concrete')}}</a>
                                </li>
                                <li class="{{ request()->is(LaravelLocalization::getCurrentLocale() . '/services/fences') ? 'item_active active' : '' }}">
                                    <a href="{{LaravelLocalization::localizeUrl('services').'/fences' }}">{{__('services.services.fences')}}</a>
                                </li>
                                <li class="{{ request()->is(LaravelLocalization::getCurrentLocale() . '/services/pavers') ? 'item_active active' : '' }}">
                                    <a href="{{LaravelLocalization::localizeUrl('services').'/pavers' }}">{{__('services.services.pavers')}}</a>
                                </li>
                                <li class="{{ request()->is(LaravelLocalization::getCurrentLocale() . '/services/stucco') ? 'item_active active' : '' }}">
                                    <a href="{{LaravelLocalization::localizeUrl('services').'/stucco' }}">{{__('services.services.stucco')}}</a>
                                </li>
                                <li class="{{ request()->is(LaravelLocalization::getCurrentLocale() . '/services/waterproof') ? 'item_active active' : '' }}">
                                    <a href="{{LaravelLocalization::localizeUrl('services').'/waterproof' }}">{{__('services.services.waterproof')}}</a>
                                </li>
                                <li class="{{ request()->is(LaravelLocalization::getCurrentLocale() . '/services/stamp_concrete') ? 'item_active active' : '' }}">
                                    <a href="{{LaravelLocalization::localizeUrl('services').'/stamp_concrete' }}">{{__('services.services.stamp_concrete')}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget  widget_getintuch">
                            <h4 class="widget-title">Contact us</h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><strong>Address</strong> {{__('ui.contact_address')}}</li>
                                <li><i class="fa fa-phone"></i><strong>phone</strong><a href="tel:+1{{__('ui.contact_phone')}}">{{__('ui.contact_phone')}}</a> (help 24/7 )</li>
                                <li><i class="fa fa-envelope"></i><strong>email</strong><a href="mailto:{{__('ui.contact_email')}}" class="services-email-link">{{__('ui.contact_email')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    {{--                    carrousel --}}
                    <div class="col-lg-9 col-md-7">
                        <!-- BLOG POST CAROUSEL -->
                        <div class="section-content">
                            <div
                                class="owl-carousel service-detail-carousel owl-btn-vertical-center owl-dots-bottom-center m-b30 owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-2650px, 0px, 0px); transition: all; width: 6185px;">
                                        <div class="owl-item">
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="{{asset('data/files/img_2367..jpg')}}" alt="{{__('services.block.image_alt')}}" title="__('services.block.image_title')}}" style="max-height: 500px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item " >
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="{{asset('data/images/about.webp')}}" alt="{{__('services.fences.image_alt')}}" title="{{__('services.fences.image_title')}}" style="max-height: 360px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item " >
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="{{asset('data/images/stone_2.jpg')}}" alt="{{__('services.stone.image_alt')}}" title="{{__('services.stone.image_title')}}" style="max-height: 360px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="{{asset('data/images/home4.jpg')}}" alt="" style="max-height: 360px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="{{asset('data/images/waterproof.jpg')}}" alt="{{__('services.waterproof.image_alt')}}" title="{{__('services.waterproof.image_title')}}" style="max-height: 360px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="{{asset('data/images/stucco.webp')}}"  alt="{{__('services.stucco.image_alt')}}" title="{{__('services.stucco.image_title')}}" style="max-height: 360px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" >
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="{{asset('data/images/pavers.jpg')}}"  alt="{{__('services.pavers.image_alt')}}" title="{{__('services.pavers.image_title')}}" style="max-height: 360px">
                                                </div>
                                            </div>
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
