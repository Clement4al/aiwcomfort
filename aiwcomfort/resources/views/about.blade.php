<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Aiwcomfort</title>
    <!-- Theme favicon -->
    <link rel="icon" type="image/x-icon" href="/greencart/assets/favicon-712e565d.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- Head js -->
    <script type="module" crossorigin src="/greencart/assets/navigation-a8a85143.js"></script>
    <script type="module" crossorigin src="/greencart/assets/free-mode-f21240fb.js"></script>
    <script type="module" crossorigin src="/greencart/assets/home-467f158b.js"></script>
    <script type="module" src="{{ asset('greencart/assets/theme-9c065fc6.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('greencart/assets/theme-ecf0ae99.css') }}">
</head>

<body>
<!-- Top Small Navbar Menu -->
<div class="z-20 hidden h-8 items-center bg-default-100 lg:flex">
    <div class="container">
        <div class="flex items-center justify-between gap-4">
            <ul class="flex items-center justify-end gap-4">
                <li class="menu-item flex"></li>
                <li><span class="hidden h-4 w-px bg-default-400 lg:flex"></span></li>
                <li class="menu-item flex"></li>
            </ul>

            <div class="flex items-center">
                <ul class="flex items-center justify-end gap-4">
                    <li class="menu-item flex">
                        <a class="text-xs font-medium text-default-700 transition-all hover:text-primary" href="#">Help & Contact</a>
                    </li>
                    <li><span class="hidden h-4 w-px bg-default-400 lg:flex"></span></li>
                    <li class="menu-item flex"><a class="text-xs font-semibold text-default-800 transition-all hover:text-primary" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Navbar  -->
<header class="fixed top-0 z-40 flex w-full items-center border-b border-default-100 bg-white transition-all duration-300 dark:bg-default-50 lg:top-8 [&.nav-sticky]:top-0 [&.nav-sticky]:shadow" id="navbar">
    <nav class="container flex h-16 items-center justify-between gap-4">
        <div class="flex items-center gap-4">
            <!-- Mobile Menu Toggle Button -->
            <button class="block lg:hidden" data-hs-overlay="#mobile-menu">
                <i class="ti ti-menu-2 text-2xl"></i>
            </button>

            <!-- Navbar Brand Logo -->
            <a href="home.html">
                <img src="{{asset('greencart/assets/newlogo1.png')}}" class="flex h-10 dark:hidden lg:h-12" alt="Brand Logo" />
                <img src="{{asset('greencart/assets/newlogo.png')}}" class="hidden h-10 dark:flex lg:h-12" alt="Brand Logo" />
            </a>
        </div>
        <!-- Nevigation Menu -->
        <div class="relative mx-auto hidden flex-grow lg:block">
            <ul class="menu flex items-center justify-center">
                <!-- Home Menu -->
                <li class="menu-item">
                    <div class="hs-dropdown relative inline-flex [--trigger:hover]">
                        <a class="hs-dropdown-toggle inline-flex items-center rounded-full px-4 py-2 text-sm font-medium text-default-700 after:absolute after:inset-0 hover:text-primary hover:after:-bottom-10 lg:text-base" href="#">
                            Home
                        </a>
                    </div>
                </li>

                <!-- Product Menu -->
                <li class="menu-item">
                    <div class="hs-dropdown relative inline-flex [--placement:bottom] [--trigger:hover]">
                        <a class="hs-dropdown-toggle inline-flex items-center rounded-full px-4 py-2 text-sm font-medium text-default-700 after:absolute after:inset-0 hover:text-primary hover:after:-bottom-10 lg:text-base" href="#">
                           Our Products
                        </a>
                    </div>
                </li>
                <!-- Mega Menu -->
                <li class="menu-item">
                    <div class="hs-dropdown relative inline-flex [--trigger:hover] [--auto-close:inside]">
                        <a class="hs-dropdown-toggle inline-flex items-center whitespace-nowrap rounded-full px-4 py-2 text-sm font-medium text-default-700 after:absolute after:inset-0 hover:text-primary hover:after:-bottom-10 lg:text-base" href="#">
                            About Us
                        </a>
                    </div>
                </li>
                <!-- Contact us Link -->
                <li class="menu-item">
                    <div class="flex items-center">
                        <a class="inline-flex items-center rounded-full px-4 py-2 text-sm font-medium text-default-700 hover:text-primary lg:text-base" href="pages-contact.html">Contact Us</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Nav Link -->
        <ul class="flex items-center justify-center gap-4">
            <li class="menu-item flex lg:hidden">
                <a href="#" data-hs-overlay="#search-drawer" class="relative inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary">
                    <i class="ti ti-search text-xl"></i>
                </a>
            </li>

