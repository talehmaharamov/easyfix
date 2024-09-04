<div class="plumber-about-area-start rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="thumbnail-about-plumber">
                    <div class="large-image">
                        <img src="{{ asset('frontend/images/about/13.jpg')}}" alt="about">
                    </div>
                    <div class="small-image images">
                        <img src="{{ asset('frontend/images/about/14.png')}}" alt="small-about">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt_md--40 mt_sm--30">
                <div class="about-right-plumber">
                    <div class="title-area-left">
                        <p class="pre">
                            @lang('backend.more-about-company')
                        </p>
                        <h2 class="title">
                            @lang('backend.we-are-expert-in-all') <br>
                            <span>
                                @lang('backend.home-app-repair')
                            </span>
                        </h2>
                    </div>
                    <p class="dsic">
                        @lang('backend.theese-tool')
                    </p>
                    <div class="main-wrapper-service">
                        @foreach($generalCategories as $genCat4)
                            <div class="single-service-plumber-inner">
                                <i class="fa-sharp fa-solid fa-circle-check"></i>
                                <p>
                                    {{ getLocaleTranslation($genCat4,'name') }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div class="button-area-pl-about">
                        <a href="#" class="rts-btn btn-primary">
                            @lang('backend.load-more')
                            <i class="fa-regular fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts plumber about area end -->

<!-- rts plumber solution area start -->
<div class="rts-plumber-solution-area rts-section-gapTop bg_solution-plumber bg_image">
    <div class="container mb--120">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-center">
                    <p class="pre">
                        More About Diyer Company
                    </p>
                    <h2 class="title">
                        Delivering Exceptional <br>
                        <span> Plumber Solution</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row g-24 mt--20">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <!-- single solution start -->
                <div class="single-colution-details-plumber">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50" fill="#FD8F14" fill-opacity="0.1"/>
                            <path
                                d="M82.6667 43H73.3333V36H74.5C75.1186 35.9994 75.7118 35.7534 76.1492 35.3159C76.5867 34.8784 76.8327 34.2853 76.8333 33.6667V31.3333C76.8327 30.7147 76.5867 30.1216 76.1492 29.6841C75.7118 29.2466 75.1186 29.0006 74.5 29H25.5C24.8814 29.0006 24.2882 29.2466 23.8508 29.6841C23.4133 30.1216 23.1673 30.7147 23.1667 31.3333V33.6667C23.1673 34.2853 23.4133 34.8784 23.8508 35.3159C24.2882 35.7534 24.8814 35.9994 25.5 36H26.6667V43H17.3333C16.7147 43.0006 16.1216 43.2466 15.6841 43.6841C15.2466 44.1216 15.0006 44.7147 15 45.3333V47.6667C15.0006 48.2853 15.2466 48.8784 15.6841 49.3159C16.1216 49.7534 16.7147 49.9994 17.3333 50H18.5V80.3333C18.5 80.6427 18.6229 80.9395 18.8417 81.1583C19.0605 81.3771 19.3572 81.5 19.6667 81.5C19.9761 81.5 20.2728 81.3771 20.4916 81.1583C20.7104 80.9395 20.8333 80.6427 20.8333 80.3333V50H26.6667V79.1667C26.6667 79.4761 26.7896 79.7728 27.0084 79.9916C27.2272 80.2104 27.5239 80.3333 27.8333 80.3333C28.1428 80.3333 28.4395 80.2104 28.6583 79.9916C28.8771 79.7728 29 79.4761 29 79.1667V36H71V79.1667C71 79.4761 71.1229 79.7728 71.3417 79.9916C71.5605 80.2104 71.8572 80.3333 72.1667 80.3333C72.4761 80.3333 72.7728 80.2104 72.9916 79.9916C73.2104 79.7728 73.3333 79.4761 73.3333 79.1667V50H79.1667V80.3333C79.1667 80.6427 79.2896 80.9395 79.5084 81.1583C79.7272 81.3771 80.0239 81.5 80.3333 81.5C80.6428 81.5 80.9395 81.3771 81.1583 81.1583C81.3771 80.9395 81.5 80.6427 81.5 80.3333V50H82.6667C83.2853 49.9994 83.8784 49.7534 84.3159 49.3159C84.7533 48.8784 84.9994 48.2853 85 47.6667V45.3333C84.9994 44.7147 84.7533 44.1216 84.3159 43.6841C83.8784 43.2466 83.2853 43.0006 82.6667 43ZM26.6667 47.6667H17.3333V45.3333H26.6667V47.6667ZM25.5 33.6667V31.3333H74.5L74.5017 33.6667H25.5ZM82.6667 47.6667H73.3333V45.3333H82.6667V47.6667ZM45.3333 67.5C45.3333 67.8094 45.4562 68.1062 45.675 68.325C45.8938 68.5438 46.1906 68.6667 46.5 68.6667H53.5C53.8094 68.6667 54.1062 68.5438 54.325 68.325C54.5438 68.1062 54.6667 67.8094 54.6667 67.5V58.1667C54.6667 57.8572 54.5438 57.5605 54.325 57.3417C54.1062 57.1229 53.8094 57 53.5 57H46.5C46.1906 57 45.8938 57.1229 45.675 57.3417C45.4562 57.5605 45.3333 57.8572 45.3333 58.1667V67.5ZM47.6667 59.3333H52.3333V66.3333H47.6667V59.3333ZM46.5 52.3333H53.5C53.8094 52.3333 54.1062 52.2104 54.325 51.9916C54.5438 51.7728 54.6667 51.4761 54.6667 51.1667V41.8333C54.6667 41.5239 54.5438 41.2272 54.325 41.0084C54.1062 40.7896 53.8094 40.6667 53.5 40.6667H46.5C46.1906 40.6667 45.8938 40.7896 45.675 41.0084C45.4562 41.2272 45.3333 41.5239 45.3333 41.8333V51.1667C45.3333 51.4761 45.4562 51.7728 45.675 51.9916C45.8938 52.2104 46.1906 52.3333 46.5 52.3333ZM47.6667 43H52.3333V50H47.6667V43ZM58.1667 67.5C58.1667 67.8094 58.2896 68.1062 58.5084 68.325C58.7272 68.5438 59.0239 68.6667 59.3333 68.6667H66.3333C66.6427 68.6667 66.9395 68.5438 67.1583 68.325C67.3771 68.1062 67.5 67.8094 67.5 67.5V58.1667C67.5 57.8572 67.3771 57.5605 67.1583 57.3417C66.9395 57.1229 66.6427 57 66.3333 57H59.3333C59.0239 57 58.7272 57.1229 58.5084 57.3417C58.2896 57.5605 58.1667 57.8572 58.1667 58.1667V67.5ZM60.5 59.3333H65.1667V66.3333H60.5V59.3333ZM59.3333 52.3333H66.3333C66.6427 52.3333 66.9395 52.2104 67.1583 51.9916C67.3771 51.7728 67.5 51.4761 67.5 51.1667V41.8333C67.5 41.5239 67.3771 41.2272 67.1583 41.0084C66.9395 40.7896 66.6427 40.6667 66.3333 40.6667H59.3333C59.0239 40.6667 58.7272 40.7896 58.5084 41.0084C58.2896 41.2272 58.1667 41.5239 58.1667 41.8333V51.1667C58.1667 51.4761 58.2896 51.7728 58.5084 51.9916C58.7272 52.2104 59.0239 52.3333 59.3333 52.3333ZM60.5 43H65.1667V50H60.5V43ZM32.5 67.5C32.5 67.8094 32.6229 68.1062 32.8417 68.325C33.0605 68.5438 33.3572 68.6667 33.6667 68.6667H40.6667C40.9761 68.6667 41.2728 68.5438 41.4916 68.325C41.7104 68.1062 41.8333 67.8094 41.8333 67.5V58.1667C41.8333 57.8572 41.7104 57.5605 41.4916 57.3417C41.2728 57.1229 40.9761 57 40.6667 57H33.6667C33.3572 57 33.0605 57.1229 32.8417 57.3417C32.6229 57.5605 32.5 57.8572 32.5 58.1667V67.5ZM34.8333 59.3333H39.5V66.3333H34.8333V59.3333ZM33.6667 52.3333H40.6667C40.9761 52.3333 41.2728 52.2104 41.4916 51.9916C41.7104 51.7728 41.8333 51.4761 41.8333 51.1667V41.8333C41.8333 41.5239 41.7104 41.2272 41.4916 41.0084C41.2728 40.7896 40.9761 40.6667 40.6667 40.6667H33.6667C33.3572 40.6667 33.0605 40.7896 32.8417 41.0084C32.6229 41.2272 32.5 41.5239 32.5 41.8333V51.1667C32.5 51.4761 32.6229 51.7728 32.8417 51.9916C33.0605 52.2104 33.3572 52.3333 33.6667 52.3333ZM34.8333 43H39.5V50H34.8333V43ZM80.241 86.2635C79.7184 85.1854 78.9027 84.2762 77.8874 83.6401C76.872 83.004 75.6981 82.6667 74.5 82.6667C73.3019 82.6667 72.128 83.004 71.1126 83.6401C70.0973 84.2762 69.2816 85.1854 68.7589 86.2635C67.635 86.4799 66.603 87.0319 65.799 87.8466C65.2405 88.3864 64.794 89.0312 64.4853 89.7439C64.1766 90.4567 64.0117 91.2234 64 92H61.6667V74.5C61.6667 74.1906 61.5438 73.8938 61.325 73.675C61.1062 73.4562 60.8094 73.3333 60.5 73.3333H39.5C39.1906 73.3333 38.8938 73.4562 38.675 73.675C38.4562 73.8938 38.3333 74.1906 38.3333 74.5V92H36C35.9883 91.2234 35.8234 90.4567 35.5147 89.7439C35.206 89.0312 34.7595 88.3864 34.201 87.8466C33.397 87.0319 32.365 86.4799 31.2411 86.2635C30.7184 85.1854 29.9027 84.2762 28.8874 83.6401C27.872 83.004 26.6981 82.6667 25.5 82.6667C24.3019 82.6667 23.128 83.004 22.1126 83.6401C21.0973 84.2762 20.2816 85.1854 19.7589 86.2635C18.635 86.4799 17.603 87.0319 16.799 87.8466C16.2405 88.3864 15.794 89.0312 15.4853 89.7439C15.1766 90.4567 15.0117 91.2234 15 92V97.8333C15 98.1428 15.1229 98.4395 15.3417 98.6583C15.5605 98.8771 15.8572 99 16.1667 99H83.8333C84.1428 99 84.4395 98.8771 84.6583 98.6583C84.8771 98.4395 85 98.1428 85 97.8333V92C84.9883 91.2234 84.8234 90.4567 84.5147 89.7439C84.206 89.0312 83.7595 88.3864 83.201 87.8466C82.397 87.0319 81.365 86.4799 80.241 86.2635ZM51.1667 75.6667H59.3333V92H51.1667V75.6667ZM40.6667 75.6667H48.8333V92H40.6667V75.6667ZM18.4368 89.5089C18.9842 88.9198 19.7407 88.5688 20.544 88.5313C20.7884 88.5317 21.0269 88.4567 21.2272 88.3167C21.4275 88.1766 21.5798 87.9783 21.6634 87.7486C21.9357 86.9471 22.4521 86.251 23.1402 85.7581C23.8284 85.2651 24.6536 85 25.5001 85C26.3465 85 27.1718 85.2651 27.8599 85.7581C28.548 86.251 29.0644 86.9471 29.3367 87.7486C29.4182 87.9797 29.57 88.1794 29.7707 88.3198C29.9715 88.4601 30.2112 88.5341 30.4561 88.5313C31.2574 88.5767 32.0112 88.9264 32.5633 89.5089C32.902 89.8312 33.1737 90.2171 33.3631 90.6446C33.5524 91.072 33.6556 91.5326 33.6667 92H17.3333C17.3444 91.5326 17.4476 91.072 17.637 90.6445C17.8263 90.2171 18.0981 89.8312 18.4368 89.5089ZM82.6667 96.6667H17.3333V94.3333H82.6667V96.6667ZM66.3333 92C66.3444 91.5326 66.4476 91.072 66.637 90.6445C66.8263 90.2171 67.0981 89.8312 67.4368 89.5089C67.9867 88.9234 68.7417 88.5731 69.5439 88.5313C69.7892 88.5356 70.0296 88.4621 70.2306 88.3216C70.4317 88.181 70.5831 87.9805 70.6633 87.7486C70.9356 86.9471 71.4521 86.251 72.1402 85.7581C72.8283 85.2651 73.6535 85 74.5 85C75.3465 85 76.1717 85.2651 76.8598 85.7581C77.5479 86.251 78.0644 86.9471 78.3367 87.7486C78.4154 87.9814 78.5664 88.183 78.7678 88.3238C78.9692 88.4646 79.2104 88.5373 79.4561 88.5313C80.2564 88.5805 81.0088 88.9296 81.5632 89.5089C81.9019 89.8312 82.1737 90.2171 82.363 90.6445C82.5524 91.072 82.6556 91.5326 82.6667 92H66.3333Z"
                                fill="#FD8F14"/>
                        </svg>
                    </div>
                    <h5 class="title">Commercial Plumbing</h5>
                    <p class="disc">
                        Air-source heat pump system that combines heating, cooling & heating solutions.
                    </p>
                    <a href="#" class="rts-btn btn-primary">Read More</a>
                </div>
                <!-- single solution end -->
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="thumbnail-img-plumber">
                    <img src="{{ asset('frontend/images/service/12.png')}}" alt="service-image">
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="thumbnail-img-plumber">
                    <img src="{{ asset('frontend/images/service/13.png')}}" alt="service-image">
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <!-- single solution start -->
                <div class="single-colution-details-plumber">
                    <div class="icon">

                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50" fill="#FD8F14" fill-opacity="0.1"/>
                            <path d="M60.1613 85.4516H62.4194V94.4839H60.1613V85.4516Z" fill="#FD8F14"/>
                            <path d="M64.6774 85.4516H66.9355V94.4839H64.6774V85.4516Z" fill="#FD8F14"/>
                            <path
                                d="M75.9677 68.5048V44.8065H73.7097V33.3118L71.4516 33.6877V31.2581H69.1936V34.0648L66.9355 34.4408V29H64.6774V34.8179L62.4194 35.1939V31.2581H60.1613V35.5698L57.9032 35.9458V44.8065H55.6452V56.0968H46.6129V40.2903H42.0968V33.5161H39.8387V29H28.5484V33.5161H26.2903V40.2903H21.7742V61.3863C19.4348 62.5029 17.7311 64.7305 17.3484 67.3871H15V99H85V67.2144L75.9677 68.5048ZM60.1613 37.8595L71.4516 35.9774V44.8065H60.1613V37.8595ZM57.9032 47.0645H73.7097V68.8277L66.9355 69.7953V75.6674L63.5484 71.1513L60.1613 75.6674V56.0968H57.9032V47.0645ZM57.9032 60.6129H42.0968V58.3548H57.9032V60.6129ZM57.9032 83.1936H69.1936V96.7419H57.9032V83.1936ZM59.0323 80.9355L63.5484 74.9144L68.0645 80.9355H59.0323ZM30.8065 31.2581H37.5806V33.5161H30.8065V31.2581ZM28.5484 35.7742H39.8387V40.2903H28.5484V35.7742ZM24.0323 42.5484H44.3548V56.0968H39.8387V61.3863C38.8102 60.8963 37.6642 60.6129 36.4516 60.6129H25.1613C24.7774 60.6129 24.4026 60.6502 24.0323 60.7032V42.5484ZM25.1613 62.871H36.4516C39.1771 62.871 41.4577 64.814 41.9827 67.3871H19.6302C20.1552 64.814 22.4358 62.871 25.1613 62.871ZM44.3548 69.6452V71.9032H17.2581V69.6452H44.3548ZM39.8387 89.9677H35.3226V85.4516H39.8387V89.9677ZM33.0645 89.9677H28.5484V85.4516H33.0645V89.9677ZM33.0645 92.2258V96.7419H28.5484V92.2258H33.0645ZM35.3226 92.2258H39.8387V96.7419H35.3226V92.2258ZM39.8387 83.1936H35.3226V78.6774H39.8387V83.1936ZM33.0645 83.1936H28.5484V78.6774H33.0645V83.1936ZM26.2903 83.1936H21.7742V78.6774H26.2903V83.1936ZM21.7742 85.4516H26.2903V89.9677H21.7742V85.4516ZM21.7742 92.2258H26.2903V96.7419H21.7742V92.2258ZM42.0968 96.7419V76.4194H19.5161V96.7419H17.2581V74.1613H44.3548V96.7419H42.0968ZM44.2645 67.3871C44.0206 65.6913 43.2416 64.166 42.0968 62.9963V62.871H57.9032V78.6774L55.6452 81.6885V96.7419H46.6129V67.3871H44.2645ZM82.7419 96.7419H71.4516V81.6885L69.1936 78.6774V71.7531L82.7419 69.8179V96.7419Z"
                                fill="#FD8F14"/>
                            <path d="M48.871 65.129H51.129V67.3871H48.871V65.129Z" fill="#FD8F14"/>
                            <path d="M48.871 92.2258H51.129V94.4839H48.871V92.2258Z" fill="#FD8F14"/>
                            <path d="M48.871 69.6452H51.129V71.9032H48.871V69.6452Z" fill="#FD8F14"/>
                            <path d="M48.871 87.7097H51.129V89.9677H48.871V87.7097Z" fill="#FD8F14"/>
                            <path d="M48.871 78.6774H51.129V80.9355H48.871V78.6774Z" fill="#FD8F14"/>
                            <path d="M48.871 74.1613H51.129V76.4194H48.871V74.1613Z" fill="#FD8F14"/>
                            <path d="M48.871 83.1936H51.129V85.4516H48.871V83.1936Z" fill="#FD8F14"/>
                            <path d="M53.3871 74.1613H55.6452V76.4194H53.3871V74.1613Z" fill="#FD8F14"/>
                            <path d="M53.3871 69.6452H55.6452V71.9032H53.3871V69.6452Z" fill="#FD8F14"/>
                            <path d="M53.3871 65.129H55.6452V67.3871H53.3871V65.129Z" fill="#FD8F14"/>
                            <path d="M78.2258 92.2258H80.4839V94.4839H78.2258V92.2258Z" fill="#FD8F14"/>
                            <path d="M78.2258 83.1936H80.4839V85.4516H78.2258V83.1936Z" fill="#FD8F14"/>
                            <path d="M78.2258 87.7097H80.4839V89.9677H78.2258V87.7097Z" fill="#FD8F14"/>
                            <path d="M78.2258 78.6774H80.4839V80.9355H78.2258V78.6774Z" fill="#FD8F14"/>
                            <path d="M78.2258 74.1613H80.4839V76.4194H78.2258V74.1613Z" fill="#FD8F14"/>
                            <path d="M73.7097 87.7097H75.9677V89.9677H73.7097V87.7097Z" fill="#FD8F14"/>
                            <path d="M73.7097 74.1613H75.9677V76.4194H73.7097V74.1613Z" fill="#FD8F14"/>
                            <path d="M73.7097 83.1936H75.9677V85.4516H73.7097V83.1936Z" fill="#FD8F14"/>
                            <path d="M73.7097 92.2258H75.9677V94.4839H73.7097V92.2258Z" fill="#FD8F14"/>
                            <path d="M73.7097 78.6774H75.9677V80.9355H73.7097V78.6774Z" fill="#FD8F14"/>
                            <path d="M39.8387 44.8065H42.0968V47.0645H39.8387V44.8065Z" fill="#FD8F14"/>
                            <path d="M35.3226 44.8065H37.5806V47.0645H35.3226V44.8065Z" fill="#FD8F14"/>
                            <path d="M26.2903 44.8065H28.5484V47.0645H26.2903V44.8065Z" fill="#FD8F14"/>
                            <path d="M30.8065 44.8065H33.0645V47.0645H30.8065V44.8065Z" fill="#FD8F14"/>
                            <path d="M30.8065 49.3226H33.0645V51.5806H30.8065V49.3226Z" fill="#FD8F14"/>
                            <path d="M39.8387 49.3226H42.0968V51.5806H39.8387V49.3226Z" fill="#FD8F14"/>
                            <path d="M26.2903 49.3226H28.5484V51.5806H26.2903V49.3226Z" fill="#FD8F14"/>
                            <path d="M35.3226 49.3226H37.5806V51.5806H35.3226V49.3226Z" fill="#FD8F14"/>
                            <path d="M26.2903 53.8387H28.5484V56.0968H26.2903V53.8387Z" fill="#FD8F14"/>
                            <path d="M30.8065 53.8387H33.0645V56.0968H30.8065V53.8387Z" fill="#FD8F14"/>
                            <path d="M35.3226 53.8387H37.5806V56.0968H35.3226V53.8387Z" fill="#FD8F14"/>
                            <path d="M69.1936 49.3226H71.4516V51.5806H69.1936V49.3226Z" fill="#FD8F14"/>
                            <path d="M64.6774 49.3226H66.9355V51.5806H64.6774V49.3226Z" fill="#FD8F14"/>
                            <path d="M60.1613 49.3226H62.4194V51.5806H60.1613V49.3226Z" fill="#FD8F14"/>
                            <path d="M69.1936 53.8387H71.4516V56.0968H69.1936V53.8387Z" fill="#FD8F14"/>
                            <path d="M60.1613 53.8387H62.4194V56.0968H60.1613V53.8387Z" fill="#FD8F14"/>
                            <path d="M64.6774 53.8387H66.9355V56.0968H64.6774V53.8387Z" fill="#FD8F14"/>
                            <path d="M64.6774 67.3871H66.9355V69.6452H64.6774V67.3871Z" fill="#FD8F14"/>
                            <path d="M64.6774 62.871H66.9355V65.129H64.6774V62.871Z" fill="#FD8F14"/>
                            <path d="M64.6774 58.3548H66.9355V60.6129H64.6774V58.3548Z" fill="#FD8F14"/>
                            <path d="M69.1936 62.871H71.4516V65.129H69.1936V62.871Z" fill="#FD8F14"/>
                            <path d="M69.1936 58.3548H71.4516V60.6129H69.1936V58.3548Z" fill="#FD8F14"/>
                        </svg>

                    </div>
                    <h5 class="title">residential plumbing</h5>
                    <p class="disc">
                        Air-source heat pump system that combines heating, cooling & heating solutions.
                    </p>
                    <a href="#" class="rts-btn btn-primary">Read More</a>
                </div>
                <!-- single solution end -->
            </div>
        </div>
    </div>
    <div class="rts-call-to-action-two rts-section-gap bg-cta-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-two-main-wrapper">
                        <div class="title-area-left">
                            <h2 class="title">
                                Ready To Experience Plumbing <br>
                                Work Difference?
                            </h2>
                        </div>
                        <div class="cta-button-area">
                            <a href="appoinment.html" class="rts-btn btn-primary">
                                Request Quote
                            </a>
                            <a href="contact.html" class="rts-btn btn-border">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts plumber solution area end -->

<!-- team section start -->
<div class="rts-team-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-center">
                    <p class="pre">
                        Quality Handyman Solution
                    </p>
                    <h2 class="title">
                        Working with excellent <br>
                        <span>Great Team</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt--10 g-24">
            <div class="col-lg-12">
                <div class="team-sc-main-swiper-wrapper">
                    <div class="swiper team-swiper-ac swiper-container-horizontal">
                        <div class="swiper-wrapper"
                             style="transform: translate3d(-2660px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1"
                                 style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/09.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">Oliver Henry</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                 style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/10.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">Daniel Joseph</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                 data-swiper-slide-index="3" style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/11.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">Holder Manic</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                 data-swiper-slide-index="4" style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/09.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">Daniel Joseph</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0"
                                 style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/08.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">William James</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="1"
                                 style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/09.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">Oliver Henry</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="2"
                                 style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/10.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">Daniel Joseph</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3"
                                 style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/11.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">Holder Manic</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="4"
                                 style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/09.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">Daniel Joseph</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next"
                                 data-swiper-slide-index="0" style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/08.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">William James</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1"
                                 style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/09.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">Oliver Henry</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                 style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/10.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">Daniel Joseph</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                 data-swiper-slide-index="3" style="width: 322.5px; margin-right: 10px;">
                                <!-- single team area start -->
                                <div class="rts-single-condition-team">
                                    <div class="thumbnail">
                                        <img src="{{ asset('frontend/images/team/11.jpg')}}" alt="team">
                                    </div>
                                    <div class="inner-content">
                                        <a href="team-details.html">Holder Manic</a>
                                        <span>AC Engineer</span>
                                    </div>
                                </div>
                                <!-- single team area end -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="fa-regular fa-arrow-right"></i></div>
                    <div class="swiper-button-prev"><i class="fa-regular fa-arrow-left"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
