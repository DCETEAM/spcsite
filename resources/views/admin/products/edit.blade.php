@extends('admin.layout')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Edit Product</h4>
        </div>
        <div class="card-body">

            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    {{-- ✅ MAIN CATEGORY --}}
                    <div class="col-md-4 col-sm-6 mb-3">
                        <label>Main Category</label>
                        <select name="main_category_ids[]" id="main_category" class="form-control" multiple required>
                            @foreach($maincategories as $main)
                                <option value="{{ $main->maincategory_id }}"
                                    {{ in_array($main->maincategory_id, $selectedMainCategories ?? []) ? 'selected' : '' }}>
                                    {{ $main->maincategory_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- ✅ SUBCATEGORY — leave EMPTY; will be filled dynamically by JS --}}
                    <div class="col-md-4 col-sm-6 mb-3">
                        <label>Subcategory</label>
                        <select name="sub_category_ids[]" id="sub_category" class="form-control" multiple></select>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $product->title) }}" required>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-3">
                        <label>Subtitle</label>
                        <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $product->subtitle) }}">
                    </div>

                    <div class="col-md-4 col-sm-6 mb-3">
                        <label>Slug <small class="text-muted">(Auto-generated)</small></label>
                        <input type="text" name="slug" id="slug" class="form-control"
                               value="{{ old('slug', $product->slug) }}" readonly>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-3">
                        <label>Code</label>
                        <input type="text" name="code" class="form-control" value="{{ old('code', $product->code) }}" placeholder="e.g. P001">
                    </div>

                    <div class="col-md-4 col-sm-6 mb-3">
                        <label>Product Weight</label>
                        <input type="text" name="product_weight" class="form-control" value="{{ old('product_weight', $product->product_weight) }}" placeholder="e.g. 500 gm">
                    </div>

                    <div class="col-md-4 col-sm-6 mb-3">
                        <label>Brimful Volume</label>
                        <input type="text" name="brimful_volume" class="form-control" value="{{ old('brimful_volume', $product->brimful_volume) }}" placeholder="e.g. 750 ml">
                    </div>

                   <div class="col-md-4 col-sm-6 mb-3">
    <label>Image <small class="text-muted">(Max 2MB)</small></label><br>

    @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" width="80" class="mb-2 rounded">
    @endif

    <input type="file" name="image" id="product_image" class="form-control">

    <small id="imageError" class="text-danger d-none">
        Image size must be less than 2 MB
    </small>
</div>

                    <div class="col-md-6 col-sm-6 mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="5">{{ old('description', $product->description) }}</textarea>
                    </div>

                    <div class="col-md-6 col-sm-6 mb-3">
                        <label>Features</label>
                        <textarea name="features" class="form-control" rows="5">{{ old('features', $product->features) }}</textarea>
                    </div>

                </div>

                <button class="btn btn-success">Update Product</button>
            </form>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
  
    const imageInput = document.getElementById('product_image');
    const imageError = document.getElementById('imageError');

    const MAX_SIZE_MB = 2;
    const MAX_SIZE_BYTES = MAX_SIZE_MB * 1024 * 1024;
   

    imageInput.addEventListener('change', function () {

        imageError.classList.add('d-none');
        imageInput.classList.remove('is-invalid');

        const file = this.files[0];

        if (file && file.size > MAX_SIZE_BYTES) {
            imageError.classList.remove('d-none');
            imageInput.classList.add('is-invalid');
            // this.value = ""; // clear file
        }
    });

    const initialMainIds = @json($selectedMainCategories ?? []);
    const initialSubIds  = @json($selectedSubCategories ?? []);

    const mainEl = document.getElementById('main_category');
    const subEl  = document.getElementById('sub_category');

    const mainChoices = new Choices('#main_category', {
        removeItemButton: true,
        searchPlaceholderValue: 'Search main categories...',
        placeholder: true,
    });

    const subChoices = new Choices('#sub_category', {
        removeItemButton: true,
        searchPlaceholderValue: 'Search subcategories...',
        placeholder: true,
    });

    // Function to load subcategories
    const loadSubcategories = (mainIds, presetSelected = []) => {
        if (!mainIds.length) {
            subChoices.clearStore();
            subChoices.clearChoices();
            return;
        }

        // ✅ Auto-corrects URL for localhost + /spc + live
        const fetchURL = `{{ url('admin/get-subcategories-multi') }}?ids=${mainIds.join(',')}`;

        fetch(fetchURL)
            .then(res => res.json())
            .then(data => {

                // Prevent duplication
                subChoices.clearStore();
                subChoices.clearChoices();

                if (Array.isArray(data) && data.length > 0) {

                    const selectedSet = new Set(presetSelected.map(String));

                    subChoices.setChoices(
                        data.map(sub => ({
                            value: String(sub.subcategory_id),
                            label: sub.subcategory_name,
                            selected: selectedSet.has(String(sub.subcategory_id))
                        })),
                        'value',
                        'label',
                        true
                    );
                }
            })
            .catch(err => console.error('Error fetching subcategories:', err));
    };

    // Initial load
    if (initialMainIds.length) {
        loadSubcategories(initialMainIds, initialSubIds);
    }

    // Reload when main categories change
    mainEl.addEventListener('change', function () {
        const selectedMainIds = Array.from(this.selectedOptions).map(o => o.value);
        const currentSubIds = Array.from(subEl.selectedOptions).map(o => o.value);
        loadSubcategories(selectedMainIds, currentSubIds);
    });

    // Track main category selection order
    let selectedMainCategoriesOrder = [];
    
    // Initialize with currently selected categories
    const mainSelect = document.getElementById('main_category');
    selectedMainCategoriesOrder = Array.from(mainSelect.selectedOptions).map(opt => opt.text.trim());
    
    // Auto-generate slug: title + plastic-bucket-used-in + main categories (in selection order)
    function generateSlug() {
        const title = document.querySelector('input[name="title"]').value.trim();
        
        let slugParts = [];
        if (title) slugParts.push(title);
        slugParts.push('plastic bucket used in');
        
        // Use selection order instead of DOM order
        selectedMainCategoriesOrder.forEach(catName => {
            slugParts.push(catName);
        });
        
        const slug = slugParts.join(' ')
            .toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
        
        document.getElementById('slug').value = slug;
    }
    
    // Track selection order and generate slug
    mainSelect.addEventListener('change', function(e) {
        const selectedOptions = Array.from(this.selectedOptions);
        const selectedTexts = selectedOptions.map(opt => opt.text.trim());
        
        // If adding new category
        if (selectedTexts.length > selectedMainCategoriesOrder.length) {
            // Find the newly added one
            const newCats = selectedTexts.filter(cat => !selectedMainCategoriesOrder.includes(cat));
            selectedMainCategoriesOrder.push(...newCats);
        } else {
            // Removing - keep only those still selected
            selectedMainCategoriesOrder = selectedMainCategoriesOrder.filter(cat => selectedTexts.includes(cat));
        }
        
        generateSlug();
    });
    
    // Generate slug on title input
    document.querySelector('input[name="title"]').addEventListener('input', generateSlug);


    
    /* ===============================
       AUTO HIDE SUCCESS MESSAGE
    ================================ */
    const successAlert = document.getElementById('successAlert');
    if (successAlert) {
        setTimeout(() => {
            successAlert.style.transition = 'opacity 0.5s ease';
            successAlert.style.opacity = '0';

            setTimeout(() => successAlert.remove(), 500);
        }, 3000); // 3 seconds
    }
});
</script>

@endsection
