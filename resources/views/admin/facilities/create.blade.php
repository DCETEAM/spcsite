@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-secondary text-white">
            <h4>Add New Facility</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.facilities.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 col-sm-6 mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="col-md-6 col-sm-6 mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="4" required></textarea>
                    </div>
                </div>

                <div class="row">
                    {{-- IMAGE --}}
                    <div class="col-md-6 col-sm-6 mb-3">
                        <label>
                            Image <small class="text-muted">(Max 2MB)</small>
                        </label>
                        <input type="file" name="image" id="facility_image" class="form-control">

                        <small id="imageError" class="text-danger d-none">
                            Image size must be less than 2 MB
                        </small>
                    </div>

                    <div class="col-md-6 col-sm-6 mb-3">
                        <label>Features (use line break for each feature)</label>
                        <textarea name="features"
                                  class="form-control"
                                  rows="5"
                                  placeholder="Enter each feature on a new line"></textarea>
                    </div>
                </div>

                <button class="btn btn-success">Save</button>
                <a href="{{ route('admin.facilities.index') }}" class="btn btn-secondary">Cancel</a>

            </form>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ===============================
       IMAGE SIZE VALIDATION (NO ALERT)
    ================================ */
    const MAX_SIZE_MB = 2;
    const MAX_SIZE_BYTES = MAX_SIZE_MB * 1024 * 1024;

    const imageInput = document.getElementById('facility_image');
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

});
</script>
@endsection
