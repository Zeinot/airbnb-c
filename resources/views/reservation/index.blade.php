@extends('layouts.guest')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Mes Réservations</h1>
        <p class="mt-2 text-gray-600">Consultez et gérez vos réservations d'appartements</p>
    </div>

    <!-- Filtres -->
    <div class="mb-6 flex flex-wrap gap-4">
        <select class="bg-white border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-primary-500 focus:border-primary-500">
            <option value="">Tous les statuts</option>
            <option value="confirmed">Confirmées</option>
            <option value="pending">En attente</option>
            <option value="canceled">Annulées</option>
        </select>

        <input type="date" class="bg-white border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Date début">
        <input type="date" class="bg-white border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Date fin">
    </div>

    <!-- Liste des réservations -->
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach($reservations as $reservation)
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
            <!-- Image de l'appartement -->
            <img src="/api/placeholder/400/200" alt="Appartement" class="w-full h-48 object-cover">
            
            <div class="p-6">
                <!-- Informations de l'appartement -->
                <h3 class="text-xl font-semibold text-gray-900 mb-2">
                    {{ $reservation->apartment->title ?? 'Appartement non disponible' }}
                </h3>
                <p class="text-gray-600 mb-4">
                    {{ $reservation->apartment->city ?? 'Ville non spécifiée' }}
                </p>

                <!-- Dates de réservation -->
                <div class="flex items-center gap-2 text-gray-600 mb-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>{{ \Carbon\Carbon::parse($reservation->start_date)->format('d/m/Y') }} - {{ \Carbon\Carbon::parse($reservation->end_date)->format('d/m/Y') }}</span>
                </div>

                <!-- Statut -->
                <div class="mb-4">
                    <span class="px-3 py-1 rounded-full text-sm font-medium
                        @if($reservation->status === 'confirmed') bg-green-100 text-green-800 
                        @elseif($reservation->status === 'pending') bg-yellow-100 text-yellow-800
                        @else bg-red-100 text-red-800 
                        @endif">
                        {{ ucfirst($reservation->status) }}
                    </span>
                </div>

                <!-- Actions -->
                <div class="flex gap-3">
                    <a href="{{ route('reservations.show', $reservation) }}" class="flex-1 text-center px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition duration-150">
                        Détails
                    </a>
                    @if($reservation->status === 'pending')
                    <form method="post" action="{{ route('reservations.destroy', $reservation) }}" class="flex-1">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')" class="w-full px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-150">
                            Annuler
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Message si aucune réservation -->
    @if($reservations->isEmpty())
    <div class="text-center py-12">
        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <h3 class="mt-2 text-sm font-medium text-gray-900">Aucune réservation</h3>
        <p class="mt-1 text-sm text-gray-500">Commencez par rechercher un appartement qui vous plaît.</p>
        <div class="mt-6">
            <a href="{{ route('apartments.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700">
                Voir les appartements
            </a>
        </div>
    </div>
    @endif
</div>
@endsection