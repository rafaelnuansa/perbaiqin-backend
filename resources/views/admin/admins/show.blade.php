<x-admin.layout>
    <div class="container-fluid">
        <h2>Admin Details</h2>
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <p>{{ $admin->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <p>{{ $admin->email }}</p>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <p>{{ $admin->phone ?? '-' }}</p>
                </div>
                <a href="{{ route('admin.admins.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
</x-admin.layout>
