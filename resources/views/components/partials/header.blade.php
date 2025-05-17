<header id="header">
    <div id="headerMenu">
        <div class="container">
            <div class="logoHolder skiptranslate">
                <a href="{{ LaravelLocalization::localizeUrl('/') }}" class="logo">
                    <h2>
                        <img src="{{ asset('data/files/screenshot2024-10-10at4.01.51am.png') }}"
                             style="border:0"
                             id="WebsiteLogo"
                             width="84"
                             height="60"
                             alt="PNI Masonry Services"
                        >
                        <span id="WebsiteLogoTitle">PNI Masonry Services</span>
                    </h2>
                </a>
            </div>

            <ul class="menuHolder topmenu">
                <li class="{{ request()->is(LaravelLocalization::getCurrentLocale()) ? 'item_active active' : '' }}">
                    <a href="{{ LaravelLocalization::localizeUrl('/') }}"><span>{{ __('ui.nav.home') }}</span></a>
                </li>
                <li
                    class="{{ request()->is(LaravelLocalization::getCurrentLocale() . '/about') ? 'item_active active' : '' }}">
                    <a href="{{ LaravelLocalization::localizeUrl('about') }}"><span>{{ __('ui.nav.about') }}</span></a>
                </li>
                <li
                    class="{{ request()->is(LaravelLocalization::getCurrentLocale() . '/services') ? 'item_active active' : '' }}">
                    <a
                        href="{{ LaravelLocalization::localizeUrl('services') }}"><span>{{ __('ui.nav.services') }}</span></a>
                </li>
                <li
                    class="{{ request()->is(LaravelLocalization::getCurrentLocale() . '/gallery') ? 'item_active active' : '' }}">
                    <a
                        href="{{ LaravelLocalization::localizeUrl('gallery') }}"><span>{{ __('ui.nav.gallery') }}</span></a>
                </li>
                <li class="accent1 accents_start">
                    <a
                        href="{{ LaravelLocalization::localizeUrl('contact') }}"><span>{{ __('ui.nav.contact') }}</span></a>
                </li>
            </ul>
        </div>
    </div>
</header>
