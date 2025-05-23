@extends('components.layouts.app')
@vite([ 'resources/js/pages/services.js', 'resources/css/services.css'])
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
                                <li><i class="fa fa-phone"></i><strong>phone</strong>{{__('ui.contact_phone')}} (help 24/7 )</li>
                                <li><i class="fa fa-envelope"></i><strong>email</strong>{{__('ui.contact_email')}}</li>
                            </ul>
                        </div>
                    </div>
                    {{--                    carrousel --}}
                    <div class="col-lg-9 col-md-7">
                        <!-- BLOG POST CAROUSEL -->
                        <div class="section-content">
                            <div class="aon-thum-bx">
                                <img class="img-responsive" src="{{$src}}" alt="" style="max-height: 500px">
                            </div>
                        </div>
                        <div class="wt-box pt-4">
                            <h2>{{$title}}</h2>
                            <p>{{$description}}</p>
                        </div>
                        <div class="wt-box">
                            <div class="p-t30">
                                <!-- TITLE START -->
                                <div class="section-head">

                                    <h2 class="text-uppercase">What is included</h2>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-square">
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>
                                    </div>

                                </div>
                                <!-- TITLE END -->
                                <!-- ACCORDIAN  BACKGROUND GRAY -->
                                <div class="section-content p-b30">
                                    <div class="wt-accordion acc-bg-gray" id="accordion5">
                                        <div class="panel wt-panel">
                                            <div class="acod-head acc-actives">
                                                <h6 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseOne5"><i class="fa fa-globe"></i>
                                                       {{$includes['include_1']}}
                                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapseOne5" class="acod-body collapse show" data-bs-parent="#accordion5">
                                                <div class="acod-content p-tb15"> {{$includes['include_1_text']}} </div>
                                            </div>
                                        </div>
                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h6 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseTwo5" class="collapsed"><i class="fa fa-photo"></i>
                                                        {{$includes['include_2']}}
                                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapseTwo5" class="acod-body collapse" data-bs-parent="#accordion5">
                                                <div class="acod-content p-tb15">{{$includes['include_2_text']}}</div>
                                            </div>
                                        </div>
                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h6 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseThree5" class="collapsed"><i class="fa fa-cog"></i>
                                                        {{$includes['include_3']}}
                                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapseThree5" class="acod-body collapse" data-bs-parent="#accordion5">
                                                <div class="acod-content p-tb15">{{$includes['include_3_text']}}</div>
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
