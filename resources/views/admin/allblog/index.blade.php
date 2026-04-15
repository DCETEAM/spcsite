@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">All Blogs</h4>
        <a href="{{ route('admin.allblogs.create') }}" class="btn btn-success">
            + Add Blog
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped mb-0 align-middle">
            <thead class="table-light text-center">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Short Description</th>
                    <th>Image</th>
                    <th>Publisher</th>
                    <th>Publish Date</th>
                    <th width="140px">Actions</th>
                </tr>
            </thead>

            <tbody class="text-center">
                @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>

                    <td style="max-width: 250px;">
                        {{ Str::limit($blog->short_description, 60) }}
                    </td>

                    <td>
                        @if($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}"
                                 width="70" class="rounded">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>

                    <td>{{ $blog->publisher ?? '--' }}</td>
                    <td>{{ $blog->publish_date ?? '--' }}</td>

                    <td>
                        <a href="{{ route('admin.allblogs.edit', $blog->id) }}"
                           class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ route('admin.allblogs.destroy', $blog->id) }}"
                              method="GET"
                              class="d-inline">

                            <button class="btn btn-outline-danger btn-sm"
                                    onclick="return confirm('Delete this blog?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <div class="mt-3">
        {{ $blogs->links() }}
    </div>

</div>
@endsection
