@extends('admin.layout')

@section('content')
<div class="container mt-4">

 <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Main Categories</h4>
        <a href="{{ route('admin.maincategories.create') }}" class="btn btn-success">
            + Add  Main Category
        </a>
    </div>
    <div class="table-responsive">
   <table class="table table-bordered table-striped mb-0 align-middle">
                    <thead class="table-light text-center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($maincategories as $m)
            <tr>
                <td>{{ $m->maincategory_id }}</td>
                <td>{{ $m->maincategory_name }}</td>
                <td>
                    @if($m->maincategory_image)
                       <img src="{{ asset('storage/' . $m->maincategory_image) }}" width="60">

                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.maincategories.edit', $m->maincategory_id) }}" class="btn btn-outline-primary btn-sm "> <i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.maincategories.destroy', $m->maincategory_id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm " onclick="return confirm('Delete this category?')"><i class="fas fa-trash-alt"></i> </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
