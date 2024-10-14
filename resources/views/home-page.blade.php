@extends("layouts.custom.home")
@section("content")
{{--  hero section --}}
<section class="bg-white antialiased">
    <div class="mx-auto max-w-screen-2xl">
        <div id="slide-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-[512px] w-full overflow-hidden">
                <!-- Item 1 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <div class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2 bg-[url('https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-image.jpg')] bg-cover bg-center bg-no-repeat">
                        <div class="absolute top-1/2 z-10 w-full max-w-[512px] -translate-y-1/2 px-4 sm:left-1/2 sm:-translate-x-1/2 lg:-translate-x-8 lg:px-0">
                            <a href="#" class="mb-5 inline-flex items-center justify-between rounded-full bg-white bg-opacity-10 px-1 py-1 pr-4 text-sm text-white hover:bg-opacity-20" role="alert">
                                <span class="mr-3 rounded-xl bg-white bg-opacity-30 px-4 py-1 text-xs font-medium">Sale</span>
                                <span class="mr-1 text-sm font-medium">Up to 30% OFF if you order today</span>
                                <svg class="h-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                            <h2 class="mb-3 text-3xl font-extrabold leading-none text-white lg:text-5xl">Save today on your new iMac computer.</h2>
                            <p class="mb-5 text-gray-200">Reserve your new Apple iMac 27” today and enjoy exclusive savings. Pre-order now to secure your discount.</p>
                            <a href="#" class="inline-flex rounded-lg bg-primary-700 px-5 py-3 text-base font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">Pre-order now</a>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <div class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2 bg-[url('https://flowbite.s3.amazonaws.com/blocks/e-commerce/fashion-image.jpg')] bg-cover bg-center bg-no-repeat">
                        <div class="absolute top-1/2 z-10 w-full max-w-[512px] -translate-y-1/2 px-4 sm:right-1/2 sm:translate-x-1/2 lg:translate-x-8 lg:px-0">
                            <span class="mb-5 inline-block rounded bg-yellow-100 px-2.5 py-0.5 text-sm font-medium text-yellow-800">New arrival</span>
                            <h2 class="mb-3 text-3xl font-extrabold leading-none text-white lg:text-5xl">New arrivals picked just for you</h2>
                            <p class="mb-5 text-gray-200">Less is more never out of date.</p>
                            <div class="flex items-center">
                                <a href="#" class="me-3 inline-flex rounded-lg bg-primary-700 px-5 py-3 text-base font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">Discover more</a>
                                <a href="#" class="inline-flex items-center rounded-lg bg-white bg-opacity-40 px-5 py-3 text-base font-medium text-white hover:bg-opacity-50 focus:outline-none focus:ring-4 focus:ring-gray-300"
                                ><svg class="me-1 h-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M8.6 5.2A1 1 0 0 0 7 6v12a1 1 0 0 0 1.6.8l8-6a1 1 0 0 0 0-1.6l-8-6Z" clip-rule="evenodd" />
                                    </svg>
                                    View catalog</a
                                >
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <div class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2 bg-[url('https://flowbite.s3.amazonaws.com/blocks/e-commerce/gaming-image.jpg')] bg-cover bg-center bg-no-repeat">
                        <div class="absolute top-1/2 z-10 w-full max-w-[512px] -translate-y-1/2 px-4 sm:left-1/2 sm:-translate-x-1/2 lg:-translate-x-8 lg:px-0">
                            <a href="#" class="mb-5 inline-flex items-center justify-between rounded-full bg-white bg-opacity-10 px-1 py-1 pr-4 text-sm text-white hover:bg-opacity-20" role="alert">
                                <span class="mr-3 rounded-xl bg-white bg-opacity-30 px-4 py-1 text-xs font-medium">Offer</span>
                                <span class="mr-1 text-sm font-medium">Save $25 when you spend $250 In-Store or Online</span>
                                <svg class="h-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                            <h2 class="mb-3 text-3xl font-extrabold leading-none text-white lg:text-5xl">Gamers’ Favorites. Best Sellers.</h2>
                            <p class="mb-5 text-gray-200">The world's largest retail gaming and trade-in destination for Xbox, PlayStation, and Nintendo games, systems, consoles & accessories.</p>
                            <a href="#" class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-3 text-base font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300"
                            ><svg class="me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                                </svg>
                                Find a store</a
                            >
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="h-3 w-3 rounded-full dark:!bg-white/50 dark:hover:!bg-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="h-3 w-3 rounded-full dark:!bg-white/50 dark:hover:!bg-white" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="h-3 w-3 rounded-full dark:!bg-white/50 dark:hover:!bg-white" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="group absolute start-0 top-0 z-30 hidden h-full cursor-pointer items-center justify-center px-4 focus:outline-none md:flex" data-carousel-prev>
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
          <svg class="h-4 w-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
            </button>
            <button type="button" class="group absolute end-0 top-0 z-30 hidden h-full cursor-pointer items-center justify-center px-4 focus:outline-none md:flex" data-carousel-next>
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
          <svg class="h-4 w-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
            </button>
        </div>
    </div>
