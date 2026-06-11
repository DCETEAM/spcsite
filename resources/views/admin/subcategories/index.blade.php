@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Subcategories</h4>
        <a href="{{ route('admin.subcategories.create') }}" class="btn btn-success">
            <i class="fas fa-plus me-2"></i>Add Subcategory
        </a>
    </div>

    <!-- Search and Filter Card -->
    <div class="card shadow-sm mb-3">
        <div class="card-body">
            <form id="searchForm" method="GET" action="{{ route('admin.subcategories.index') }}">
                <div class="row g-3 align-items-center">
                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                            <input type="text" id="searchInput" name="search" class="form-control border-start-0" placeholder="Search subcategories..." value="{{ $search ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <select id="mainCategorySelect" name="main_category" class="form-select">
                            <option value="">All Categories</option>
                            @foreach($mainCategories as $mainCat)
                                <option value="{{ $mainCat->maincategory_id }}" {{ $mainCategoryId == $mainCat->maincategory_id ? 'selected' : '' }}>
                                    {{ $mainCat->maincategory_name }}
                                </option>
                            @endforeach
                        </select>
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

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success" id="successAlert">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0 align-middle">
                    <thead class="table-light text-center">
                        <tr>
                            <th width="5%">#</th>
                            <th>Main Category</th>
                            <th>Subcategory Name</th>
                            <th>Image</th>
                            <th>Position</th>
                            <th width="20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse($subcategories as $subcategory)
                            <tr>
                                <td>{{ $subcategories->firstItem() + $loop->index }}</td>
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
                                    <a href="{{ route('admin.subcategories.edit', $subcategory->subcategory_id) }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.subcategories.destroy', $subcategory->subcategory_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this subcategory?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <h5>No subcategories found</h5>
                                    <p>Try adjusting your search or filters.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($subcategories->hasPages())
            <div class="card-footer bg-white">
                {{ $subcategories->links('pagination::bootstrap-5') }}
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
    const mainCategorySelect = document.getElementById('mainCategorySelect');
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

    mainCategorySelect?.addEventListener('change', () => {
        showLoading();
        searchForm.submit();
    });
</script>
