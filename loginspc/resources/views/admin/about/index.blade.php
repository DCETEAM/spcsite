@extends('admin.layout')

@section('content')
<div class="container mt-5 mb-5">
    <h2>Manage About Section</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 mt-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $about->title ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="5" required>{{ old('description', $about->description ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label><br>
            @if(!empty($about->image))
                <img src="{{ asset($about->image) }}" width="150" class="mb-2">
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
