<x-admin.layout>
    <div class="container-fluid">
        <h2>Technicians</h2>
        <div class="mb-3">
            <a href="{{ route('admin.technicians.create') }}" class="btn btn-primary">Add Technician</a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($technicians as $technician)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $technician->name }}</td>
                                    <td>{{ $technician->email }}</td>
                                    <td>{{ $technician->phone }}</td>
                                    <td>
                                        <a href="{{ route('admin.technicians.show', $technician->slug) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('admin.technicians.edit', $technician->slug) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('admin.technicians.destroy', $technician->slug) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this technician?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $technicians->links() }}
            </div>
        </div>
    </div>
</x-admin.layout>
