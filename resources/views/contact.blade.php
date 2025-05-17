@extends('components.layouts.app')
@section('content')
    <main class="WxEditableArea" id="contentArea">
        <div id="contentAreaElement" class="kelement"></div>
        <section data-pcid="4040.2" id="kpg_509457" class="kedit" data-bgcolor="#EEEFF5" style="background:#EEEFF5">
            <div class="container">
                <div class="text-center col-lg-8 mx-auto">
                    <div class="keditable koPreTitle aos-init aos-animate" data-aos="fade-in">{{ __('contact.title') }}</div>
                    <h2 class="keditable aos-init aos-animate" data-aos="fade-in">{{ __('contact.subtitle') }}</h2>
                    <div class="koSeparator koSeparatorBlock aos-init aos-animate" data-aos="fade-in" data-bg="--color1"
                         style="background: var(--color1); width: 100px;"></div>
                </div>
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-4">
                        <img src="{{asset('data/images/contact.webp')}}" alt="Contact Us Today!">
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <h2 class="text-md-start text-lg-start text-center mt-2">{{__('contact.invitation')}}</h2>
                        <form method="POST" action="{{route('contact.send')}}">
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                            @error('g-recaptcha-response','full_name','subject','email', 'message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">{{__('contact.form_fields.full_name')}}</label>
                                <input type="text" name="full_name" class="form-control" required id="name" placeholder="{{__('contact.form_fields.full_name_placeholder')}}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">{{__('contact.form_fields.email')}}</label>
                                <input type="email" name="email" required class="form-control" id="email" placeholder="{{__('contact.form_fields.email_placeholder')}}">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">{{__('contact.form_fields.subject')}}</label>
                                <input type="text"  required name="subject" class="form-control" id="subject" placeholder="{{__('contact.form_fields.subject_placeholder')}}">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">{{__('contact.form_fields.message')}}</label>
                                <textarea class="form-control" required name="message" id="message" rows="3"></textarea>
                            </div>

                                {!! NoCaptcha::display(['data-callback' => 'enableSubmit']) !!}
                                <div class="mt-3">
                                    <button id="contact-submit" class="btn btn-primary cursor-pointer btn-block btn-lg" type="submit" disabled>{{__('contact.form_fields.submit')}}</button>
                                </div>
                        </form>
                        {!! NoCaptcha::renderJs() !!}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script>
        function enableSubmit() {
            document.getElementById('contact-submit').disabled = false;
        }
    </script>
@endpush
