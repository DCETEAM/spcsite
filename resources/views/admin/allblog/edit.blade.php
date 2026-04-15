<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <div class="card shadow-sm p-4">
        <h2 class="mb-4">Edit Blog</h2>

        <form action="{{ route('admin.allblogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Blog Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Publisher</label>
                    <input type="text" name="publisher" class="form-control" value="{{ $blog->publisher }}">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_description" class="form-control" rows="3" required>{{ $blog->short_description }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Long Description</label>
                    <textarea name="long_description" id="summernote">{!! $blog->long_description !!}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Publish Date</label>
                    <input type="date" name="publish_date" class="form-control" value="{{ $blog->publish_date }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Current Image</label><br>
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" width="120" class="rounded mt-2">
                    @else
                        <p>No image available</p>
                    @endif
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Change Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

            </div>

            <button class="btn btn-primary mt-3">Update Blog</button>
            <a href="{{ route('admin.allblogs.index') }}" class="btn btn-secondary mt-3">Back</a>

        </form>
    </div>

</div>
@endsection

<script>
$(document).ready(function() {
    $('#summernote').summernote({
        height: 300,
        callbacks: {
            onImageUpload: function(files) {
                uploadImage(files[0]);
            }
        }
    });
});

// Upload image to server
function uploadImage(file) {

    let data = new FormData();
    data.append("image", file);
    data.append("_token", "{{ csrf_token() }}");

    $.ajax({
        url: "{{ route('summernote.upload') }}",
        type: "POST",
        data: data,
        processData: false,
        contentType: false,

        success: function(url) {
            $('#summernote').summernote("insertImage", url);
        },

        error: function(xhr) {
            console.log(xhr.responseText);
        }
    });
}
</script>
