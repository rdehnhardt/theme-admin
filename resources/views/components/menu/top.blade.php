<div class="cat__top-bar">
    <div class="cat__top-bar__left">
        <div class="cat__top-bar__logo">
            <img src="@stack('logo')" class="img-fluid" />
        </div>

        @stack('top-left-actions')
    </div>

    <div class="cat__top-bar__right">
        @stack('top-right-actions')

        <div class="cat__top-bar__item">
            <div class="dropdown cat__top-bar__avatar-dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="cat__top-bar__avatar" href="javascript:void(0);">
                        @stack('avatar')
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
                    @stack('avatar-actions')
                </ul>
            </div>
        </div>
    </div>
</div>