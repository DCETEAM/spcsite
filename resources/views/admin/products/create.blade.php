@extends('admin.layout')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Add New Product</h4>
        </div>
        <div class="card-body">

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Please fix the following:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
        @csrf
        <div class="row">
      <div class="col-md-4 col-sm-6 mb-3">
        <label>Main Category <span class="text-danger">*</span></label>
        <select name="main_category_ids[]" id="main_category" class="form-control @error('main_category_ids') is-invalid @enderror" multiple required>
            @foreach($maincategories as $main)
                <option value="{{ $main->maincategory_id }}" {{ collect(old('main_category_ids', []))->contains($main->maincategory_id) ? 'selected' : '' }}>{{ $main->maincategory_name }}</option>
            @endforeach
        </select>
        @error('main_category_ids')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>
      {{-- multiselect and save --}}

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Subcategory <span class="text-danger">*</span></label>
        <select name="sub_category_ids[]" id="sub_category" class="form-control @error('sub_category_ids') is-invalid @enderror" multiple required>
            @foreach($subcategories as $sub)
                <option value="{{ $sub->subcategory_id }}" {{ collect(old('sub_category_ids', []))->contains($sub->subcategory_id) ? 'selected' : '' }}>{{ $sub->subcategory_name }}</option>
            @endforeach
        </select>
        @error('sub_category_ids')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Title <span class="text-danger">*</span></label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Subtitle</label>
        <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}">
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Slug <small class="text-muted">(Auto-generated)</small></label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" readonly>
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Code</label>
        <input type="text" name="code" class="form-control" value="{{ old('code') }}" placeholder="e.g. P001">
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Product Weight <span class="text-danger">*</span></label>
        <input type="text" name="product_weight" class="form-control @error('product_weight') is-invalid @enderror" value="{{ old('product_weight') }}" placeholder="e.g. 500 gm" required>
        @error('product_weight')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Brimful Volume <span class="text-danger">*</span></label>
        <input type="text" name="brimful_volume" class="form-control @error('brimful_volume') is-invalid @enderror" value="{{ old('brimful_volume') }}" placeholder="e.g. 750 ml" required>
        @error('brimful_volume')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

    <div class="col-md-4 col-sm-6 mb-3">
    <label>Image <span class="text-danger">*</span> <small class="text-muted">(Max 4MB)</small></label>
    <input type="file" name="image" id="product_image" class="form-control @error('image') is-invalid @enderror" required>

    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <small id="imageError" class="text-danger d-none">
        Image size must be less than 4 MB
    </small>
</div>


      <div class="col-md-6 col-sm-6 mb-3">
        <label>Description <span class="text-danger">*</span></label>
        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5" required>{{ old('description') }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-6 col-sm-6 mb-3">
        <label>Features <span class="text-danger">*</span></label>
        <textarea name="features" id="features" class="form-control @error('features') is-invalid @enderror" placeholder="Enter each feature ending with a full stop (.). Example: High-Quality HDPE Material – Provides excellent resistance to chemicals. Leak-Proof & Airtight Seal – Ensures safe storage and transport." rows="5" required>{{ old('features') }}</textarea>
        @error('features')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      </div>
      <button class="btn btn-success">Save Product</button>
          <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
      
    </form>
</div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
const MAX_SIZE_MB = 4;
    const MAX_SIZE_BYTES = MAX_SIZE_MB * 1024 * 1024;

    const imageInput = document.getElementById('product_image');
    const imageError = document.getElementById('imageError');

    imageInput.addEventListener('change', function () {

        // reset state
        imageError.classList.add('d-none');
        imageInput.classList.remove('is-invalid');

        const file = this.files[0];

        if (file && file.size > MAX_SIZE_BYTES) {
            imageError.classList.remove('d-none');
            imageInput.classList.add('is-invalid');
            // this.value = ""; // clear invalid file
        }
    });


    // Laravel generates full correct URL (local + server + /spc)
    const multiSubURL = "{{ url('admin/get-subcategories-multi') }}";

    // Initialize Choices.js for main categories
    const mainChoices = new Choices('#main_category', {
        removeItemButton: true,
        searchPlaceholderValue: 'Search main categories...',
        placeholder: true,
    });

    // Initialize Choices.js for subcategories
    const subChoices = new Choices('#sub_category', {
        removeItemButton: true,
        searchPlaceholderValue: 'Search subcategories...',
        placeholder: true,
    });

    // Dynamic subcategory loading
    document.getElementById('main_category').addEventListener('change', function () {

        const selectedMainIds = Array.from(this.selectedOptions).map(o => o.value);

        if (selectedMainIds.length === 0) {
            subChoices.clearChoices();
            return;
        }

        // Correct universal fetch URL
        fetch(`${multiSubURL}?ids=${selectedMainIds.join(',')}`)
            .then(res => res.json())
            .then(data => {
                subChoices.clearChoices();
                if (Array.isArray(data) && data.length > 0) {
                    subChoices.setChoices(
                        data.map(sub => ({
                            value: String(sub.subcategory_id),
                            label: sub.subcategory_name
                        })),
                        'value',
                        'label',
                        true
                    );
                }
            })
            .catch(err => console.error('Error fetching subcategories:', err));
    });

    // Track main category selection order
    let selectedMainCategoriesOrder = [];
    
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
    document.getElementById('main_category').addEventListener('change', function(e) {
        const selectedOptions = Array.from(this.selectedOptions);
        const selectedTexts = selectedOptions.map(opt => opt.text.trim());
        
        // If adding new category
        if (e.target.selectedOptions.length > selectedMainCategoriesOrder.length) {
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

    document.getElementById('productForm').addEventListener('submit', function (e) {
        const missing = [];

        const mainCategory = document.getElementById('main_category');
        if (!mainCategory.selectedOptions.length) {
            missing.push('Main Category');
            mainCategory.classList.add('is-invalid');
        } else {
            mainCategory.classList.remove('is-invalid');
        }

        const subCategory = document.getElementById('sub_category');
        if (!subCategory.selectedOptions.length) {
            missing.push('Subcategory');
            subCategory.classList.add('is-invalid');
        } else {
            subCategory.classList.remove('is-invalid');
        }

        const requiredInputs = [
            { el: document.querySelector('input[name="title"]'), label: 'Title' },
            { el: document.querySelector('input[name="product_weight"]'), label: 'Product Weight' },
            { el: document.querySelector('input[name="brimful_volume"]'), label: 'Brimful Volume' },
            { el: document.getElementById('description'), label: 'Description' },
            { el: document.getElementById('features'), label: 'Features' },
        ];

        requiredInputs.forEach(({ el, label }) => {
            if (!el || !el.value.trim()) {
                missing.push(label);
                el.classList.add('is-invalid');
            } else {
                el.classList.remove('is-invalid');
            }
        });

        const imageInput = document.getElementById('product_image');
        if (!imageInput.files.length) {
            missing.push('Image');
            imageInput.classList.add('is-invalid');
        } else {
            imageInput.classList.remove('is-invalid');
        }

        if (missing.length) {
            e.preventDefault();
            alert('Please fill in the following required fields:\n\n- ' + missing.join('\n- '));
            return false;
        }
    });

    document.querySelectorAll('#productForm input, #productForm textarea, #productForm select').forEach(function (field) {
        field.addEventListener('input', function () {
            if (this.type === 'file' ? this.files.length : this.value.trim()) {
                this.classList.remove('is-invalid');
            }
        });
        field.addEventListener('change', function () {
            if (this.type === 'file' ? this.files.length : this.value.trim() || this.selectedOptions?.length) {
                this.classList.remove('is-invalid');
            }
        });
    });
    
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