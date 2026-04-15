@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Product List</h4>
        <a href="{{ route('admin.products.create') }}" class="btn btn-success">+ Add Product</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped mb-0 align-middle">
            <thead class="table-light">
                <tr class="text-center">
                    <th>#</th>
                    <th>Main Categories</th>
                    <th>Subcategories</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($products as $product)
                    @php
                        $mainNames = collect($product->main_category_ids ?? [])
                            ->map(fn($id) => $mainMap[$id] ?? null)
                            ->filter()
                            ->values()
                            ->all();

                        $subNames = collect($product->sub_category_ids ?? [])
                            ->map(fn($id) => $subMap[$id] ?? null)
                            ->filter()
                            ->values()
                            ->all();
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ implode(', ', $mainNames) ?: '-' }}</td>
                        <td>{{ implode(', ', $subNames) ?: '-' }}</td>
                        <td>{{ $product->title }}</td>
                        <td>
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" width="60" alt="">
                            @endif
                        </td>
                        <td>{{ $product->slug ?? '-' }}</td>
                        <td>
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Delete this product?')" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection