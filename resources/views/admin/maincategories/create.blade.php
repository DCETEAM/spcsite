@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Add New Main Category</h4>
        </div>
        <div class="card-body">
    <form action="{{ route('admin.maincategories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row mb-3">
            <div class="col-md-6 col-sm-6 mb-3">
                <label>Main Category Name</label>
                <input type="text" name="maincategory_name" id="name" class="form-control" required>
            </div>

            <div class="col-md-6 col-sm-6 mb-3">
                <label>Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" placeholder="Auto Generated" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 col-sm-6 mb-3">
                 <label>
                            Image <small class="text-muted">(Max 4MB)</small>
                        </label>
                        <input type="file"
                               name="maincategory_image"
                               id="maincategory_image"
                               class="form-control">

                        <small id="imageError" class="text-danger d-none">
                            Image size must be less than 4 MB
                        </small>
            </div>
        </div>

        <button class="btn btn-success">Save</button>
        <a href="{{ route('admin.maincategories.index') }}" class="btn btn-secondary">Cancel</a>

    </form>
</div>
</div>

{{-- Auto-generate slug --}}
<script>
document.getElementById('name').addEventListener('input', function () {
    document.getElementById('slug').value = this.value
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'');
});

    /* ===============================
       IMAGE SIZE VALIDATION (NO ALERT)
    ================================ */
    const MAX_SIZE_MB = 4;
    const MAX_SIZE_BYTES = MAX_SIZE_MB * 1024 * 1024;

    const imageInput = document.getElementById('maincategory_image');
    const imageError = document.getElementById('imageError');

    imageInput.addEventListener('change', function () {

        imageError.classList.add('d-none');
        imageInput.classList.remove('is-invalid');

        const file = this.files[0];

        if (file && file.size > MAX_SIZE_BYTES) {
            imageError.classList.remove('d-none');
            imageInput.classList.add('is-invalid');
            // this.value = ""; // clear invalid file
        }
    });
</script>
@endsection

