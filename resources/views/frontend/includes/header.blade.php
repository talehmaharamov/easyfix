<header class="rts-header-area header-one header-two header-plumber">
    <div class="header-top">
        <div class="right-area">
            <div class="location-area">
                <div class="location-area">
                    <div class="icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <div class="language-dropdown">
                        <select name="language" id="language" style="color: white" onchange="location = this.value;">
                            @foreach(active_langs() as $lang)
                                <option style="color: black" value="{{ route('frontend.frontLanguage',$lang->code) }}"
                                        @if(app()->getLocale() == $lang->code) selected @endif>
                                    {{ $lang->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="mail-area">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <a href="tel:{{ settings('phone') }}">
                    <p>
                        {{ settings('phone') }}
                    </p>
                </a>
            </div>

        </div>
    </div>
    <div class="header-main-area header--sticky">

        <a href="{{ route('frontend.index') }}" class="logo-main">
            <img src="{{ asset('images/logo-t.png') }}" alt="logo-main" style="width: 101px;height: 103px;">
        </a>

        <div class="header-nav main-nav-one">
            <nav>
                <ul>
                    <li>
                        <a class="nav-link" href="{{ route('frontend.index') }}">
                            @lang('backend.home-page')
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('frontend.services') }}">
                            @lang('backend.service')
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('frontend.projects') }}">
                            @lang('backend.projects')
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('frontend.faq') }}">
                            @lang('backend.faq')
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('frontend.contact-page') }}">
                            @lang('backend.contact')
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="button-action-area">
            <div class="actions-area">
                <div class="search-btn" id="search">

                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.75 14.7188L11.5625 10.5312C12.4688 9.4375 12.9688 8.03125 12.9688 6.5C12.9688 2.9375 10.0312 0 6.46875 0C2.875 0 0 2.9375 0 6.5C0 10.0938 2.90625 13 6.46875 13C7.96875 13 9.375 12.5 10.5 11.5938L14.6875 15.7812C14.8438 15.9375 15.0312 16 15.25 16C15.4375 16 15.625 15.9375 15.75 15.7812C16.0625 15.5 16.0625 15.0312 15.75 14.7188ZM1.5 6.5C1.5 3.75 3.71875 1.5 6.5 1.5C9.25 1.5 11.5 3.75 11.5 6.5C11.5 9.28125 9.25 11.5 6.5 11.5C3.71875 11.5 1.5 9.28125 1.5 6.5Z"
                            fill="#1F1F25"/>
                    </svg>

                </div>
                <div class="menu-btn" id="menu-btn">
                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="14" width="20" height="2" fill="#1F1F25"/>
                        <rect y="7" width="20" height="2" fill="#1F1F25"/>
                        <rect width="20" height="2" fill="#1F1F25"/>
                    </svg>
                </div>
            </div>
            <a href="/contact/#secSection" class="rts-btn btn-primary">@lang('backend.get-appointment') </a>
        </div>
    </div>
</header>


<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{asset('frontend/images/banner/04.jpg')}}" alt="elevate">
        </div>
        <div class="inner-content">
            <h4 class="title">We Build Building and Great Constructive Homes.</h4>
            <p class="disc">
                We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master
                new technologies.
            </p>
            <div class="footer">
                <h4 class="title">Got a project in mind?</h4>
                <a href="contact.html" class="rts-btn btn-primary">Let's talk</a>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li>
                    <a href="{{ route('frontend.index') }}" class="main">
                        @lang('backend.home-page')
                    </a>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">
                        @lang('backend.service')
                    </a>
                    <ul class="submenu mm-collapse">
                        @foreach($generalCategories as $genCat2)
                            <li>
                                <a class="mobile-menu-link"
                                   href="{{route('frontend.selectedCategory',$genCat2->slug)}}">
                                    {{ getLocaleTranslation($genCat2,'name') }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="{{ route('frontend.faq') }}" class="main">
                        @lang('backend.faq')
                    </a>
                </li>
                <li>
                    <a href="{{ route('frontend.contact-page') }}" class="main">
                        @lang('backend.contact')
                    </a>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">
                        {{ \App\Models\SiteLanguage::where('code',app()->getLocale())->first()->name ?? '' }}
                    </a>
                    <ul class="submenu mm-collapse">
                        @foreach(active_langs() as $lang)
                            <li>
                                <a class="mobile-menu-link" href="{{ route('frontend.frontLanguage',$lang->code) }}">
                                    {{ $lang->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div class="whats-float">
    <a href="tel:{{ settings('phone') }}">
        <i class="fas fa-phone"></i>
        <span>
            @lang('backend.phone')<br>
            <small>{{ settings('phone') }}</small>
        </span>
    </a>
</div>
