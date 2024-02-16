<x-admin.layout>
    <div class="container-fluid">
        <h2>Technician Details</h2>
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <strong>Name:</strong> {{ $technician->name }}
                </div>
                <div class="mb-3">
                    <strong>Email:</strong> {{ $technician->email }}
                </div>
                <div class="mb-3">
                    <strong>Phone:</strong> {{ $technician->phone }}
                </div>
                @if ($technician->email_verified_at)
                    <div class="mb-3">
                        <strong>Email Verified At:</strong> {{ $technician->email_verified_at }}
                    </div>
                @else
                    <div class="mb-3">
                        <strong>Email Verified At:</strong> Not Verified
                    </div>
                @endif
                <div class="mb-3">
                    <strong>Image:</strong>
                    <img src="{{ asset('storage/technicians/' . $technician->image) }}" alt="Technician Image" style="max-width: 200px;">
                </div>
                <div class="mb-3">
                    <a href="{{ route('admin.technicians.index') }}" class="btn btn-secondary">Back</a>
                    <a href="{{ route('admin.technicians.edit', $technician->slug) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.technicians.destroy', $technician->slug) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this technician?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
