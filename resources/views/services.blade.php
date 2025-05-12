@extends('components.layouts.app')
@vite(['resources/css/app.css', 'resources/js/pages/gallery.js', 'resources/css/services.css'])
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
                                <li><a href="about-1.html">Electricity</a></li>
                                <li><a href="about-1.html">Refurbishment</a></li>
                                <li><a href="about-1.html">House Security</a></li>
                                <li><a href="about-1.html">Laminate flooring</a></li>
                                <li><a href="about-1.html">General Contracting</a></li>
                                <li><a href="about-1.html">Construction Consultant</a></li>
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
                            <div
                                class="owl-carousel service-detail-carousel owl-btn-vertical-center owl-dots-bottom-center m-b30 owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-2650px, 0px, 0px); transition: all; width: 6185px;">
                                        <div class="owl-item cloned" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="data/files/img_2367..jpg" alt="" style="max-height: 500px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="data/files/img_2382..jpg" alt="" style="max-height: 500px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="data/files/img_2367..jpg" alt="" style="max-height: 500px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="data/files/img_2382..jpg" alt="" style="max-height: 500px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="data/files/img_2367..jpg" alt="" style="max-height: 500px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="data/files/img_2382..jpg" alt="" style="max-height: 500px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 853.5px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="aon-thum-bx">
                                                    <img src="data/files/img_2382..jpg" alt="" style="max-height: 500px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wt-box">
                            <h2>General Contruction</h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged. It was popularised in the with the .
                            </p>

                            <p>
                                Printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged. It was popularised in the with the .
                            </p>
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
                                                        Awesome Web Design
                                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapseOne5" class="acod-body collapse show" data-bs-parent="#accordion5">
                                                <div class="acod-content p-tb15">Web design lorem Ipsum is simply dummy text of the printing and typesetting and  industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into more then electronic typesetting, remaining essentially unchanged. It was popularised sheets containing lorem Ipsum passagese.</div>
                                            </div>
                                        </div>
                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h6 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseTwo5" class="collapsed"><i class="fa fa-photo"></i>
                                                        Different Graphic Design
                                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapseTwo5" class="acod-body collapse" data-bs-parent="#accordion5">
                                                <div class="acod-content p-tb15">Graphic design lorem Ipsum is simply dummy text of the printing and typesetting is industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into electro nic typesetting, remaining essentially unchanged. It was popularised sheets containing lorem Ipsum passagese.</div>
                                            </div>
                                        </div>
                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h6 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseThree5" class="collapsed"><i class="fa fa-cog"></i>
                                                        Fast Developement
                                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapseThree5" class="acod-body collapse" data-bs-parent="#accordion5">
                                                <div class="acod-content p-tb15">Developement lorem Ipsum is simply dummy text of the printing and typesetting is industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type are specimen book. It has survived not only five centuries, but also the leap into electro nic typesetting, remaining essentially unchanged. It was popularised sheets containing lorem Ipsum passagese.</div>
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
