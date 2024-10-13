@extends("layouts.custom.admin")
@section("content")
    @dump($apartments)
    {{--    @dump(\App\Models\Apartment::all())--}}
    {{--    @dump(\App\Models\Apartment::all()[0]->apartment_images[0])--}}
    <div class="rounded-lg border-gray-300 dark:border-gray-600 mb-4">
        <div
            class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('apartments.create') }}">
                <button type="button"
                        class="mb-4 text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Create
                </button>
            </a>
            <table id="filter-table">
                <thead>

                <tr>
                    <th><span class="hidden">
                        </span>
                    </th>
                    <th>
                <span class="flex items-center">
                    Title
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
                    </th>
                    <th>
                <span class="flex items-center">
                    Type
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
                    </th>
                    <th>
                <span class="flex items-center">
                    Price
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
                    </th>
                    <th>
                <span class="flex items-center">
                    City
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                    </svg>
                </span>
                    </th>
                    {{--                    <th>--}}
                    {{--                <span class="flex items-center">--}}
                    {{--                    Stock--}}
                    {{--                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"--}}
                    {{--                         height="24" fill="none" viewBox="0 0 24 24">--}}
                    {{--                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
                    {{--                              d="m8 15 4 4 4-4m0-6-4-4-4 4"/>--}}
                    {{--                    </svg>--}}
                    {{--                </span>--}}
                    {{--                    </th>--}}
                    {{--                    <th>--}}
                    {{--                <span class="flex items-center">--}}
                    {{--                    Total Sales--}}
                    {{--                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"--}}
                    {{--                         height="24" fill="none" viewBox="0 0 24 24">--}}
                    {{--                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
                    {{--                              d="m8 15 4 4 4-4m0-6-4-4-4 4"/>--}}
                    {{--                    </svg>--}}
                    {{--                </span>--}}
                    {{--                    </th>--}}
                    {{--                    <th>--}}
                    {{--                <span class="flex items-center">--}}
                    {{--                    Status--}}
                    {{--                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"--}}
                    {{--                         height="24" fill="none" viewBox="0 0 24 24">--}}
                    {{--                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
                    {{--                              d="m8 15 4 4 4-4m0-6-4-4-4 4"/>--}}
                    {{--                    </svg>--}}
                    {{--                </span>--}}
                    {{--                    </th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($apartments as $apartment)

                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 ">
                        <td id="actions">
                            {{--                        <div class="">--}}
                            <div class="flex gap-3 max-w-fit">
                                <a class="text-primary-600"
                                   href="{{ route('apartments.edit', ["apartment" => $apartment]) }}"
                                    {{--                                   href="{{route("products.edit", $product)}}"--}}

                                >Edit</a>
                                <form method="post" action="{{route("apartments.destroy", ["apartment"=>$apartment])}}">
                                    @csrf
                                    @method("delete")
                                    <button class="text-red-600"
                                    >Delete
                                    </button>
                                </form>
                            </div>

                            {{--                        </div>--}}
                        </td>
                        <td onclick="window.location = `{{route('apartments.show', $apartment)}}`"
                            class="cursor-pointer font-medium text-gray-900 dark:text-white flex gap-3">
                            <img
                                src="{{Storage::disk('public')->url($apartment->apartment_images[0]->path) }}"
                                class="w-auto h-8 mr-3 object-cover">

                            <div class="flex flex-col justify-center text-nowrap">{{$apartment->title}}</div>
                        </td>
                        <td onclick="window.location = `{{route('apartments.show', $apartment)}}`"
                            class="cursor-pointer">{{$apartment->type}}</td>
                        <td onclick="window.location = `{{route('apartments.show', $apartment)}}`"
                            class="cursor-pointer">${{$apartment->price}}</td>
                        <td onclick="window.location = `{{route('apartments.show', $apartment)}}`"
                            class="cursor-pointer">{{$apartment->city}}</td>
                        {{--                        <td onclick="window.location = `/`" class="cursor-pointer">50</td>--}}
                        {{--                        <td>200</td>--}}
                        {{--                        <td>In Stock</td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
            <style>
                @media (min-width: 640px) {
                    #actions {
                        width: 75px !important;
                        /*@apply bg-amber-600*/
                    }
                }
            </style>
            @vite("resources/js/admin_app.js")
        </div>
    </div>
@endsection
