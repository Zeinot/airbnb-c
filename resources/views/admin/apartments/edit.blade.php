@extends('layouts.custom.admin')
@section('content')
    @vite('resources/js/create_apartment.js')
    {{-- @dump($apartment) --}}
    @if ($errors->all())
        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Danger</span>
            <div>
                <span class="font-medium">Ensure that these requirements are met:</span>
                <ul class="mt-1.5 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="rounded-lg border-gray-300 dark:border-gray-600 mb-4">
        <div
            class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form id="createForm" class="space-y-6" method="POST"
                action="{{ route('apartments.update', ['apartment' => $apartment]) }}" enctype="multipart/form-data">
                @csrf @method('patch')
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Create Apartment</h5>
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" name="title" id="title"
                        @if (old('title')) value="{{ old('title') }}" @else value="{{ $apartment->title }}" @endif
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Title ..." />
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-4 sm:grid-cols-2">
                    <div>
                        <label for="city"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                        <input type="text" name="city" id="city"
                            @if (old('city')) value="{{ old('city') }}" @else value="{{ $apartment->city }}" @endif
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="City ..." />
                    </div>
                    <div>
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" name="address" id="address" placeholder="Address ..."
                            @if (old('address')) value="{{ old('address') }}" @else value="{{ $apartment->address }}" @endif
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price
                            ($)</label>
                        <input type="number" name="price" id="price"
                            @if (old('price')) value="{{ old('price') }}" @else value="{{ $apartment->price }}" @endif
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$2999">
                    </div>
                    <div>
                        <label for="type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                        <select id="type" name="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option @if (!old('type') && !isset($apartment->type)) selected @endif disabled>Select</option>
                            @if (!old('type'))
                                <option value="Daily" @if ($apartment->type === 'Daily') selected @endif>Daily</option>
                                <option value="Weekly" @if ($apartment->type === 'Weekly') selected @endif>Weekly</option>
                                <option value="Monthly" @if ($apartment->type === 'Monthly') selected @endif>Monthly</option>
                                <option value="Yearly" @if ($apartment->type === 'Yearly') selected @endif>Yearly</option>
                            @else
                                <option value="Daily" @if (old('type') === 'Daily') selected @endif>Daily</option>
                                <option value="Weekly" @if (old('type') === 'Weekly') selected @endif>Weekly</option>
                                <option value="Monthly" @if (old('type') === 'Monthly') selected @endif>Monthly</option>
                                <option value="Yearly" @if (old('type') === 'Yearly') selected @endif>Yearly</option>
                            @endif
                        </select>

                    </div>
                </div>
                <div>
                    <label for="images"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Photos</label>
                    <input id="images" name="images[]" type="file" multiple />
                </div>
                <div>
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" name="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Description...">@if(old('description')){{ old('description') }}@else{{ $apartment->description }}@endif</textarea>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('apartments.admin_index') }}"
                        class="w-fit text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Cancel
                    </a>
                    <div id="submit">
                        <button type="submit" onclick="handleSubmit()"
                            class="w-fit text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Update Apartment
                        </button>
                    </div>
                </div>
                <br />
            </form>
        </div>
    </div>
    <script type="text/javascript">
        const loading = `<button disabled type="button"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 inline-flex items-center">
                    <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-white animate-spin"
                         viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="#E5E7EB"/>
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentColor"/>
                    </svg>
                    Loading...
                </button>`;
        const handleSubmit = () => {
            document.getElementById("submit").outerHTML = loading;
            document.getElementById("createForm").submit();
        }
    </script>

@php
        $images = [];
    foreach($apartment->apartment_images as $apartment_image){
//        Storage::disk('public')->url($apartment_image->path)
        array_push($images, Storage::disk('public')->url($apartment_image->path));

    }
    @endphp
    <script>
        document.addEventListener(
            "pondInitevent",
            (e) => {
                console.log("test")
                var images = {{ Js::from($images) }};
                console.log("images:", images)
                console.log(e.detail.pond.addFiles(images))
            },
            // false,
        );
    </script>
@endsection
