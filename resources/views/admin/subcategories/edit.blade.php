@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Edit Subcategory</h4>
        </div>
        <div class="card-body">

            <form action="{{ route('admin.subcategories.update', $subcategory->subcategory_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3">

                    {{-- Main Category --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Main Category</label>
                        <select name="maincategory_id" class="form-select" required>
                            @foreach($maincategories as $maincategory)
                                <option value="{{ $maincategory->maincategory_id }}"
                                    {{ $subcategory->maincategory_id == $maincategory->maincategory_id ? 'selected' : '' }}>
                                    {{ $maincategory->maincategory_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Subcategory Name --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Subcategory Name</label>
                        <input type="text" name="subcategory_name" id="subcategory_name"
                               value="{{ $subcategory->subcategory_name }}" class="form-control" required>
                    </div>

                    {{-- Slug --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" name="slug" id="slug" value="{{ $subcategory->slug }}" class="form-control" required>
                        <small class="text-muted">Editable — URL will change if modified</small>
                    </div>

                    {{-- Position --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Display Position</label>
                        <input type="number" name="position" min="1" value="{{ $subcategory->position }}" class="form-control" required>
                        <small class="text-muted">Position auto-adjusts on delete</small>
                    </div>

                    {{-- Description --}}
                    <div class="col-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ $subcategory->description }}</textarea>
                    </div>

                    {{-- Image --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Subcategory Image</label>
                        <input type="file" name="subcategory_image" class="form-control">

                        @if($subcategory->subcategory_image)
                            <img src="{{ asset('storage/'.$subcategory->subcategory_image) }}"
                                 width="100" class="mt-2 rounded border">
                        @endif
                    </div>

                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Update Subcategory</button>
                    <a href="{{ route('admin.subcategories.index') }}" class="btn btn-secondary">Cancel</a>
                </div>

            </form>

        </div>
    </div>
</div>

{{-- Auto Slug Generator --}}
<script>
document.getElementById('subcategory_name').addEventListener('input', function () {
    const slug = this.value
        .toLowerCase()
        .replace(/ /g, "-")
        .replace(/[^\w\-]+/g, "");
    document.getElementById('slug').value = slug;
});
</script>

@endsection
