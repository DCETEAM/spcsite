@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-dark">
            <h4 class="mb-0">Edit Main Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.maincategories.update', $maincategory->maincategory_id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label>Main Category Name</label>
                        <input type="text" id="name" name="maincategory_name" class="form-control"
                               value="{{ $maincategory->maincategory_name }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Slug</label>
                        <input type="text" id="slug" name="slug" class="form-control"
                               value="{{ $maincategory->slug }}" required>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
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

                    @if($maincategory->maincategory_image)
                        <img src="{{ asset('storage/' . $maincategory->maincategory_image) }}"
                             width="100"
                             class="mt-2 rounded">
                    @endif
                </div>

                <button class="btn btn-success">Update</button>
                <a class="btn btn-secondary" href="{{ route('admin.maincategories.index') }}">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection

{{-- Auto update slug when name changes --}}
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
