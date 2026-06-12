@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Main Categories</h4>
        <a href="{{ route('admin.maincategories.create') }}" class="btn btn-success">
            <i class="fas fa-plus me-2"></i>Add Main Category
        </a>
    </div>

    <!-- Search Card -->
    <div class="card shadow-sm mb-3">
        <div class="card-body">
            <form id="searchForm" method="GET" action="{{ route('admin.maincategories.index') }}">
                <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                            <input type="text" id="searchInput" name="search" class="form-control border-start-0" placeholder="Search main categories..." value="{{ $search ?? '' }}">
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
                            <th>Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse($maincategories as $m)
                        <tr>
                            <td>{{ $maincategories->firstItem() + $loop->index }}</td>
                            <td>{{ $m->maincategory_name }}</td>
                            <td>
                                @if($m->maincategory_image)
                                   <img src="{{ asset('storage/' . $m->maincategory_image) }}" width="60" class="rounded">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.maincategories.edit', $m->maincategory_id) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.maincategories.destroy', $m->maincategory_id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Delete this category?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <h5>No main categories found</h5>
                                    <p>Try adjusting your search or filters.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($maincategories->hasPages())
            <div class="card-footer bg-white">
                {{ $maincategories->links('pagination::bootstrap-5') }}
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
