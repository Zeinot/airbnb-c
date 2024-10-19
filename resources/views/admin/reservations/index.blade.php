@extends("layouts.custom.admin")
@section("content")
    @dump($reservations)
    {{--    @dump(\App\Models\reservation::all())--}}
    <h1>Liste des réservations</h1>
    <a href="{{ route('reservations.create') }}">Créer une nouvelle réservation</a>
    <ul>
        @foreach($reservations as $reservation)
            <li>
                <a href="{{ route('reservations.show', $reservation->id) }}">{{ $reservation->id }} - {{ $reservation->status }}</a>
            </li>
        @endforeach
    </ul>
@endsection
