        {{-- strat header section --}}
        @include('home.inc.header')
        @include('home.inc.search')
        @include('home.inc.navbar')
        {{-- end header section   --}}
        @include('home.inc.slider')
        <!-- end of section section -->
        <!-- start of featured items section ----------------------------------->
        @yield('index')
        @include('home.inc.product')
        <!-- end of featured items section ----------------------------------->
        @include('home.inc.banner')
        @include('home.inc.trending_item')
        @include('home.inc.fedback')
        @include('home.inc.footer')