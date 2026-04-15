@extends('admin.layout')

@section('content')
<div class="card p-4">
  <h4>Add New Product</h4>

  <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
      <label>Main Category</label>
      <input type="text" name="main_category" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Sub Category</label>
      <input type="text" name="sub_category" class="form-control">
    </div>

    <div class="mb-3">
      <label>Title</label>
      <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Subtitle</label>
      <input type="text" name="subtitle" class="form-control">
    </div>

    <div class="mb-3">
      <label>Description</label>
      <textarea name="description" class="form-control" rows="4"></textarea>
    </div>

    <div class="mb-3">
      <label>Features (one per line)</label>
      <textarea name="features[]" class="form-control" rows="3"></textarea>
    </div>

    <div class="mb-3">
      <label>Slug</label>
      <input type="text" name="slug" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Image</label>
      <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-3">
      <label>Price</label>
      <input type="number" name="price" step="0.01" class="form-control">
    </div>

    <div class="mb-3">
      <label>Stock</label>
      <input type="number" name="stock" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Save Product</button>
  </form>
</div>
@endsection
