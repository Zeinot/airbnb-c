@extends('layouts.custom.admin')
@section('content')

    @if($errors->all())
        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-1.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div>
                <span class="font-medium">Assurez-vous de respecter les exigences suivantes:</span>
                <ul class="mt-1.5 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="rounded-lg border-gray-300 dark:border-gray-600 mb-4">
        <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form id="editForm" method="POST" action="{{ route('reservations.update', $reservation->id) }}" class="space-y-6">
                @csrf
                @method('PUT')
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Modifier la Réservation</h5>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="apartment_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Appartement</label>
                        <select name="apartment_id" id="apartment_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            <option value="">Sélectionnez un appartement</option>
                            @foreach($apartments as $apartment)
                                <option value="{{ $apartment->id }}" {{ $reservation->apartment_id == $apartment->id ? 'selected' : '' }}>
                                    {{ $apartment->title }} - {{ $apartment->city }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Utilisateur</label>
                        <select name="user_id" id="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            <option value="">Sélectionnez un utilisateur</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $reservation->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }} - {{ $user->email }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de début</label>
                        <input type="date" name="start_date" id="start_date" value="{{ $reservation->start_date }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"/>
                    </div>

                    <div>
                        <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de fin</label>
                        <input type="date" name="end_date" id="end_date" value="{{ $reservation->end_date }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"/>
                    </div>

                    <div>
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Statut</label>
                        <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            <option value="pending" {{ $reservation->status == 'pending' ? 'selected' : '' }}>En attente</option>
                            <option value="confirmed" {{ $reservation->status == 'confirmed' ? 'selected' : '' }}>Confirmée</option>
                            <option value="canceled" {{ $reservation->status == 'canceled' ? 'selected' : '' }}>Annulée</option>
                        </select>
                    </div>
                </div>

                <div class="flex gap-3">
                    <a href="{{ route('reservations.index') }}" 
                       class="w-fit text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Annuler
                    </a>

                    <div id="submit">
                        <button type="submit"
                                onclick="handleSubmit()"
                                class="w-fit text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Mettre à jour la Réservation
                        </button>
                    </div>
                </div>
            </form>

            <!-- Supprimer la réservation -->
            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" class="mt-4">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer cette réservation ?')" 
                        class="w-fit text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Supprimer la Réservation
                </button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        const loading = `<button disabled type="button"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 inline-flex items-center">
                    <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-white animate-spin"
                         viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.992 72.5987 9.67211 50 9.67211C27.4013 9.67211 9.08144 27.992 9.08144 50.5908Z"
                            fill="#E5E7EB"/>
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5534C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7232 75.2124 7.41289C69.5422 4.10259 63.2754 1.94025 56.7221 1.05197C51.7662 0.367793 46.7345 0.446843 41.8197 1.27873C39.325 1.69494 37.8557 4.19726 38.4928 6.62267C39.1299 9.04808 41.603 10.4711 44.1102 10.1078C47.9791 9.49866 51.9232 9.51002 55.7793 10.1384C60.8686 10.9649 65.7351 12.8717 70.0509 15.7579C74.3666 18.6441 78.0465 22.4297 80.8468 26.8894C83.0836 30.5103 84.7335 34.4201 85.725 38.4996C86.3826 40.858 89.5422 41.6918 91.9676 39.0409Z"
                            fill="currentColor"/>
                    </svg>
                    Patientez...
                </button>`;

        function handleSubmit() {
            document.getElementById("submit").innerHTML = loading;
            document.getElementById("editForm").submit();
        }
    </script>

@endsection
