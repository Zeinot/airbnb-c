@extends("layouts.custom.home")
@section("content")
    @dump(\App\Models\Apartment::all())
    Admin Apartments index

@endsection
