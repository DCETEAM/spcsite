@extends('admin.layout')

@section('content')
<div class="card p-4">
  <h4>Edit Product</h4>
  <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-3">
      <label>Title</label>
      <input type="text" name="title" class="form-control" value="{{ $product->title }}">
    </div>

    <div class="mb-3">
      <label>Subtitle</label>
      <input type="text" name="subtitle" class="form-control" value="{{ $product->subtitle }}">
    </div>

    <div class="mb-3">
      <label>Description</label>
      <textarea name="description" class="form-control" rows="4">{{ $product->description }}</textarea>
    </div>

    <div class="mb-3">
      <label>Features</label>
      <div id="feature-list">
        @foreach($product->features ?? [] as $feature)
          <input type="text" name="features[]" class="form-control mb-2" value="{{ $feature }}">
        @endforeach
        <input type="text" name="features[]" class="form-control mb-2" placeholder="Add more features">
      </div>
      <button type="button" id="add-feature" class="btn btn-outline-secondary btn-sm">+ Add More</button>
    </div>

    <div class="mb-3">
    <label>Image</label><br>
    <!-- Image preview -->
    <div id="imagePreview" class="mb-2" style="display: none;">
      <img id="preview" src="#" alt="Preview" style="max-width: 200px;">
    </div>
      @if($product->image)
        <img src="{{ asset('storage/'.$product->image) }}" width="100" class="mb-2">
      @endif
      <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>

<script>
document.getElementById('add-feature').addEventListener('click', () => {
  const div = document.createElement('div');
  div.innerHTML = `<input type="text" name="features[]" class="form-control mb-2" placeholder="Enter feature">`;
  document.getElementById('feature-list').appendChild(div);
});
</script>
@endsection
