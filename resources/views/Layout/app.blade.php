@include('Layout.header')

<div class="content-wrapper">

        @include('Layout.notification')
        @yield('main-content')

</div>


@include('Layout.footer')