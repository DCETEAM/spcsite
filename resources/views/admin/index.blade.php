@extends('admin.layout')

@section('content')
<div class="card p-4">
  <h4>{{ isset($product) ? 'Edit Product' : 'Add New Product' }}</h4>

  <form 
      action="{{ isset($product) ? route('admin.update', $product->id) : route('admin.products.store') }}" 
      method="POST" 
      enctype="multipart/form-data" 
      class="mb-4"
  >
    @csrf
    @if(isset($product))
      @method('PUT')
    @endif

    <div class="row g-3">
      <div class="col-md-6">
        <label>Main Category</label>
        <input type="text" name="main_category" class="form-control" 
               value="{{ old('main_category', $product->main_category ?? '') }}" required>
      </div>

      <div class="col-md-6">
        <label>Sub Category</label>
        <input type="text" name="sub_category" class="form-control" 
               value="{{ old('sub_category', $product->sub_category ?? '') }}">
      </div>

      <div class="col-md-6">
        <label>Title</label>
        <input type="text" name="title" class="form-control" 
               value="{{ old('title', $product->title ?? '') }}" required>
      </div>

      <div class="col-md-6">
        <label>Subtitle</label>
        <input type="text" name="subtitle" class="form-control" 
               value="{{ old('subtitle', $product->subtitle ?? '') }}">
      </div>

      <div class="col-12">
        <label>Description</label>
        <textarea name="description" class="form-control" rows="3">{{ old('description', $product->description ?? '') }}</textarea>
      </div>

     <div class="col-md-6">
    <label>Features (comma separated)</label>
    <input type="text" name="features" 
           class="form-control" 
           value="{{ old('features', isset($product) ? implode(',', (array) json_decode($product->features ?? '[]', true)) : '') }}">
</div>


      <div class="col-md-6">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" 
               value="{{ old('slug', $product->slug ?? '') }}" required>
      </div>

      <div class="col-md-6">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        @if(isset($product) && $product->image)
          <img src="{{ asset('storage/' . $product->image) }}" width="80" class="mt-2">
        @endif
      </div>

      <div class="col-md-3">
        <label>Price</label>
        <input type="number" step="0.01" name="price" class="form-control" 
               value="{{ old('price', $product->price ?? '') }}">
      </div>

      <div class="col-md-3">
        <label>Stock</label>
        <input type="number" name="stock" class="form-control" 
               value="{{ old('stock', $product->stock ?? '') }}">
      </div>

      <div class="col-12 mt-3">
        <button type="submit" class="btn btn-success">
          {{ isset($product) ? 'Update Product' : 'Add Product' }}
        </button>
        @if(isset($product))
          <a href="{{ route('admin.index') }}" class="btn btn-secondary">Cancel</a>
        @endif
      </div>
    </div>
  </form>

  <hr>

  <h4 class="mt-4">All Products</h4>

  <table class="table table-bordered table-striped mt-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Main Category</th>
        <th>Sub Category</th>
        <th>Price</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>
          @if($item->image)
            <img src="{{ asset('storage/' . $item->image) }}" width="60">
          @endif
        </td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->main_category }}</td>
        <td>{{ $item->sub_category }}</td>
        <td>₹{{ $item->price }}</td>
        <td>
          <a href="{{ route('admin.products.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
          <form action="{{ route('admin.products.destroy', $item->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this product?')">Delete</button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="7" class="text-center">No products found</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
