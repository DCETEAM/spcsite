@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Product List</h4>
        <a href="{{ route('admin.products.create') }}" class="btn btn-success">
            <i class="fas fa-plus me-2"></i>Add Product
        </a>
    </div>

    <!-- Search and Filter Card -->
    <div class="card shadow-sm mb-3">
        <div class="card-body">
            <form id="searchForm" method="GET" action="{{ route('admin.products.index') }}">
                <div class="row g-3 align-items-center">
                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                            <input type="text" id="searchInput" name="search" class="form-control border-start-0" placeholder="Search products..." value="{{ $search ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select id="mainCategorySelect" name="main_category" class="form-select">
                            <option value="">All Categories</option>
                            @foreach($mainCategories as $mainCat)
                                <option value="{{ $mainCat->maincategory_id }}" {{ $mainCategoryId == $mainCat->maincategory_id ? 'selected' : '' }}>
                                    {{ $mainCat->maincategory_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select id="titleSelect" name="title" class="form-select">
                            <option value="">All Products</option>
                            @foreach($titles as $titleItem)
                                <option value="{{ $titleItem->title }}" {{ $title == $titleItem->title ? 'selected' : '' }}>
                                    {{ $titleItem->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-1 d-flex ">
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
                    <thead class="table-light">
                        <tr class="text-center">
                            <th>#</th>
                            <th>Main Categories</th>
                            <th>Subcategories</th>
                            <th>Title</th>
                            <th>Code</th>
                            <th>Weight</th>
                            <th>Volume</th>
                            <th>Image</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($products as $product)
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
                                <td>{{ $products->firstItem() + $loop->index }}</td>
                                <td>{{ implode(', ', $mainNames) ?: '-' }}</td>
                                <td>{{ implode(', ', $subNames) ?: '-' }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->code ?? '-' }}</td>
                                <td>{{ $product->product_weight ?? '-' }}</td>
                                <td>{{ $product->brimful_volume ?? '-' }}</td>
                                <td>
                                    @if ($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" width="60" alt="" class="rounded">
                                    @endif
                                </td>
                                <td class="text-truncate" style="max-width: 150px;">{{ $product->slug ?? '-' }}</td>
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
                        @empty
                            <tr>
                                <td colspan="10" class="text-center py-4 text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <h5>No products found</h5>
                                    <p>Try adjusting your search or filters.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($products->hasPages())
            <div class="card-footer bg-white">
                {{ $products->links('pagination::bootstrap-5') }}
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
    const titleSelect = document.getElementById('titleSelect');
    const searchForm = document.getElementById('searchForm');
    const loadingIndicator = document.getElementById('loadingIndicator');

    // Debug: log element existence
    console.log('Debug: Elements found', { 
        searchInput, 
        mainCategorySelect, 
        titleSelect, 
        searchForm, 
        loadingIndicator 
    });

    // Show loading indicator
    const showLoading = () => {
        console.log('Debug: Showing loading indicator');
        loadingIndicator?.classList.remove('d-none');
    };

    // Auto-search on input
    searchInput?.addEventListener('input', () => {
        console.log('Debug: Search input changed');
        clearTimeout(searchTimeout);
        showLoading();
        searchTimeout = setTimeout(() => {
            console.log('Debug: Submitting search form');
            searchForm.submit();
        }, 300);
    });

    // Auto-search on select change
    mainCategorySelect?.addEventListener('change', () => {
        console.log('Debug: Main category select changed');
        showLoading();
        searchForm.submit();
    });

    // Auto-search on title select change
    titleSelect?.addEventListener('change', () => {
        console.log('Debug: Title select changed');
        showLoading();
        searchForm.submit();
    });
</script>
