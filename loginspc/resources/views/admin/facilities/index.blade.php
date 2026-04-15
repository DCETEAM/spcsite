@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Facilities List</h3>
        <a href="{{ route('admin.facilities.create') }}" class="btn btn-success">+ Add Facility</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0 table-responsive">
            <table class="table table-striped mb-0">
                <thead class="table-light text-center">
                    <tr>
                           <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                      
                        <th width="160">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($facilities as $facility)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $facility->title }}</td>

                        <td>
                            @if($facility->image)
                                <img src="{{ asset('storage/'.$facility->image) }}" width="60" height="60" class="rounded">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('admin.facilities.edit', $facility->id) }}" class="btn btn-outline-primary btn-sm "> <i class="fas fa-edit"></i></a>

                            <form action="{{ route('admin.facilities.delete', $facility->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-outline-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                    @if($facilities->count() == 0)
                    <tr>
                        <td colspan="5" class="text-center p-4">No Facilities Added Yet</td>
                    </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