{{--            <li class="menu-item flex">--}}
{{--                <a href="pages-cart.html" class="relative inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary">--}}
{{--                    <i class="ti ti-shopping-bag text-xl"></i>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li class="menu-item hidden lg:flex">
                <div class="hs-dropdown relative inline-flex [--placement:bottom-right] [--trigger:hover]">
                    <a class="hs-dropdown-toggle inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all after:absolute after:inset-0 hover:text-primary hover:after:-bottom-10" href="#">
                        <i class="ti ti-user text-xl"></i>
                    </a>

                    <div class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] overflow-hidden rounded-lg border border-default-100 bg-white pb-1.5 opacity-0 shadow transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
                        <ul class="flex flex-col gap-1">
                            <li class="border-b border-dashed border-default-200 bg-primary/10 p-4">
                                <a href="account-profile.html" class="flex items-center gap-4">
                                    <div class="relative">
                                        <div class="rounded-full bg-default-200">
                                            <img src="/greencart/assets/1-f1564e7c.png" alt="" class="h-10 w-10 rounded-full" />
                                        </div>
                                        <span class="absolute end-0 top-0 h-3 w-3 rounded-full border-2 border-white bg-green-400 dark:border-default-50">
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="text-base text-primary">Clement Michael</h6>
                                        <small class="text-primary/80">admin</small>
                                    </div>
                                </a>
                            </li>
                            <li class="px-1.5">
                                <a class="flex items-center rounded-md px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="account-profile.html"><i class="ti ti-user-circle me-2 text-lg"></i> My Account</a>
                            </li>
                            <li class="px-1.5">
                                <a class="flex items-center rounded-md px-3 py-2 font-normal text-default-600 transition-all hover:bg-default-100 hover:text-default-700" href="pages-cart.html"><i class="ti ti-shopping-cart me-2 text-lg"></i> Cart</a>
                            </li>
                            <li class="px-1.5">
                                <a class="flex items-center rounded-md px-3 py-2 font-normal text-default-600 transition-all hover:bg-red-500/10 hover:text-red-500" href="auth-login.html"><i class="ti ti-logout-2 me-2 text-lg"></i> Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</header>

<!-- Navbar -->
<div class="mt-16">
    <div class="hidden h-16 items-center border-b border-default-100 bg-white dark:bg-default-50 lg:flex">
        <div class="container">
            <div class="flex items-center gap-4 whitespace-nowrap">
                <div class="hs-dropdown flex [--trigger:hover]">
                    <a href="#" class="hs-dropdown-toggle relative flex items-center gap-2 rounded-md bg-primary/10 px-4 py-2.5 text-base font-semibold text-primary transition-all duration-300 after:absolute after:inset-x-0 after:-bottom-3 after:top-0 hover:bg-primary hover:text-white">
                        <i class="ti ti-layout-grid text-xl/none"></i>
                        <span>Browse All Categories</span>
                        <i class="ti ti-chevron-down"></i>
                    </a>

                    <div class="hs-dropdown-menu z-10 mt-4 hidden min-w-[260px] rounded-b-lg border border-t-0 border-default-100 bg-white opacity-0 shadow transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
                        <div class="divide-y divide-default-100">
                            <a class="flex items-center gap-3 px-4 py-2.5 font-normal text-default-600 transition-all hover:bg-primary/10 hover:text-primary" href="#"><i class="ti ti-shopping-cart text-lg"></i> Gaming Tables
                                <i class="ti ti-chevron-right ms-auto"></i></a>
                            <a class="flex items-center gap-3 px-4 py-2.5 font-normal text-default-600 transition-all hover:bg-primary/10 hover:text-primary" href="#"><i class="ti ti-bread text-lg"></i> Gaming Chairs
                                <i class="ti ti-chevron-right ms-auto"></i></a>

                        </div>
                    </div>
                </div>
                <!-- End Select -->

                <form class="relative mx-auto flex min-w-80">
                    <input id="data-input" type="search" placeholder="Search for items..." class="w-full rounded-lg border-none bg-default-100 py-3 pe-6 ps-12 text-sm text-default-900 transition placeholder:text-default-600 focus:outline-none focus:ring-transparent" />
                    <button type="button" aria-label="Click here to search input data" class="absolute inset-y-0 start-2 z-10 flex h-full w-10 shrink-0 cursor-default items-center justify-center focus:outline-none">
                        <i data-lucide="search" class="h-5 w-5"></i>
                    </button>
                </form>

                <div class="flex">
                    <a href="tel:+XXXXXXXX" class="flex items-center gap-2">
                        <i class="ti ti-headset text-4xl text-default-600"></i>
                        <div>
                            <h4 class="text-xl font-medium text-primary">+234 915 768 8075 </h4>
                            <p class="text-xs font-medium text-default-600">
                                24/7 Support Center
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Sidebar Menu -->
<div id="mobile-menu" class="hs-overlay fixed left-0 top-0 z-60 hidden h-full w-full max-w-[270px] -translate-x-full transform border-e border-e-default-200 bg-white transition-all hs-overlay-open:translate-x-0 dark:bg-default-50" tabindex="-1">
    <div class="flex h-16 items-center justify-center border-b border-dashed border-b-default-200 transition-all duration-300">
        <a href="home.html">
            <img src="{{asset('greencart/assets/newlogo1.png')}}" class="flex h-10 dark:hidden lg:h-12" alt="Brand Logo" />
            <img src="{{asset('greencart/assets/newlogo.png')}}" class="hidden h-10 dark:flex lg:h-12" alt="Brand Logo" />
        </a>
    </div>

    <div data-simplebar class="h-[calc(100%-4rem)] overflow-y-auto">
        <nav class="hs-accordion-group flex w-full flex-col flex-wrap p-4">
            <ul class="admin-menu flex w-full flex-col gap-1.5">
                <li class="menu-item hs-accordion">
                    <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                        <i class="ti ti-smart-home text-xl"></i>
                        Home
                        <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                    </a>

                    <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"></div>
                </li>

                <li class="menu-item hs-accordion">
                    <a href="pages-cart.html" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                        <i class="ti ti-list-details text-xl"></i>
                        Our Products
                        <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                    </a>
                    <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    </div>
                </li>


                    <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                        <ul class="mt-2 flex flex-col gap-2">
                            <li class="menu-item">
                                <a href="pages-cart.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                    <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                    Cart
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-checkout.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                    <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                    Checkout
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-wishlist.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                    <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                    Wishlist
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-faqs.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                    <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                    FAQs
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-404.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                    <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                    Error 404
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item">
                    <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="pages-contact.html">
                        <i class="ti ti-phone-call text-xl"></i>
                        Contact Us
                    </a>
                </li>

                <li class="px-4 py-2 text-sm font-medium text-default-600">Account</li>

                <li class="menu-item">
                    <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="account-profile.html">
                        <i class="ti ti-user-circle text-xl"></i>
                        Personal Info
                    </a>
                </li>

{{--                <li class="menu-item hs-accordion" id="mobile-menu-order">--}}
{{--                    <a href="javascript:void(0)" class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">--}}
{{--                        <i class="ti ti-box text-xl"></i>--}}
{{--                        My Orders--}}
{{--                        <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>--}}
{{--                    </a>--}}

{{--                    <div id="mobile-menu-order" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">--}}
{{--                        <ul class="mt-2 flex flex-col gap-2">--}}
{{--                            <li class="menu-item">--}}
{{--                                <a href="account-order-list.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">--}}
{{--                                    <i class="ti ti-circle-filled scale-[.25] text-lg"></i>--}}
{{--                                    Order List--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="menu-item">--}}
{{--                                <a href="account-order-details.html" class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">--}}
{{--                                    <i class="ti ti-circle-filled scale-[.25] text-lg"></i>--}}
{{--                                    Order Detail--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

                <li class="menu-item">
                    <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="account-address.html">
                        <i class="ti ti-map-pin text-xl"></i>
                        My Addresses
                    </a>
                </li>

{{--                <li class="menu-item">--}}
{{--                    <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="account-wallet.html">--}}
{{--                        <i class="ti ti-wallet text-xl"></i>--}}
{{--                        Wallet--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="menu-item">
                    <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="account-settings.html">
                        <i class="ti ti-settings text-xl"></i>
                        Settings
                    </a>
                </li>

                <li class="menu-item">
                    <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-collapse-open:bg-default-100" href="auth-login.html">
                        <i class="ti ti-user text-xl"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Mobile Search Drawer -->
<div id="search-drawer" class="hs-overlay fixed inset-x-0 bottom-0 z-60 hidden h-full w-full max-w-full translate-y-full transform bg-white transition-all duration-300 hs-overlay-open:translate-y-0 dark:bg-default-50" tabindex="-1">
    <div class="flex h-16 items-center justify-between gap-4 border-b border-dashed border-default-200 px-4 transition-all duration-300">
        <button type="button" class="inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary" data-hs-overlay="#search-drawer">
            <i class="ti ti-x text-xl"></i>
        </button>

        <form class="relative mx-auto flex w-full">
            <input id="data-input" type="search" placeholder="Search for items..." class="w-full rounded-lg border-none bg-default-100 py-3 pe-6 ps-12 text-sm text-default-900 transition placeholder:text-default-600 focus:outline-none focus:ring-transparent" />
            <button type="button" aria-label="Click here to search input data" class="absolute inset-y-0 start-2 z-10 flex h-full w-10 shrink-0 cursor-default items-center justify-center focus:outline-none">
                <i data-lucide="search" class="h-5 w-5"></i>
            </button>
        </form>
    </div>

{{--    <div class="">--}}
{{--        <div class="p-4 lg:p-8">--}}
{{--            <h4 class="text-base font-medium text-default-900">Recent</h4>--}}
{{--        </div>--}}
{{--        <div class="mb-4 px-4 pb-4">--}}
{{--            <div class="flex flex-col gap-2">--}}
{{--                <div id="close" class="flex items-center gap-2 rounded-md bg-default-100 px-4 py-3">--}}
{{--                    <i class="ti ti-clock shrink text-lg text-default-700"></i>--}}
{{--                    <span class="inline-block grow text-base font-medium text-default-700 transition-all hover:text-default-900">Fruits</span>--}}
{{--                    <div class="flex items-center gap-2">--}}
{{--                        <a href="#">--}}
{{--                            <i class="ti ti-arrow-up-right-circle align-middle text-lg text-default-700 transition-all hover:text-default-950"></i>--}}
{{--                        </a>--}}
{{--                        <span class="shrink" data-hs-remove-element="#close" role="button">--}}
{{--                <i class="ti ti-x align-middle text-lg text-default-700 hover:text-red-500"></i>--}}
{{--              </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div id="close-two" class="flex items-center gap-2 rounded-md bg-default-100 px-4 py-3">--}}
{{--                    <i class="ti ti-clock shrink text-lg text-default-700"></i>--}}
{{--                    <span class="inline-block grow text-base font-medium text-default-700 transition-all hover:text-default-900">Fresh Vegetables</span>--}}
{{--                    <div class="flex items-center gap-2">--}}
{{--                        <a href="#">--}}
{{--                            <i class="ti ti-arrow-up-right-circle align-middle text-lg text-default-700 transition-all hover:text-default-950"></i>--}}
{{--                        </a>--}}
{{--                        <span class="shrink" data-hs-remove-element="#close-two" role="button">--}}
{{--                <i class="ti ti-x align-middle text-lg text-default-700 hover:text-red-500"></i>--}}
{{--              </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div id="close-three" class="flex items-center gap-2 rounded-md bg-default-100 px-4 py-3">--}}
{{--                    <i class="ti ti-clock shrink text-lg text-default-700"></i>--}}
{{--                    <span class="inline-block grow text-base font-medium text-default-700 transition-all hover:text-default-900">Nuts And Berries</span>--}}
{{--                    <div class="flex items-center gap-2">--}}
{{--                        <a href="#">--}}
{{--                            <i class="ti ti-arrow-up-right-circle align-middle text-lg text-default-700 transition-all hover:text-default-950"></i>--}}
{{--                        </a>--}}
{{--                        <span class="shrink" data-hs-remove-element="#close-three" role="button">--}}
{{--                <i class="ti ti-x align-middle text-lg text-default-700 hover:text-red-500"></i>--}}
{{--              </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div id="close-four" class="flex items-center gap-2 rounded-md bg-default-100 px-4 py-3">--}}
{{--                    <i class="ti ti-clock shrink text-lg text-default-700"></i>--}}
{{--                    <span class="inline-block grow text-base font-medium text-default-700 transition-all hover:text-default-900">Best Instructors</span>--}}
{{--                    <div class="flex items-center gap-2">--}}
{{--                        <a href="#">--}}
{{--                            <i class="ti ti-arrow-up-right-circle align-middle text-lg text-default-700 transition-all hover:text-default-950"></i>--}}
{{--                        </a>--}}
{{--                        <span class="shrink" data-hs-remove-element="#close-four" role="button">--}}
{{--                <i class="ti ti-x align-middle text-lg text-default-700 hover:text-red-500"></i>--}}
{{--              </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div id="close-five" class="flex items-center gap-2 rounded-md bg-default-100 px-4 py-3">--}}
{{--                    <i class="ti ti-clock shrink text-lg text-default-700"></i>--}}
{{--                    <span class="inline-block grow text-base font-medium text-default-700 transition-all hover:text-default-900">Contact</span>--}}
{{--                    <div class="flex items-center gap-2">--}}
{{--                        <a href="#">--}}
{{--                            <i class="ti ti-arrow-up-right-circle align-middle text-lg text-default-700 transition-all hover:text-default-950"></i>--}}
{{--                        </a>--}}
{{--                        <span class="shrink" data-hs-remove-element="#close-five">--}}
{{--                <i class="ti ti-x align-middle text-lg text-default-700 hover:text-red-500"></i>--}}
{{--              </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    --}}
</div>
<!-- Mobile Navbar (Bottom Menu) -->
<div class="menu fixed inset-x-0 bottom-0 z-40 lg:hidden">
    <div class="grid h-16 w-full grid-cols-4 items-center border border-default-200 bg-white dark:bg-default-50">
        <a class="flex flex-col items-center justify-center gap-1 text-default-600" href="home.html">
            <i class="ti ti-shopping-bag text-xl"></i>
            <span class="text-xs font-medium tracking-wide sm:text-sm">Home</span>
        </a>
        <a class="flex flex-col items-center justify-center gap-1 text-default-600" href="products-grid.html">
            <i class="ti ti-layout-2 text-xl"></i>
            <span class="text-xs font-medium tracking-wide sm:text-sm">Categories</span>
        </a>
        <a class="flex flex-col items-center justify-center gap-1 text-default-600" href="pages-wishlist.html">
            <i class="ti ti-heart text-xl"></i>
            <span class="text-xs font-medium tracking-wide sm:text-sm">Wishlist</span>
        </a>
        <a class="flex flex-col items-center justify-center gap-1 text-default-600" href="account-profile.html">
            <i class="ti ti-user-circle text-xl"></i>
            <span class="text-xs font-medium tracking-wide sm:text-sm">Profile</span>
        </a>
    </div>
</div>

{{--<section class="md:bg-right-bottom bg-cover bg-[url({{ asset('greencart/assets/hero.png') }})]">--}}
    <section
        class="md:bg-right-bottom bg-cover"
        style="background-image: url('{{ asset('greencart/assets/hero1.png') }}')"
    >
    <div class="container">
        <div class="max-w-3xl py-20 lg:py-40">
            <h3 class="text-[40px] leading-snug font-semibold text-white mb-4">Experience Next Level Comfort <br>
                With Modern Gaming Chairs!
            </h3>
            <p class="text-base/relaxed text-zinc-100">Say goodbye to back pain and stiffness. Our ergonomic gaming chairs/tables support your spine and posture, letting you game longer without discomfort!</p>

            <div class="flex flex-wrap items-center gap-6 mt-8">
                <button type="button" class="p-1 pe-4 flex items-center justify-center gap-2 rounded-2xl border border-b-2 border-primary-600 text-white bg-primary-600 backdrop-blur-xl hover:text-white hover:border-primary-700 hover:bg-primary-700 drop-shadow-lg transition-all duration-300 group">
            <span class="h-10 w-10 flex items-center justify-center bg-white/40 backdrop-blur-xl rounded-xl text-white group-hover:bg-white/20 transition-all duration-300">
              <i class="ti ti-shopping-bag text-xl"></i>
            </span>
                    <span class="text-base font-semibold">Discover Store</span>
                </button>

                <span class="inline-flex items-center gap-2 text-base text-zinc-200 border-b border-dashed border-zinc-200"><i class="ti ti-circle-filled text-[10px]"></i> Over 4800 New Products Available</span>
            </div>
        </div>
    </div>
</section>

<section class="lg:py-10 py-3">
    <div class="container overflow-hidden">
        <div class="flex items-center justify-between">
            <h4 class="text-2xl font-semibold text-default-800">Top Selling Products</h4>
        </div>
        {{--  product 1  --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 gap-6 mt-5">
            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <div class="absolute top-0 start-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                        </div>
                        <div class="absolute top-0 end-0">

                        </div>
                        <img src="{{ asset('greencart/chair2.png') }}" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4 whitespace-nowrap">
                    <div class="mb-4">
                        <a href="https://wa.me/2349157688075" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Footrest_green/white</a>
                    </div>
                    <div class="flex items-center justify-between gap-2 mb-4">
              <span class="flex items-center gap-2">
{{--                <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>--}}
                <span class="text-default-400 text-base line-through">₦215,000</span>
              </span>
                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">₦205,000</h4>
                        <a href="https://wa.me/2349157688075" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div>
            <!-- end card -->

            {{--product 2--}}
            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <div class="absolute top-0 end-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                        <img src="{{ asset('greencart/chair3.png') }}" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4 whitespace-nowrap">
                    <div class="mb-4">
                        <a href="https://wa.me/2349157688075" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Footrest_Black</a>
                    </div>
                    <div class="flex items-center justify-between gap-2 mb-4">
              <span class="flex items-center gap-2">
{{--                <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>--}}
                <span class="text-default-400 text-base line-through">₦215,000</span>
              </span>
                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">₦205,000</h4>
                        <a href="https://wa.me/2349157688075" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <div class="absolute top-0 start-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                        </div>
                        <img src="{{ asset('greencart/chair4.png') }}" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4 whitespace-nowrap">
                    <div class="mb-4">
                        <a href="https://wa.me/2349157688075" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Footrest_Black</a>
                    </div>
                    <div class="flex items-center justify-between gap-2 mb-4">
              <span class="flex items-center gap-2">
{{--                <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>--}}
                <span class="text-default-400 text-base line-through">₦215,000</span>
              </span>
                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">₦206,000</h4>
                        <a href="https://wa.me/2349157688075" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="{{ asset('greencart/chair6.png') }}" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4 whitespace-nowrap">
                    <div class="mb-4">
                        <a href="https://wa.me/2349157688075" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Footrest_Blue|Black</a>
                    </div>
                    <div class="flex items-center justify-between gap-2 mb-4">
              <span class="flex items-center gap-2">
{{--                <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>--}}
                <span class="text-default-400 text-base line-through">₦215,000</span>
              </span>
                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">₦205,000</h4>
                        <a href="https://wa.me/2349157688075" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="{{ asset('greencart/chair5.png') }}" alt="" class="w-full h-full">
                        <div class="absolute top-0 end-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4 whitespace-nowrap">
                    <div class="mb-4">
                        <a href="https://wa.me/2349157688075" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Footrest_Black|Camo</a>
                    </div>
                    <div class="flex items-center justify-between gap-2 mb-4">
              <span class="flex items-center gap-2">
{{--                <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>--}}
                <span class="text-default-400 text-base line-through">₦215,000</span>
              </span>
                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">₦206,000</h4>
                        <a href="https://wa.me/2349157688075" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/greencart/assets/6-fc45c68a.png" alt="" class="w-full h-full">
                        <div class="absolute top-0 start-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Footrest_green/black</span>
                        </div>
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="product-detail.html" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Footrest_green/black</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
              <span class="flex items-center gap-2">
                <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                <span class="text-sm text-default-950 from-inherit">4.9</span>
              </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$74 <span class="text-default-400 text-base line-through">$89</span> </h4>
                        <a href="pages-cart.html" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/greencart/assets/7-e9f364dd.png" alt="" class="w-full h-full">
                        <div class="absolute top-0 start-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                        </div>
                        <div class="absolute top-0 end-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="product-detail.html" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Avocado</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
              <span class="flex items-center gap-2">
                <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                <span class="text-sm text-default-950 from-inherit">4.6</span>
              </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$46 <span class="text-default-400 text-base line-through">$89</span> </h4>
                        <a href="pages-cart.html" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/greencart/assets/8-f4839df5.png" alt="" class="w-full h-full">
                        <div class="absolute top-0 end-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="product-detail.html" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Chicken Meat</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
              <span class="flex items-center gap-2">
                <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                <span class="text-sm text-default-950 from-inherit">4.3</span>
              </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$59</h4>
                        <a href="pages-cart.html" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/greencart/assets/9-c7fc9593.png" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="product-detail.html" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Watermelon</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
              <span class="flex items-center gap-2">
                <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                <span class="text-sm text-default-950 from-inherit">4.3</span>
              </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$42</h4>
                        <a href="pages-cart.html" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/greencart/assets/11-59ae3153.png" alt="" class="w-full h-full">
                        <div class="absolute top-0 start-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                        </div>
                        <div class="absolute top-0 end-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="product-detail.html" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Kiwi</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
              <span class="flex items-center gap-2">
                <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                <span class="text-sm text-default-950 from-inherit">4.3</span>
              </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement>
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input>
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment>
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$68 <span class="text-default-400 text-base line-through">$77</span> </h4>
                        <a href="pages-cart.html" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->
        </div><!-- end grid -->
    </div><!-- end container -->
</section>

<section class="lg:py-10 py-3">
    <div class="container">
        <div class="flex items-center justify-between">
            <h4 class="text-2xl font-semibold text-default-800">Curated collections</h4>
        </div>

        <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-6 mt-4">
            <div class="flex flex-col group border border-default-200 rounded-xl duration-500 hover:border-primary">
                <div class="rounded-lg overflow-hidden mx-2 mt-2">
                    <img src="/greencart/assets/1-a3071da8.png" class="object-cover transition duration-300 ease-in-out transform group-hover:opacity-90 group-hover:scale-105" />
                </div>
                <div class="flex flex-col items-start p-4">
                    <h2 class="text-lg font-semibold mb-2 line-clamp-1 text-default-900">Quench your summer thirst anytime, anywhere.</h2>
                    <p class="text-base line-clamp-1 text-default-600 mb-4">Your body's way of telling you that it's make strong</p>
                    <a href="#" class="group relative inline-flex items-center gap-2 font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn More <i class="ti ti-arrow-narrow-right text-xl/none align-middle"></i></a>
                </div>
            </div>
            <div class="flex flex-col group border border-default-200 rounded-xl duration-500 hover:border-primary">
                <div class="rounded-lg overflow-hidden mx-2 mt-2">
                    <img src="/greencart/assets/2-6a69d572.png" class="object-cover transition duration-300 ease-in-out transform group-hover:opacity-90 group-hover:scale-105" />
                </div>
                <div class="flex flex-col items-start p-4">
                    <h2 class="text-lg font-semibold mb-2 line-clamp-1 text-default-900">The top choice among fast food favorites.</h2>
                    <p class="text-base line-clamp-1 text-default-600 mb-4">A crowd favorite, reigning supreme in the realm of fast food delights.</p>
                    <a href="#" class="group relative inline-flex items-center gap-2 font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn More <i class="ti ti-arrow-narrow-right text-xl/none align-middle"></i></a>
                </div>
            </div>
            <div class="flex flex-col group border border-default-200 rounded-xl duration-500 hover:border-primary">
                <div class="rounded-lg overflow-hidden mx-2 mt-2">
                    <img src="/greencart/assets/3-a97eec19.png" class="object-cover transition duration-300 ease-in-out transform group-hover:opacity-90 group-hover:scale-105" />
                </div>
                <div class="flex flex-col items-start p-4">
                    <h2 class="text-lg font-semibold mb-2 line-clamp-1 text-default-900">The top choice among vegetables.</h2>
                    <p class="text-base line-clamp-1 text-default-600 mb-4">Savor the true essence of Japanese cuisine with our authentic flavors.</p>
                    <a href="#" class="group relative inline-flex items-center gap-2 font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn More <i class="ti ti-arrow-narrow-right text-xl/none align-middle"></i></a>
                </div>
            </div>
            <div class="flex flex-col group border border-default-200 rounded-xl duration-500 hover:border-primary">
                <div class="rounded-lg overflow-hidden mx-2 mt-2">
                    <img src="/greencart/assets/5-20da0dd6.png" class="object-cover transition duration-300 ease-in-out transform group-hover:opacity-90 group-hover:scale-105" />
                </div>
                <div class="flex flex-col items-start p-4">
                    <h2 class="text-lg font-semibold mb-2 line-clamp-1 text-default-900">Discover our fresh family of foods.</h2>
                    <p class="text-base line-clamp-1 text-default-600 mb-4">Indulge in freshness with our delectable food selection.</p>
                    <a href="#" class="group relative inline-flex items-center gap-2 font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn More <i class="ti ti-arrow-narrow-right text-xl/none align-middle"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lg:py-10 py-3">
    <div class="container">
        <div class="relative">
            <div class="swiper" id="discount-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="relative h-full bg-no-repeat bg-cover bg-[url(../images/banner/banner-11.jpg)] rounded-xl overflow-hidden p-10">
                            <div class="absolute inset-0 bg-black/60 md:bg-black/40"></div>
                            <div class="relative">
                                <h3 class="text-3xl/snug italic text-white font-semibold max-w-xl line-clamp-2">Enjoy a fantastic 40% discount for incredible savings!</h3>
                                <p class="text-base font-medium text-white/80 max-w-lg mt-4 mb-8">We meticulously source and offer premium-quality beef, lamb, and pork, carefully selected from dedicated farmers.</p>
                                <a href="#" class="py-2 px-5 inline-flex items-center justify-center gap-1 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-zinc-100 hover:bg-zinc-200 border-zinc-100 hover:border-zinc-200 text-zinc-900 rounded-md">Explore More <i class="ti ti-arrow-narrow-right text-lg/none"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative h-full bg-no-repeat bg-cover bg-[url(../images/banner/banner-1.png)] rounded-xl overflow-hidden p-10">
                            <div class="absolute inset-0 bg-black/60 md:bg-black/40"></div>
                            <div class="relative">
                                <h3 class="text-3xl/snug italic text-white font-semibold max-w-xl line-clamp-2">Unlock a flat 20% discount on your inaugural purchase at our store.</h3>
                                <p class="text-base font-medium text-white/80 max-w-lg mt-4 mb-8">Begin your shopping adventure with an exclusive 20% discount on your first purchase!</p>
                                <a href="#" class="py-2 px-5 inline-flex items-center justify-center gap-1 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-zinc-100 hover:bg-zinc-200 border-zinc-100 hover:border-zinc-200 text-zinc-900 rounded-md">Explore More <i class="ti ti-arrow-narrow-right text-lg/none"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative h-full bg-no-repeat bg-cover bg-[url(../images/banner/banner-2.png)] rounded-xl overflow-hidden p-10">
                            <div class="absolute inset-0 bg-black/60 md:bg-black/40"></div>
                            <div class="relative">
                                <h3 class="text-3xl/snug italic text-white font-semibold max-w-xl line-clamp-2">Summer 10% Discounts at Your Grocery Store!</h3>
                                <p class="text-base font-medium text-white/80 max-w-lg mt-4 mb-8">We meticulously source and offer premium-quality beef, lamb, and pork, carefully selected from dedicated farmers.</p>
                                <a href="#" class="py-2 px-5 inline-flex items-center justify-center gap-1 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-zinc-100 hover:bg-zinc-200 border-zinc-100 hover:border-zinc-200 text-zinc-900 rounded-md">Explore More <i class="ti ti-arrow-narrow-right text-lg/none"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:flex hidden">
                <button class="discount-swiper-next absolute z-30 inline-flex items-center justify-center h-10 w-10 bg-primary-100 hover:bg-primary-200 rounded-full text-primary transition-all duration-200 -end-0 top-1/2 translate-x-1/2 -translate-y-1/2 dark:bg-primary-900 dark:hover:bg-primary-800">
                    <i class="ti ti-chevron-right text-lg"></i>
                </button><!-- end swiper-indicator -->
                <button class="discount-swiper-prev absolute z-30 inline-flex items-center justify-center h-10 w-10 bg-primary-100 hover:bg-primary-200 rounded-full text-primary transition-all duration-200 -start-0 top-1/2 -translate-x-1/2 -translate-y-1/2 dark:bg-primary-900 dark:hover:bg-primary-800">
                    <i class="ti ti-chevron-left text-lg"></i>
                </button><!-- end swiper-indicator -->
            </div>
        </div>
    </div>
</section>

<section class="lg:pt-10 pt-3">
    <div class="relative bg-primary/20 backdrop-blur-xl py-16">
        <div class="container">
            <div class="grid lg:grid-cols-2 items-center">
                <div class="">
                    <h2 class="text-lg sm:text-xl lg:text-3xl/normal font-bold text-default-900 max-w-xl">Simplify your online shopping experience with our user-friendly mobile app.</h2>
                    <p class="text-base/normal text-default-600 md:font-medium max-w-xl mt-4">GreenCart streamlines your online grocery experience, providing swift delivery and access to the finest seasonal farm-fresh produce.</p>

                    <div class="flex flex-wrap items-center gap-2 mt-6">
                        <a href="#" class="py-2 px-5 inline-flex items-center justify-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm bg-zinc-700 hover:bg-zinc-800 border-zinc-700 hover:border-zinc-800 text-zinc-100 rounded-md">
                            <i class="ti ti-brand-apple-filled text-4xl"></i>
                            <span class="">
                  <span class="block text-xs">Download on</span>
                  <span class="block text-lg">App Store</span>
                </span>
                        </a>
                        <a href="#" class="py-2 px-5 inline-flex items-center justify-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm bg-zinc-700 hover:bg-zinc-800 border-zinc-700 hover:border-zinc-800 text-zinc-100 rounded-md">
                            <i class="ti ti-brand-google-play text-4xl"></i>
                            <span class="">
                  <span class="block text-xs">Get it on</span>
                  <span class="block text-lg">Play Store</span>
                </span>
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <img src="/greencart/assets/online-shopping-4ebf5f13.png" alt="" class="h-80 mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<button class="fixed bottom-18 end-4 z-50 inline-flex h-10 w-10 items-center justify-center rounded-full bg-primary/20 text-primary opacity-0 backdrop-blur-xl transition-all duration-500 lg:bottom-4 print:hidden" data-toggle="back-to-top">
    <i class="ti ti-chevron-up text-xl"></i>
</button>
<footer class="">
    <div class="border-t border-default-200 bg-white dark:bg-default-50">
        <div class="container">
            <div class="py-6 xl:py-24">
                <div class="grid gap-x-6 gap-y-10 xl:grid-cols-8">
                    <div class="xl:col-span-2">
                        <a href="#" class="logo flex items-center gap-2">
                            <img src="/greencart/assets/logo-50f51c55.png" class="hidden h-10 dark:block" alt="" />
                            <img src="/greencart/assets/logo-dark-1caee452.png" class="block h-10 dark:hidden" alt="" />
                        </a>

                        <p class="mt-6 max-w-xs text-base font-medium text-default-600">
                            A supermarket is a self-service shop offering a wide variety of
                            food, beverages & household products.
                        </p>
                        <div class="mt-6 flex flex-wrap gap-2">
                            <a href="admin-dashboard.html" target="_blank" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">
                                <i class="ti ti-brand-appgallery me-2 text-xl"></i> Become a
                                Seller
                            </a>

                            <!-- Newsletter banner modal button-->
                            <button data-hs-overlay="#offer-modal" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-primary-600">
                                <i class="ti ti-news me-2 text-xl"></i> Newsletter
                            </button>
                        </div>
                    </div>
                    <div class="xl:col-span-6">
                        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-4">
                            <div class="">
                                <ul class="flex flex-col gap-3">
                                    <h5 class="mb-2 font-semibold text-default-900 lg:text-lg xl:text-xl">
                                        My Account
                                    </h5>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i> My
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i> Order
                                            History</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Settings</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="">
                                <ul class="flex flex-col gap-3">
                                    <h5 class="mb-2 font-semibold text-default-900 lg:text-lg xl:text-xl">
                                        Information
                                    </h5>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Contact</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            FAQs</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i> Terms
                                            & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i> Return
                                            Policy</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="">
                                <ul class="flex flex-col gap-3">
                                    <h5 class="mb-2 font-semibold text-default-900 lg:text-lg xl:text-xl">
                                        Policy
                                    </h5>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i> Deal
                                            of the day</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Fruits</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Grocery products</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Vegetables</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i> Frozen
                                            items</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="">
                                <ul class="flex flex-col gap-3">
                                    <h5 class="mb-2 font-semibold text-default-900 lg:text-lg xl:text-xl">
                                        Help Center
                                    </h5>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Payments</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Refund</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Checkout</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Shipping</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="inline-flex items-center gap-2 text-base font-semibold text-default-600 transition-all hover:text-primary"><i class="ti ti-circle-chevron-right text-lg"></i>
                                            Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Grid End -->
        </div>

        <div class="border-t border-default-200">
            <div class="container">
                <div class="grid items-center gap-6 py-4 lg:grid-cols-3">
                    <p class="flex text-center text-default-900 lg:col-span-2 lg:text-start">
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        © GreenCart. Designed & Crafted With
                        <a class="text-primary" href="https://1.envato.market/coderthemes" target="_blank">&nbsp;Coderthemes</a>
                    </p>
                    <ul class="flex flex-wrap items-center justify-center gap-2 lg:justify-end">
                        <li>
                            <a href="javascript:void(0);" class="group inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-primary/20 text-primary backdrop-blur-xl transition-all duration-500 hover:bg-primary/30"><i class="ti ti-brand-facebook text-2xl"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="group inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-primary/20 text-primary backdrop-blur-xl transition-all duration-500 hover:bg-primary/30"><i class="ti ti-brand-x text-2xl"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="group inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-primary/20 text-primary backdrop-blur-xl transition-all duration-500 hover:bg-primary/30"><i class="ti ti-brand-instagram text-2xl"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="group inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-primary/20 text-primary backdrop-blur-xl transition-all duration-500 hover:bg-primary/30"><i class="ti ti-brand-github text-2xl"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="offer-modal" class="hs-overlay pointer-events-none fixed start-0 top-0 z-[80] hidden size-full overflow-y-auto overflow-x-hidden">
    <div class="m-3 mt-0 flex min-h-[calc(100%-3.5rem)] items-center opacity-0 transition-all ease-out hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:mx-auto sm:w-full sm:max-w-4xl">
        <div class="flex max-h-full w-full flex-col overflow-hidden rounded-xl bg-white shadow-sm dark:bg-default-50">
            <div class="pointer-events-auto relative p-4">
                <div class="grid items-center gap-6 md:grid-cols-2">
                    <div class="flex flex-col items-start justify-center p-4">
                        <span class="inline-flex items-center gap-1.5 rounded-lg bg-primary/10 px-4 py-1 text-sm font-medium text-primary">Newsletter</span>
                        <h1 class="mb-6 text-4xl/normal font-semibold text-default-900">
                            Subscribe to Our Newsletter
                        </h1>
                        <p class="mb-4 text-base text-default-900">
                            Subscribe to our newsletter and Save your
                            <span class="text-yellow-500">50% money</span> with discount code
                            today.
                        </p>
                        <div class="relative flex w-full">
                            <input type="email" id="emailID" class="block w-full rounded-s-md border-default-200 py-2 pe-5 ps-10 text-sm text-default-800 focus:ring-transparent dark:bg-default-50" placeholder="Enter your email" />
                            <i class="ti ti-mail absolute start-3 top-1/2 -translate-y-1/2 text-lg text-default-800"></i>
                            <button class="inline-flex items-center justify-center rounded-e border border-primary bg-primary px-6 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all">
                                Subscribe
                            </button>
                        </div>

                        <ul class="mt-10 flex flex-wrap items-center gap-2">
                            <li>
                                <a href="javascript:void(0);" class="group inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-primary/20 text-primary backdrop-blur-xl transition-all duration-500 hover:bg-primary/30"><i class="ti ti-brand-facebook text-2xl"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="group inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-primary/20 text-primary backdrop-blur-xl transition-all duration-500 hover:bg-primary/30"><i class="ti ti-brand-x text-2xl"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="group inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-primary/20 text-primary backdrop-blur-xl transition-all duration-500 hover:bg-primary/30"><i class="ti ti-brand-instagram text-2xl"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="group inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-primary/20 text-primary backdrop-blur-xl transition-all duration-500 hover:bg-primary/30"><i class="ti ti-brand-github text-2xl"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="hidden md:flex">
                        <img src="/greencart/assets/banner-9-83bafd3a.png" class="h-full w-full rounded-lg" alt="offer images" />
                    </div>

                    <!-- Modal CLose Button -->
                    <div class="absolute end-4 top-4 z-60">
                        <button data-hs-overlay="#offer-modal" class="flex size-10 items-center justify-center rounded-lg bg-default-300/55">
                            <i data-lucide="x" class="h-6 w-6 text-default-600"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Theme Js -->

<!-- Light Dark theme -->
<button class="fixed end-0 top-1/4 z-50">
    <span class="relative inline-flex h-10 w-10 items-center justify-center gap-2 overflow-hidden rounded-s-xl bg-primary align-middle font-medium text-white transition-all hover:bg-primary-600">
      <i class="ti ti-sun text-xl after:absolute after:inset-0" id="dark-theme"></i>
      <i class="ti ti-moon text-xl after:absolute after:inset-0" id="light-theme"></i>
    </span>
</button>



</body>

</html>
