@extends('components.layouts.app')
@section('content')
    <main class="WxEditableArea" id="contentArea">
        <div id="contentAreaElement" class="kelement"></div>
        <section data-pcid="4040.2" id="kpg_509457" class="kedit" data-bgcolor="#EEEFF5" style="background:#EEEFF5">
            <div class="container">
                <div class="text-center col-lg-8 mx-auto">
                    <div class="keditable koPreTitle aos-init aos-animate" data-aos="fade-in">{{ __('gallery.title') }}</div>
                    <h2 class="keditable aos-init aos-animate" data-aos="fade-in">{{ __('gallery.subtitle') }}</h2>
                    <div class="koSeparator koSeparatorBlock aos-init aos-animate" data-aos="fade-in" data-bg="--color1"
                         style="background: var(--color1); width: 100px;"></div>
                </div>
                <div class="row masonry">
                    @foreach($images as $key=>$image)
                         <div class="col-md-2 col-lg-2 col-12 pt-2  brick">
                             <img class="kimgfilter item item{{$key}}  btn-open-pswp-from-arr"
                                  alt="{{ $image['alt']}}"
                                 data-ll-status="loaded"
                                 src="{{ asset($image['path']) }}"
                                 style="width: 100%; height: 100%; object-fit: cover; max-width: 200px"
                                  data-id="{{$image['id']}}"
                                  onClick="showGallery(this)"

                             >
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
@vite([ 'resources/js/pages/gallery.js','resources/css/gallery.css'])
