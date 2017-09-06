@extends('theme::empty')

@section('body')
    <div id="app">
        @include('theme::components.menu.left')
        @include('theme::components.menu.top')

        <div class="cat__content">
            @yield('content')
        </div>
    </div>
@endsection