@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">All Blogs</h4>
        <a href="{{ route('admin.allblogs.create') }}" class="btn btn-success">
            <i class="fas fa-plus me-2"></i>Add Blog
        </a>
    </div>

    <!-- Search Card -->
    <div class="card shadow-sm mb-3">
        <div class="card-body">
            <form id="searchForm" method="GET" action="{{ route('admin.allblogs.index') }}">
                <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                            <input type="text" id="searchInput" name="search" class="form-control border-start-0" placeholder="Search blogs..." value="{{ $search ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-2 d-flex ">
                        <button type="submit" class="btn btn-light border rounded-pill p-2" style="width: 40px;height:40px;">
                            <i class="fas fa-filter fa-lg"></i>
                        </button>
                        <div class="spinner-border text-primary d-none ms-2" id="loadingIndicator" role="status" style="width: 1.5rem; height: 1.5rem;">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success" id="successAlert">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0 align-middle">
                    <thead class="table-light text-center">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Short Description</th>
                            <th>Image</th>
                            <th>Publisher</th>
                            <th>Publish Date</th>
                            <th width="140px">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse($blogs as $blog)
                        <tr>
                            <td>{{ $blogs->firstItem() + $loop->index }}</td>
                            <td>{{ $blog->title }}</td>
                            <td class="text-truncate" style="max-width: 250px;">
                                {{ Str::limit($blog->short_description, 60) }}
                            </td>
                            <td>
                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" width="70" class="rounded">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $blog->publisher ?? '-' }}</td>
                            <td>{{ $blog->publish_date ?? '-' }}</td>
                            <td>
                                <a href="{{ route('admin.allblogs.edit', $blog->id) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.allblogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Delete this blog?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <h5>No blogs found</h5>
                                    <p>Try adjusting your search or filters.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($blogs->hasPages())
            <div class="card-footer bg-white">
                {{ $blogs->links('pagination::bootstrap-5') }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

<script>
    /* ===============================
       AUTO HIDE SUCCESS MESSAGE
    ================================ */
    const successAlert = document.getElementById('successAlert');
    if (successAlert) {
        setTimeout(() => {
            successAlert.style.transition = 'opacity 0.5s ease';
            successAlert.style.opacity = '0';
            setTimeout(() => successAlert.remove(), 500);
        }, 3000);
    }

    /* ===============================
       AUTO SEARCH WITH LOADING INDICATOR
    ================================ */
    let searchTimeout;
    const searchInput = document.getElementById('searchInput');
    const searchForm = document.getElementById('searchForm');
    const loadingIndicator = document.getElementById('loadingIndicator');

    const showLoading = () => {
        loadingIndicator?.classList.remove('d-none');
    };

    searchInput?.addEventListener('input', () => {
        clearTimeout(searchTimeout);
        showLoading();
        searchTimeout = setTimeout(() => {
            searchForm.submit();
        }, 300);
    });
</script>
