@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Add New Subcategory</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.subcategories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">

                    {{-- MAIN CATEGORY --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Main Category</label>
                        <select name="maincategory_id" id="maincategory_id" class="form-select" required>
                            <option value="">-- Select --</option>
                            @foreach($maincategories as $cat)
                                <option value="{{ $cat->maincategory_id }}">{{ $cat->maincategory_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- NAME --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Subcategory Name</label>
                        <input type="text" name="subcategory_name" id="subcategory_name"
                               class="form-control" required>
                    </div>

                    {{-- SLUG --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="Auto generate">
                    </div>

                    {{-- POSITION --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Display Position</label>
                        <input type="number" name="position" id="position"
                               class="form-control" value="1" min="1" required>
                    </div>

                    {{-- DESCRIPTION --}}
                    <div class="col-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>

                    {{-- IMAGE --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="subcategory_image" class="form-control" accept="image/*">
                    </div>

                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- AUTO GENERATE SLUG --}}
<script>
document.getElementById('subcategory_name').addEventListener('input', function () {
    document.getElementById('slug').value = this.value
        .toLowerCase()
        .replaceAll(" ", "-")
        .replace(/[^\w\-]+/g, "");
});
</script>

<script>
    // Laravel generates full correct base URL (local + live + /spc)
    const baseURL = "{{ url('admin/subcategories/next-position') }}";

    document.getElementById('maincategory_id').addEventListener('change', function () {
        let id = this.value;

        if (!id) {
            document.getElementById('position').value = 1;
            return;
        }

        fetch(`${baseURL}/${id}`)
            .then(res => res.json())
            .then(data => {
                document.getElementById('position').value = data.next_position;
            });
    });
</script>


@endsection
