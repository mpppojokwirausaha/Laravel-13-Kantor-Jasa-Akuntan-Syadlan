@include('front-end.layouts.partials.meta')

<body class="bg-paper text-ink antialiased font-sans pb-[calc(68px+env(safe-area-inset-bottom,0px))] md:pb-0">
    @include('front-end.layouts.partials.header')
    @yield('content')
    @include('front-end.layouts.partials.footer')
    @include('front-end.layouts.partials.bottom-bar')
    @include('front-end.layouts.partials.chat')
    @include('front-end.layouts.partials.script')
    @stack('scripts')
</body>

</html>
