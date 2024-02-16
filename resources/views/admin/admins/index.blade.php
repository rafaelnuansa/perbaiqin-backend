<x-admin.layout>
    <div class="container-fluid">
        <h2>Admins</h2>
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.admins.create') }}" class="btn btn-primary mb-3">Create Admin</a>
                @if ($admins->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $admin)
                                    <tr>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>{{ $admin->phone ?? '-' }}</td>
                                        <td>
                                            <a href="{{ route('admin.admins.show', $admin->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('admin.admins.destroy', $admin->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $admins->links() }}
                @else
                    <p>No admins found.</p>
                @endif
            </div>
        </div>
    </div>
</x-admin.layout>
