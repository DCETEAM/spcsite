@extends('admin.layout')

@section('content')
    <div class="container mt-4">

        <div class="card shadow">
            <div class="card-header bg-secondary text-dark">
                <h4>Edit Facility</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.facilities.update', $facility->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $facility->title }}">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="4">{{ $facility->description }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 col-sm-6 mb-3">
                        <label>
                            Current Image <small class="text-muted">(Max 2MB)</small>
                        </label><br>

                        @if ($facility->image)
                            <img src="{{ asset('storage/' . $facility->image) }}"
                                 width="140" class="rounded mb-2">
                        @else
                            <p class="text-muted">No Image Uploaded</p>
                        @endif

                        <input type="file" name="image" id="facility_image" class="form-control mt-2">

                        <small id="imageError" class="text-danger d-none">
                            Image size must be less than 2 MB
                        </small>
                    </div>

                    <div class="col-md-6 col-sm-6 mb-3">
                        <label>Features (line break = new bullet)</label>
                        <textarea name="features" class="form-control" rows="5" placeholder="Enter each feature on a new line">{{ $facility->features }}</textarea>
                    </div>
                    </div>
                    <button class="btn btn-success mt-3">Update Facility</button>
 <a href="{{ route('admin.facilities.index') }}" class="btn btn-secondary mt-3">Cancel</a>

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
