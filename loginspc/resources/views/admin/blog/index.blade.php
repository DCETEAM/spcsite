<table class="table table-bordered">
    <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Date</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td><img src="{{ asset('storage/blogs/'.$blog->image) }}" width="60"></td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->publish_date }}</td>
            <td>{{ $blog->author }}</td>
            <td>
                <a href="{{ route('admin.blog.edit',$blog->id) }}" class="btn btn-sm btn-info">Edit</a>
                <a href="{{ route('admin.blog.delete',$blog->id) }}" class="btn btn-sm btn-danger"
                   onclick="return confirm('Delete?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $blogs->links() }}
