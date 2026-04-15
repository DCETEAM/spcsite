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
                    <label>Image</label>
                    <input type="file" name="maincategory_image" class="form-control">

                    @if($maincategory->maincategory_image)
                        <img src="{{ asset('storage/' . $maincategory->maincategory_image) }}" width="100" class="mt-2">
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
</script>
