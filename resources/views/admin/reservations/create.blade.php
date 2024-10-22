@extends("layouts.custom.admin")
@section("content")

    {{-- Display validation errors if any --}}
    @if($errors->any())
        <div class="alert alert-danger mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Display success message if available --}}
    @if(session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="card mb-4">
        <div class="card-header">Create Reservation</div>
        <div class="card-body">
            <form id="createForm" method="POST" action="{{ route('reservations.store') }}">
                @csrf

                {{-- Apartment selection --}}
                <div class="mb-3">
                    <label for="apartment_id" class="form-label">Apartment</label>
                    <select name="apartment_id" id="apartment_id" class="form-control">
                        <option value="">Select an apartment</option>
                        @foreach($apartments as $apartment)
                            <option value="{{ $apartment->id }}" {{ old('apartment_id') == $apartment->id ? 'selected' : '' }}>
                                {{ $apartment->title }} - {{ $apartment->city }}
                            </option>
                        @endforeach
                    </select>
                    @error('apartment_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- User selection --}}
                <div class="mb-3">
                    <label for="user_id" class="form-label">User</label>
                    <select name="user_id" id="user_id" class="form-control">
                        <option value="">Select a user</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                {{ $user->name }} - {{ $user->email }}
                            </option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Start Date --}}
                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" class="form-control">
                    @error('start_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- End Date --}}
                <div class="mb-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}" class="form-control">
                    @error('end_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="confirmed" {{ old('status') == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                        <option value="canceled" {{ old('status') == 'canceled' ? 'selected' : '' }}>Canceled</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Buttons --}}
                <div class="d-flex justify-content-between">
                    <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Cancel</a>

                    <button type="submit" id="submitBtn" class="btn btn-primary">
                        Create Reservation
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Loading Button JS --}}
    <script>
        document.getElementById('createForm').addEventListener('submit', function () {
            let submitBtn = document.getElementById('submitBtn');
            submitBtn.innerHTML = `
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> 
                Creating...
            `;
            submitBtn.disabled = true;
        });
    </script>
@endsection
