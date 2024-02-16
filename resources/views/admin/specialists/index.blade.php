<x-admin.layout>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <h2>Specializations</h2>
            <a href="{{ route('admin.specialists.create') }}" class="btn btn-success">Create New</a>

            <div class="card card-animate mt-3">
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($specialists as $specialist)
                                    <tr>
                                        <td>{{ $specialist->name }}</td>
                                        <td>{{ $specialist->description }}</td>
                                        <td>
                                            <a href="{{ route('admin.specialists.show', $specialist->slug) }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('admin.specialists.edit', $specialist->slug) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('admin.specialists.destroy', $specialist->slug) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">

                    {{ $specialists->links() }}
                </div>
            </div>
        </div>
      </div>
    </div>

</x-admin.layout>
