@extends('theme::empty')

@section('body')
    @include('theme::components.menu.left')
    @include('theme::components.menu.top')

    <div id="app">
        <div class="cat__content">
            @yield('content')
        </div>

        @include('theme::flash')
    </div>
@endsection