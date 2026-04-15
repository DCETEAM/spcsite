@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Subcategories</h4>
        <a href="{{ route('admin.subcategories.create') }}" class="btn btn-success">
            + Add Subcategory
        </a>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th width="5%">#</th>
                            <th>Main Category</th>
                            <th>Subcategory Name</th>
                            <th>Image</th>
                            <th>Position</th>
                            <th width="20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($subcategories as $subcategory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $subcategory->maincategory->maincategory_name ?? 'N/A' }}</td>
                                <td>{{ $subcategory->subcategory_name }}</td>
                                <td>
                                    @if($subcategory->subcategory_image)
                                        <img src="{{ asset('storage/' . $subcategory->subcategory_image) }}" alt="{{ $subcategory->subcategory_name }}" width="60" class="rounded">
                                    @else
                                        <small class="text-muted">No Image</small>
                                    @endif
                                </td>
                                <td>{{ $subcategory->position }}</td>
                                <td>
                                    <a href="{{ route('admin.subcategories.edit', $subcategory->subcategory_id) }}" class="btn btn-outline-primary btn-sm "> <i class="fas fa-edit"></i></a>

                                    <form action="{{ route('admin.subcategories.destroy', $subcategory->subcategory_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this subcategory?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm ">
                                            <i class="fas fa-trash-alt"></i> 
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-3">
                                    No subcategories found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
