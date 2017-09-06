@extends('theme::empty')

@section('body')
    <div class="cat__pages__login--center" style="background-image: url(@stack('background'))">
        <div class="cat__pages__login__block">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cat__pages__login__block__inner">
                        <div class="cat__pages__login__block__form">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection