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
                <div class="row">

                </div>
            </div>
        </section>
    </main>
@endsection
