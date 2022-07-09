<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- All CSS Links -->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/dist/output.css">

        <title>Togy - Tailwind Technology Startup Template</title>
        <link rel="icon" type="image/png" href="assets/img/favicon.png">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>

        @include('layouts._main-navigation')
        @include('layouts._main-mobile-navigation')

        {{ $slot }}

        
        <!-- Footer Area -->
        <footer class="footer-area pt-60 lg:pt-100 pb-60 lg:pb-100 relative z-1 bg-gray-gradient-color">
            <div class="container">
                <div class="grid gap-25 grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                    <div class="single-footer-widget">
                        <a href="index.html" class="logo inline-block mb-20 lg:mb-25">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                        <img src="assets/img/footer.png" alt="footer-image">
                    </div>
                    <div class="single-footer-widget md:pl-25">
                        <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-15 md:mb-20 lg:mb-25 text-black-color">
                            Services
                        </h3>
                        <ul>
                            <li class="mb-12 md:mb-15 lg:mb-20 last:mb-0">
                                <a href="services-details.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color relative before:absolute before:right-0 before:top-1/2 before:-translate-y-2/4 before:w-18 before:h-2 before:bg-secondary-color before:opacity-0 before:invisible hover:before:opacity-100 hover:before:visible pr-25">
                                    Web Design
                                </a>
                            </li>
                            <li class="mb-12 md:mb-15 lg:mb-20 last:mb-0">
                                <a href="services-details.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color relative before:absolute before:right-0 before:top-1/2 before:-translate-y-2/4 before:w-18 before:h-2 before:bg-secondary-color before:opacity-0 before:invisible hover:before:opacity-100 hover:before:visible pr-25">
                                    Web Development
                                </a>
                            </li>
                            <li class="mb-12 md:mb-15 lg:mb-20 last:mb-0">
                                <a href="services-details.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color relative before:absolute before:right-0 before:top-1/2 before:-translate-y-2/4 before:w-18 before:h-2 before:bg-secondary-color before:opacity-0 before:invisible hover:before:opacity-100 hover:before:visible pr-25">
                                    Social Marketing
                                </a>
                            </li>
                            <li class="mb-12 md:mb-15 lg:mb-20 last:mb-0">
                                <a href="services-details.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color relative before:absolute before:right-0 before:top-1/2 before:-translate-y-2/4 before:w-18 before:h-2 before:bg-secondary-color before:opacity-0 before:invisible hover:before:opacity-100 hover:before:visible pr-25">
                                    WordPress
                                </a>
                            </li>
                            <li class="mb-12 md:mb-15 lg:mb-20 last:mb-0">
                                <a href="services-details.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color relative before:absolute before:right-0 before:top-1/2 before:-translate-y-2/4 before:w-18 before:h-2 before:bg-secondary-color before:opacity-0 before:invisible hover:before:opacity-100 hover:before:visible pr-25">
                                    Content Writing
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="single-footer-widget">
                        <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-15 md:mb-20 lg:mb-25 text-black-color">
                            Quick Links
                        </h3>
                        <ul>
                            <li class="mb-12 md:mb-15 lg:mb-20 last:mb-0">
                                <a href="about.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color relative before:absolute before:right-0 before:top-1/2 before:-translate-y-2/4 before:w-18 before:h-2 before:bg-secondary-color before:opacity-0 before:invisible hover:before:opacity-100 hover:before:visible pr-25">
                                    About Us
                                </a>
                            </li>
                            <li class="mb-12 md:mb-15 lg:mb-20 last:mb-0">
                                <a href="portfolio.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color relative before:absolute before:right-0 before:top-1/2 before:-translate-y-2/4 before:w-18 before:h-2 before:bg-secondary-color before:opacity-0 before:invisible hover:before:opacity-100 hover:before:visible pr-25">
                                    Portfolio
                                </a>
                            </li>
                            <li class="mb-12 md:mb-15 lg:mb-20 last:mb-0">
                                <a href="pricing.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color relative before:absolute before:right-0 before:top-1/2 before:-translate-y-2/4 before:w-18 before:h-2 before:bg-secondary-color before:opacity-0 before:invisible hover:before:opacity-100 hover:before:visible pr-25">
                                    Pricing Plan
                                </a>
                            </li>
                            <li class="mb-12 md:mb-15 lg:mb-20 last:mb-0">
                                <a href="faq.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color relative before:absolute before:right-0 before:top-1/2 before:-translate-y-2/4 before:w-18 before:h-2 before:bg-secondary-color before:opacity-0 before:invisible hover:before:opacity-100 hover:before:visible pr-25">
                                    FAQ
                                </a>
                            </li>
                            <li class="mb-12 md:mb-15 lg:mb-20 last:mb-0">
                                <a href="index.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color relative before:absolute before:right-0 before:top-1/2 before:-translate-y-2/4 before:w-18 before:h-2 before:bg-secondary-color before:opacity-0 before:invisible hover:before:opacity-100 hover:before:visible pr-25">
                                    Download Apps
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="single-footer-widget md:-ml-35">
                        <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-15 md:mb-20 lg:mb-25 text-black-color">
                            Contact Us
                        </h3>
                        <ul>
                            <li class="mb-15 md:mb-15 lg:mb-20 text-optional-color last:mb-0 relative text-13px md:text-15px lg:text-16px pl-25">
                                <img src="assets/img/icon/phone-call.svg" class="absolute top-0 md:top-2 left-0" alt="icon">
                                <span class="font-medium text-black-color">Call Us:</span>
                                <a href="tel:+(323)750-1234" class="text-optional-color transition hover:text-secondary-color">+(323) 750-1234</a>
                            </li>
                            <li class="mb-15 md:mb-15 lg:mb-20 text-optional-color last:mb-0 relative text-13px md:text-15px lg:text-16px pl-25">
                                <img src="assets/img/icon/location-pin.svg" class="absolute top-0 md:top-2 left-0" alt="icon">
                                <span class="font-medium text-black-color">Address:</span>
                                <a href="#" target="_blank" class="text-optional-color transition hover:text-secondary-color">+7011 Vermont Ave, Los Angeles, CA 90044 </a>
                            </li>
                            <li class="mb-15 md:mb-15 lg:mb-20 text-optional-color last:mb-0 relative text-13px md:text-15px lg:text-16px pl-25">
                                <img src="assets/img/icon/email.svg" class="absolute top-0 md:top-2 left-0" alt="icon">
                                <span class="font-medium text-black-color">Mail Us:</span>
                                <a href="mailto:hello@togy.com" class="text-optional-color transition hover:text-secondary-color">hello@togy.com</a>
                            </li>
                        </ul>
                        <ul class="mt-15 md:mt-25">
                            <li class="inline-block mr-5 last:mr-0">
                                <a href="#" target="_blank" class="block w-35 rounded-full transition relative h-35 bg-[#4267B2] text-center hover:opacity-90">
                                    <img src="assets/img/social/white-facebook.svg" class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                                </a>
                            </li>
                            <li class="inline-block mr-5 last:mr-0">
                                <a href="#" target="_blank" class="block w-35 rounded-full transition relative h-35 bg-[#1DA1F2] text-center hover:opacity-90">
                                    <img src="assets/img/social/white-twitter.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                                </a>
                            </li>
                            <li class="inline-block mr-5 last:mr-0">
                                <a href="#" target="_blank" class="block w-35 rounded-full transition relative h-35 bg-[#2867B2] text-center hover:opacity-90">
                                    <img src="assets/img/social/white-linkedin.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                                </a>
                            </li>
                            <li class="inline-block mr-5 last:mr-0">
                                <a href="#" target="_blank" class="block w-35 rounded-full transition relative h-35 bg-instagram-gradient-color text-center hover:opacity-90">
                                    <img src="assets/img/social/white-instagram.svg" class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right-[7%] bottom-[6%] absolute -z-1 hidden lg:inline"><img src="assets/img/shape/shape15.png" class="animate-custom-rotateme" alt="shape"></div>
        </footer>
        <!-- End Footer Area -->

        <!-- Copyright Area -->
        <div class="copyright-area pt-25 md:pt-35 pb-25 md:pb-35 text-center lg:text-left">
            <div class="container">
                <div class="grid gap-5 md:gap-25 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                    <div class="copyright">
                        <p class="text-13px md:text-15px lg:text-16px text-optional-color">&copy;2022 <span class="font-semibold text-primary-color">Togy</span>. All rights reserved by <a href="https://envytheme.com/" class="font-semibold bg-primary-gradient-color" target="_blank">EnvyTheme</a></p>
                    </div>
                    <div class="copyright-info self-center">
                        <ul class="lg:text-right">
                            <li class="inline-block mr-15 md:mr-20 lg:mr-25 last:mr-0 mt-10 md:mt-0">
                                <a href="privacy-policy.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="inline-block mr-15 md:mr-20 lg:mr-25 last:mr-0 mt-10 md:mt-0">
                                <a href="privacy-policy.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color">
                                    Security
                                </a>
                            </li>
                            <li class="inline-block mr-15 md:mr-20 lg:mr-25 last:mr-0 mt-10 md:mt-0">
                                <a href="terms-conditions.html" class="inline-block text-optional-color text-13px md:text-15px lg:text-16px transition hover:text-secondary-color">
                                    Terms & Conditions
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->


        <!-- Go Top -->
        <div class="progress-wrap bg-white rounded-full block z-50 cursor-pointer fixed w-[3rem] h-[3rem] right-24 bottom-24 opacity-0 invisible">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-center m-auto absolute left-0 right-0 top-1/2 -translate-y-2/4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18" />
            </svg>
        </div>

        <!-- All JS Links -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>