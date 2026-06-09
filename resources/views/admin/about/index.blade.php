@extends('admin.layout')

@section('content')
<div class="container mt-5 mb-5">
    <h2>Manage About Section</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success fade show" id="successAlert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 mt-3">
            <label class="form-label">Title</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ old('title', $about->title ?? '') }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description"
                      class="form-control"
                      rows="5"
                      required>{{ old('description', $about->description ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">
                Image <small class="text-muted">(Max 4MB)</small>
            </label><br>

            @if(!empty($about->image))
                <img src="{{ asset($about->image) }}" width="150" class="mb-2 rounded">
            @endif

            <input type="file" name="image" id="about_image" class="form-control">

            <small id="imageError" class="text-danger d-none">
                Image size must be less than 4 MB
            </small>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ===============================
       IMAGE SIZE VALIDATION (NO ALERT)
    ================================ */
    const MAX_SIZE_MB = 4;
    const MAX_SIZE_BYTES = MAX_SIZE_MB * 1024 * 1024;

    const imageInput = document.getElementById('about_image');
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

    /* ===============================
       AUTO HIDE SUCCESS MESSAGE
    ================================ */
    const successAlert = document.getElementById('successAlert');
    if (successAlert) {
        setTimeout(() => {
            successAlert.style.transition = 'opacity 0.5s ease';
            successAlert.style.opacity = '0';

            setTimeout(() => successAlert.remove(), 500);
        }, 3000); // 3 seconds
    }

});
</script>
@endsection
