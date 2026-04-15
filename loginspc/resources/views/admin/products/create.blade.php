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
        <label>Image</label>
        <input type="file" name="image" class="form-control">
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

});
</script>

@endsection