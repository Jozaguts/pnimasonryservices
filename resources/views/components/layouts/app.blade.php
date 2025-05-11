<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ko_Theme">
<head>
    <x-partials.head />
    <title>{{__('add page name')}}}}</title>
    @stack('styles')
</head>
<body class="">
@include('components.partials.loader')
<div id="website">
    <x-partials.header />

    <main class="WxEditableArea" id="contentArea">
        @yield('content')
    </main>

    <x-partials.footer />
</div>

{{-- Scripts generales --}}
@include('components.partials.scripts')
@stack('scripts')
</body>
</html>
