<x-admin.layout>
    <div class="container-fluid">
        <h2>Edit Specialist</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.specialists.update', $specialist->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $specialist->name) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $specialist->description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Current Image</label><br>
                        @if($specialist->image)
                            <img src="{{ asset('storage/specialists/' . $specialist->image) }}" alt="Specialist Image" style="max-width: 200px;">
                        @else
                            <p>No image available</p>
                        @endif
                        <input type="file" class="form-control mt-3" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-admin.layout>
