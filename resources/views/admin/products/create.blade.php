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

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
      <div class="col-md-4 col-sm-6 mb-3">
        <label>Main Category</label>
        <select name="main_category_ids[]" id="main_category" class="form-control" multiple required>
            @foreach($maincategories as $main)
                <option value="{{ $main->maincategory_id }}">{{ $main->maincategory_name }}</option>
            @endforeach
        </select>
      </div>
      {{-- multiselect and save --}}

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Subcategory</label>
        <select name="sub_category_ids[]" id="sub_category" class="form-control" multiple>
            @foreach($subcategories as $sub)
                <option value="{{ $sub->subcategory_id }}">{{ $sub->subcategory_name }}</option>
            @endforeach
        </select>
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Subtitle</label>
        <input type="text" name="subtitle" class="form-control">
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter slug (e.g. 20-litre-bucket)" required>
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Code</label>
        <input type="text" name="code" class="form-control" placeholder="e.g. P001">
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Product Weight</label>
        <input type="text" name="product_weight" class="form-control" placeholder="e.g. 500 gm">
      </div>

      <div class="col-md-4 col-sm-6 mb-3">
        <label>Brimful Volume</label>
        <input type="text" name="brimful_volume" class="form-control" placeholder="e.g. 750 ml">
      </div>

    <div class="col-md-4 col-sm-6 mb-3">
    <label>Image <small class="text-muted">(Max 2MB)</small></label>
    <input type="file" name="image" id="product_image" class="form-control">

    <small id="imageError" class="text-danger d-none">
        Image size must be less than 2 MB
    </small>
</div>


      <div class="col-md-6 col-sm-6 mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" rows="5"></textarea>
      </div>

      <div class="col-md-6 col-sm-6 mb-3">
        <label>Features</label>
        <textarea name="features" class="form-control" placeholder="Enter: Product features separated by commas." rows="5"></textarea>
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
const MAX_SIZE_MB = 2;
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

    // Auto-format slug
    document.getElementById('slug').addEventListener('input', function () {
        this.value = this.value
            .toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
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