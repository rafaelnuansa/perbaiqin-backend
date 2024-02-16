<x-admin.layout>
    <div class="container-fluid">
        <h2>Specialist Details</h2>
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <p>{{ $specialist->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <p>{{ $specialist->description }}</p>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    @if($specialist->image)
                        <img src="{{ asset('storage/' . $specialist->image) }}" alt="Specialist Image" style="max-width: 200px;">
                    @else
                        <p>No image available</p>
                    @endif
                </div>
                <a href="{{ route('admin.specialists.index') }}" class="btn btn-primary">Back to Specialists</a>
            </div>
        </div>
    </div>
</x-admin.layout>
