@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Add New Main Category</h4>
        </div>
        <div class="card-body">
 <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Title</label>
    <input type="text" name="title" class="form-control">

    <label>Author</label>
    <input type="text" name="author" class="form-control">

    <label>Publish Date</label>
    <input type="date" name="publish_date" class="form-control">

    <label>Excerpt</label>
    <textarea name="excerpt" class="form-control" rows="3"></textarea>

    <label>Image</label>
    <input type="file" name="image" class="form-control">

    <label>Content</label>
    <textarea name="content" id="summernote"></textarea>

    <button class="btn btn-primary mt-3">Save Blog</button>
</form>

<script>
    $('#summernote').summernote();
</script>

</div>

</div>
@endsection