</section>
{{--  hero section --}}

{{--Images with heading and description#--}}
<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">We didn't reinvent the wheel</h2>
            <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
            <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.</p>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
        </div>
    </div>
</section>
{{--Images with heading and description#--}}


{{--Promo section with cards#--}}
<section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div class="mb-4 text-center md:mb-8">
            <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white md:text-4xl">Why Flowbite Shop?</h2>
            <p class="text-base text-gray-500 dark:text-gray-400 md:text-xl">Simplify the entire ordering process from search to fulfillment, all in one platform.</p>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:gap-8">
            <div class="rounded-lg border border-gray-200 bg-white p-4 text-center shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                <svg class="mx-auto mb-4 h-12 w-12 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 12a28.076 28.076 0 0 1-1.091 9M7.231 4.37a8.994 8.994 0 0 1 12.88 3.73M2.958 15S3 14.577 3 12a8.949 8.949 0 0 1 1.735-5.307m12.84 3.088A5.98 5.98 0 0 1 18 12a30 30 0 0 1-.464 6.232M6 12a6 6 0 0 1 9.352-4.974M4 21a5.964 5.964 0 0 1 1.01-3.328 5.15 5.15 0 0 0 .786-1.926m8.66 2.486a13.96 13.96 0 0 1-.962 2.683M7.5 19.336C9 17.092 9 14.845 9 12a3 3 0 1 1 6 0c0 .749 0 1.521-.031 2.311M12 12c0 3 0 6-2 9"
                    />
                </svg>
                <h3 class="mb-3 text-xl font-semibold text-gray-900 dark:text-white">Enjoy secure payments</h3>
                <p class="mb-4 text-gray-500 dark:text-gray-400">Pay for your order in over 20 currencies via 20+ secure payment methods, including flexible payment terms.</p>
                <a href="#" class="flex items-center justify-center font-medium text-primary-700 hover:underline dark:text-primary-500">
                    How to make the payments
                    <svg class="ms-1 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                </a>
            </div>
            <div class="rounded-lg border border-gray-200 bg-white p-4 text-center shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                <svg class="mx-auto mb-4 h-12 w-12 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                </svg>
                <h3 class="mb-3 text-xl font-semibold text-gray-900 dark:text-white">Comprehensive logistics</h3>
                <p class="mb-4 text-gray-500 dark:text-gray-400">Get your logistics needs fulfilled with best solutions, with real-time tracking for 40,000+ routes across 208 countries.</p>
                <a href="#" class="flex items-center justify-center font-medium text-primary-700 hover:underline dark:text-primary-500">
                    Get premium delivery
                    <svg class="ms-1 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                </a>
            </div>
            <div class="rounded-lg border border-gray-200 bg-white p-4 text-center shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                <svg class="mx-auto mb-4 h-12 w-12 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z" />
                </svg>
                <h3 class="mb-3 text-xl font-semibold text-gray-900 dark:text-white">Handle everything effortlessly</h3>
                <p class="mb-4 text-gray-500 dark:text-gray-400">Check order status, manage suppliers, track payments and shipments, and contact after-sales support all via My Account.</p>
                <a href="#" class="flex items-center justify-center font-medium text-primary-700 hover:underline dark:text-primary-500">
                    Activate your account
                    <svg class="ms-1 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
{{--Promo section with cards#--}}

{{--Image with CTA button#--}}
<section class="bg-white dark:bg-gray-900">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img class="w-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg" alt="dashboard image">
        <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image">
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Let's create more tools and ideas that brings us together.</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Flowbite helps you connect with friends and communities of people who share your interests. Connecting with your friends and family as well as discovering new ones is easy with features like Groups.</p>
            <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                Get started
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
</section>
{{--Image with CTA button#--}}

@endsection
