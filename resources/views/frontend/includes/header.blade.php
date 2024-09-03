<header class="rts-header-area header-one header-two header-plumber">
    <div class="header-top">
        <div class="left-area">
            <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.95455 6.95455H12.3636L5.40909 17V10.0455H0L6.95455 0V6.95455Z" fill="white" />
            </svg>
            <p>Express delivery and free returns within 24 hours</p>
        </div>
        <div class="right-area">
            <div class="location-area">
                <div class="icon">
                    <i class="fa-regular fa-location-dot"></i>
                </div>
                <a href="#">
                    <p>203 Madison Ave, New York, USA</p>
                </a>
            </div>
            <div class="mail-area">
                <div class="icon">
                    <i class="fa-light fa-envelope"></i>
                </div>
                <a href="#">
                    <p>info@example.com</p>
                </a>
            </div>

        </div>
    </div>
    <div class="header-main-area header--sticky">

        <a href="{{ route('frontend.index') }}" class="logo-main">
            <img src="{{ asset('images/logo-t.png') }}" alt="logo-main" style="width: 130px;height: 111px;">
        </a>

        <div class="header-nav main-nav-one">
            <nav>
                <ul>
                    <li>
                        <a class="nav-link" href="{{ route('frontend.index') }}">
                            @lang('backend.home-page')
                        </a>
                    </li>
                    <li><a class="nav-link" href="aboutus.html">ABOUT</a></li>
                    <li class="has-dropdown">
                        <a class="nav-link" href="#">SERVICES</a>
                        <ul class="submenu">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a class="nav-link" href="#">BLOG</a>
                        <ul class="submenu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a class="nav-link" href="#">PAGES</a>
                        <ul class="submenu">
                            <li><a href="appoinment.html">Appoinment</a></li>
                            <li><a href="project.html">Project</a></li>
                            <li class="sub-dropdown">
                                <a href="javascript:void(0);">Project Details</a>
                                <ul class="submenu third-lvl base">
                                    <li><a class="mobile-menu-link" href="project-details.html">Project Details</a></li>
                                    <li><a class="mobile-menu-link" href="project-details-gallery.html">Details
                                            Gallery</a></li>
                                    <li><a class="mobile-menu-link" href="project-details-vedio.html">Details Vedio</a>
                                    </li>
                                    <li><a class="mobile-menu-link" href="project-details-carousel.html">Details
                                            Carousel</a></li>
                                </ul>
                            </li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="faq.html">Faq</a></li>
                        </ul>
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
                        <path d="M15.75 14.7188L11.5625 10.5312C12.4688 9.4375 12.9688 8.03125 12.9688 6.5C12.9688 2.9375 10.0312 0 6.46875 0C2.875 0 0 2.9375 0 6.5C0 10.0938 2.90625 13 6.46875 13C7.96875 13 9.375 12.5 10.5 11.5938L14.6875 15.7812C14.8438 15.9375 15.0312 16 15.25 16C15.4375 16 15.625 15.9375 15.75 15.7812C16.0625 15.5 16.0625 15.0312 15.75 14.7188ZM1.5 6.5C1.5 3.75 3.71875 1.5 6.5 1.5C9.25 1.5 11.5 3.75 11.5 6.5C11.5 9.28125 9.25 11.5 6.5 11.5C3.71875 11.5 1.5 9.28125 1.5 6.5Z" fill="#1F1F25" />
                    </svg>

                </div>
                <div class="menu-btn" id="menu-btn">

                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="14" width="20" height="2" fill="#1F1F25" />
                        <rect y="7" width="20" height="2" fill="#1F1F25" />
                        <rect width="20" height="2" fill="#1F1F25" />
                    </svg>

                </div>
            </div>
            <a href="appoinment.html" class="rts-btn btn-primary">Make An Appointment </a>
        </div>
    </div>
</header>
