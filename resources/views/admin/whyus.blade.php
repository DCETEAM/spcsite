@extends('admin.layout')

@section('content')

<form action="{{ route('admin.whyus.update') }}" method="POST" enctype="multipart/form-data">
@csrf

<h3>Section Title</h3>
<input type="text" name="title" value="{{ $data->title ?? '' }}" class="form-control">

<textarea name="description" class="form-control mt-2" rows="4">{{ $data->description ?? '' }}</textarea>

<br><h3>Stats Section</h3>

@for($i = 1; $i <= 4; $i++)
<div class="row mb-2">
    <div class="col">
        <select name="stat{{$i}}_icon" class="form-control">
            <option value="">-- Select Icon --</option>

            @php
            $icons = [
                'fa fa-industry' => 'Injection Moulding Machines',
                'fa fa-cogs' => 'Machinery',
                'fa fa-warehouse' => 'Production Area (Sq.ft)',
                'fa fa-building' => 'Factory / Area',
                'fa fa-boxes' => 'Product Variants',
                'fa fa-list-alt' => 'Listing / Variants',
                'fa fa-chart-line' => 'Processing Capacity',
                'fa fa-tachometer-alt' => 'Speed / Capacity',
                'fa fa-award' => 'Award / Certification',
                'fa fa-users' => 'Clients / Users',
                'fa fa-star' => 'Rating',
            ];
            @endphp

            @foreach($icons as $value => $label)
                <option value="{{ $value }}"
                    {{ (isset($data->{'stat'.$i.'_icon'}) && $data->{'stat'.$i.'_icon'} == $value) ? 'selected' : '' }}>
                    {{ $label }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col">
        <input type="text" name="stat{{$i}}_value"
               value="{{ $data->{'stat'.$i.'_value'} ?? '' }}"
               placeholder="Value"
               class="form-control">
    </div>

    <div class="col">
        <input type="text" name="stat{{$i}}_title"
               value="{{ $data->{'stat'.$i.'_title'} ?? '' }}"
               placeholder="Title"
               class="form-control">
    </div>
</div>
@endfor
<br><h3>Certificates (Unlimited Upload)</h3>

<div class="mb-3">
    <label class="form-label fw-bold">
        Upload Certificates <small class="text-muted">(Max 2MB each)</small>
    </label>

    <input type="file"
           name="certificates[]"
           id="certificates"
           multiple
           class="form-control">

    <small id="certificateError" class="text-danger d-none">
        Image size exceeds 2 MB.
    </small>
</div>

<button class="btn btn-success mt-3">Save</button>
</form>  <!-- 🚀 MAIN FORM ENDS HERE -->


{{-- Certificate List Section (OUTSIDE the form!) --}}
@if($certificates->count())
<h4 class="mt-4">Existing Certificates</h4>

<div class="row g-3 mt-2">
    @foreach($certificates as $cert)
    <div class="col-md-3 col-6 text-center">

        <div class="border rounded p-2 position-relative" style="background:#f9f9f9;">

            <!-- Delete Button -->
            <form action="{{ route('admin.whyus.certificate.delete', $cert->id) }}"
                  method="POST"
                  onsubmit="return confirm('Delete this certificate?');"
                  class="position-absolute"
                  style="top:5px; right:5px;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" style="padding:2px 6px;">
                    <i class="fa fa-trash"></i>
                </button>
            </form>

            <!-- Certificate Image -->
            <img src="{{ asset('storage/'.$cert->image) }}"
                 class="img-fluid mb-2"
                 style="height:100px; object-fit:contain;">
        </div>

    </div>
    @endforeach
</div>
@endif
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ===============================
       MULTIPLE CERTIFICATE SIZE CHECK
    ================================ */
    const MAX_SIZE_MB = 2;
    const MAX_SIZE_BYTES = MAX_SIZE_MB * 1024 * 1024;

    const input = document.getElementById('certificates');
    const error = document.getElementById('certificateError');

    input.addEventListener('change', function () {

        error.classList.add('d-none');
        input.classList.remove('is-invalid');

        const validFiles = [];
        let hasInvalid = false;

        for (let file of input.files) {
            if (file.size <= MAX_SIZE_BYTES) {
                validFiles.push(file);
            } else {
                hasInvalid = true;
            }
        }

        if (hasInvalid) {
            error.classList.remove('d-none');
            input.classList.add('is-invalid');

            // rebuild FileList with only valid files
            const dataTransfer = new DataTransfer();
            validFiles.forEach(file => dataTransfer.items.add(file));
            input.files = dataTransfer.files;
        }
    });

});
</script>

@endsection
