@extends("layouts.custom.admin")

@section('content')
    <h1>Créer une réservation</h1>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <label>Appartement :</label>
        <input type="text" name="apartment_id">
        <label>Utilisateur :</label>
        <input type="text" name="user_id">
        <label>Date de début :</label>
        <input type="date" name="start_date">
        <label>Date de fin :</label>
        <input type="date" name="end_date">
        <label>Status :</label>
        <select name="status">
            <option value="pending">En attente</option>
            <option value="confirmed">Confirmée</option>
            <option value="canceled">Annulée</option>
        </select>
        <button type="submit">Créer</button>
    </form>
@endsection
