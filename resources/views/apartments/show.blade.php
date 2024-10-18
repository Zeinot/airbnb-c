
@extends("layouts.custom.home")
@section("content")
{{-- @dump($apartment) --}}
  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div>
        </div>
    </div>
</div>
<div>
    <section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
          <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
            <div class="max-w-md lg:max-w-lg mx-auto">
                <div id="product-1-tab-content">
                    <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-900" id="product-1-image-1" role="tabpanel" aria-labelledby="product-1-image-1-tab">
                      <img class="w-full mx-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg" alt="" />
                      <img class="w-full mx-auto hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
                    </div>
                    <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-900" id="product-1-image-2" role="tabpanel" aria-labelledby="product-1-image-2-tab">
                      <img class="w-full mx-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-back.svg" alt="" />
                      <img class="w-full mx-auto hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-back-dark.svg" alt="" />
                    </div>
                    <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-900" id="product-1-image-3" role="tabpanel" aria-labelledby="product-1-image-3-tab">
                      <img class="w-full mx-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-components.svg" alt="" />
                      <img class="w-full mx-auto hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-components-dark.svg" alt="" />
                    </div>
                    <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-900" id="product-1-image-4" role="tabpanel" aria-labelledby="product-1-image-4-tab">
                      <img class="w-full mx-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-side.svg" alt="" />
                      <img class="w-full mx-auto hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-side-dark.svg" alt="" />
                    </div>
                </div>

                <ul class="grid grid-cols-4 gap-4 mt-8" id="product-1-tab" data-tabs-toggle="#product-1-tab-content" data-tabs-active-classes="border-gray-200 dark:border-gray-700" data-tabs-inactive-classes="border-transparent hover:border-gray-200 dark:hover:dark:border-gray-700 dark:border-transparent" role="tablist">
                  <li class="me-2" role="presentation">
                      <button class="h-20 w-20 overflow-hidden border-2 rounded-lg sm:h-20 sm:w-20 md:h-24 md:w-24 p-2 cursor-pointer mx-auto" id="product-1-image-1-tab" data-tabs-target="#product-1-image-1" type="button" role="tab" aria-controls="product-1-image-1" aria-selected="false">
                        <img
                          class="object-contain w-full h-full dark:hidden"
                          src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                          alt=""
                        />
                        <img
                          class="object-contain w-full h-full hidden dark:block"
                          src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg"
                          alt=""
                        />
                      </button>
                  </li>
                  <li class="me-2" role="presentation">
                      <button class="h-20 w-20 overflow-hidden border-2 rounded-lg sm:h-20 sm:w-20 md:h-24 md:w-24 p-2 cursor-pointer mx-auto" id="product-1-image-2-tab" data-tabs-target="#product-1-image-2" type="button" role="tab" aria-controls="product-1-image-2" aria-selected="false">
                        <img
                          class="object-contain w-full h-full dark:hidden"
                          src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-back.svg"
                          alt=""
                        />
                        <img
                          class="object-contain w-full h-full hidden dark:block"
                          src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-back-dark.svg"
                          alt=""
                        />
                      </button>
                  </li>
                  <li class="me-2" role="presentation">
                      <button class="h-20 w-20 overflow-hidden border-2 rounded-lg sm:h-20 sm:w-20 md:h-24 md:w-24 p-2 cursor-pointer mx-auto" id="product-1-image-3-tab" data-tabs-target="#product-1-image-3" type="button" role="tab" aria-controls="product-1-image-3" aria-selected="false">
                        <img
                          class="object-contain w-full h-full dark:hidden"
                          src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-components.svg"
                          alt=""
                        />
                        <img
                          class="object-contain w-full h-full hidden dark:block"
                          src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-components-dark.svg"
                          alt=""
                        />
                      </button>
                  </li>
                  <li class="me-2" role="presentation">
                      <button class="h-20 w-20 overflow-hidden border-2 rounded-lg sm:h-20 sm:w-20 md:h-24 md:w-24 p-2 cursor-pointer mx-auto" id="product-1-image-4-tab" data-tabs-target="#product-1-image-4" type="button" role="tab" aria-controls="product-1-image-4" aria-selected="false">
                        <img
                          class="object-contain w-full h-full dark:hidden"
                          src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-side.svg"
                          alt=""
                        />
                        <img
                          class="object-contain w-full h-full hidden dark:block"
                          src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-side-dark.svg"
                          alt=""
                        />
                      </button>
                  </li>
                </ul>

              </div>

            <div class="mt-6 sm:mt-8 lg:mt-0">
              <h1
                class="capitalize text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white"
              >
             {{$apartment->title}}
              </h1>
              <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                <p
                  class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white"
                >
                  ${{$apartment->price}} | {{$apartment->type}}
                </p>

                <div class="flex items-center gap-2 mt-2 sm:mt-0">
                  <div class="flex items-center gap-1">
                    <svg
                      class="w-4 h-4 text-yellow-300"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                      />
                    </svg>
                    <svg
                      class="w-4 h-4 text-yellow-300"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                      />
                    </svg>
                    <svg
                      class="w-4 h-4 text-yellow-300"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                      />
                    </svg>
                    <svg
                      class="w-4 h-4 text-yellow-300"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                      />
                    </svg>
                    <svg
                      class="w-4 h-4 text-yellow-300"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                      />
                    </svg>
                  </div>
                  <p
                    class="text-sm font-medium leading-none text-gray-500 dark:text-gray-400"
                  >
                    (5.0)
                  </p>
                  <a
                    href="#"
                    class="text-sm font-medium leading-none text-gray-900 underline hover:no-underline dark:text-white"
                  >
                    345 Reviews
                  </a>
                </div>
              </div>
<div>

</div>
              <div class="mt-3 sm:gap-4 sm:items-center sm:flex sm:mt-4">
               {{--  <a
                  href="#"
                  title=""
                  class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                  role="button"
                >
                  <svg
                    class="w-5 h-5 -ms-2 me-2"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"
                    />
                  </svg>
                  Add to favorites
                </a> --}}

                <button
             data-modal-target="default-modal" data-modal-toggle="default-modal"
                  class="text-white mt-4 sm:mt-0 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center"
                  role="button"
                >
                  <svg
                    class="w-5 h-5 -ms-2 me-2"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>

                  </svg>



                 Contact
                </button>
                <!-- Modal toggle -->



              </div>

              <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />
              <p class="mb-6 text-xl text-gray-500 dark:text-gray-400">
                {{$apartment->city}}
              </p>
              <p class="mb-6 text-xl text-gray-500 dark:text-gray-400">
                {{$apartment->address}}
              </p>
              <p class="mb-6 text-gray-500 dark:text-gray-400">
              {{$apartment->description}}
              </p>

              <p class="text-gray-500 dark:text-gray-400">
                Two Thunderbolt USB 4 ports and up to two USB 3 ports. Ultrafast
                Wi-Fi 6 and Bluetooth 5.0 wireless. Color matched Magic Mouse with
                Magic Keyboard or Magic Keyboard with Touch ID.
              </p>
            </div>
          </div>
        </div>
      </section>
</div>
@endsection
