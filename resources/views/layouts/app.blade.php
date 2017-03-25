@include('layouts.header')

<div class="content-wrapper">
    <div class="content">
        @include('Layout.notification')
        @yield('content')
    </div>
</div>


@include('layouts.footer')





