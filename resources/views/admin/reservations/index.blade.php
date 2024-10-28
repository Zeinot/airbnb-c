@extends("layouts.custom.admin")
@section("content")
    @dump($reservations)
 
    <div class="rounded-lg border-gray-300 dark:border-gray-600 mb-4">
        <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('reservations.create') }}">
                <button type="button" class="mb-4 text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Créer une réservation
                </button>
            </a>
            
            <table id="filter-table">
                <thead>
                    <tr>
                        <th><span class="hidden"></span></th>
                        <th>
                            <span class="flex items-center">
                                ID
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Appartement
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Date début
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Date fin
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Statut
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                                </svg>
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                            <td id="actions">
                                <div class="flex gap-3 max-w-fit">
                                    <a class="text-primary-600" href="{{ route('reservations.edit', $reservation) }}">
                                        Edit
                                    </a>
                                    <form method="post" action="{{ route('reservations.destroy', $reservation) }}">
                                        @csrf
                                        @method("delete")
                                        <button class="text-red-600">Delete</button>
                                    </form>
                                </div>
                            </td>
                            <td onclick="window.location = '{{ route('reservations.show', $reservation) }}'" class="cursor-pointer">
                                {{ $reservation->id }}
                            </td>
                            <td onclick="window.location = '{{ route('reservations.show', $reservation) }}'" class="cursor-pointer">
                                {{ $reservation->apartment->title ?? 'N/A' }}
                            </td>
                            <td onclick="window.location = '{{ route('reservations.show', $reservation) }}'" class="cursor-pointer">
                                {{ $reservation->start_date }}
                            </td>
                            <td onclick="window.location = '{{ route('reservations.show', $reservation) }}'" class="cursor-pointer">
                                {{ $reservation->end_date }}
                            </td>
                            <td onclick="window.location = '{{ route('reservations.show', $reservation) }}'" class="cursor-pointer">
                                <span class="px-2 py-1 rounded-full text-sm 
                                    @if($reservation->status === 'confirmed') bg-green-100 text-green-800 
                                    @elseif($reservation->status === 'pending') bg-yellow-100 text-yellow-800
                                    @else bg-red-100 text-red-800 
                                    @endif">
                                    {{ ucfirst($reservation->status) }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <style>
                @media (min-width: 640px) {
                    #actions {
                        width: 75px !important;
                    }
                }
            </style>
            @vite("resources/js/admin_app.js")
        </div>
    </div>
@endsection
 
