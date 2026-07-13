@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Site Theme</h4>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <p class="text-muted mb-4">
                Colors, fonts, and text styles apply across the public site — sections, cards, footer, and product pages.
            </p>

            <form action="{{ route('admin.theme.update') }}" method="POST" id="theme-form" enctype="multipart/form-data">
                @csrf

                <h5 class="mb-3">Colors</h5>
                <div class="row g-4 mb-4">
                    @foreach([
                        'accent' => 'Accent (links, buttons, highlights)',
                        'accent_dark' => 'Accent hover / dark',
                        'hero_navy' => 'Navy (header, dark sections)',
                        'hero_gold' => 'Gold (badges, accents)',
                        'hero_blue' => 'Blue (icons, gradients)',
                        'footer_bg' => 'Footer background',
                    ] as $field => $label)
                    <div class="col-md-6 col-lg-4">
                        <label class="form-label fw-semibold">{{ $label }}</label>
                        <div class="input-group">
                            <input type="color"
                                   class="form-control form-control-color theme-color-picker"
                                   data-target="{{ $field }}"
                                   value="{{ old($field, $theme->$field) }}"
                                   title="Pick {{ $label }}">
                            <input type="text"
                                   name="{{ $field }}"
                                   id="{{ $field }}"
                                   class="form-control theme-hex-input @error($field) is-invalid @enderror"
                                   value="{{ old($field, $theme->$field) }}"
                                   pattern="^#[0-9A-Fa-f]{6}$"
                                   maxlength="7"
                                   required>
                        </div>
                        @error($field)
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    @endforeach
                </div>

                <h5 class="mb-3">Typography</h5>
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Body font</label>
                        <select name="font_body" id="font_body" class="form-select @error('font_body') is-invalid @enderror" required>
                            @foreach(\App\Models\SiteSetting::fontOptions() as $value => $label)
                                <option value="{{ $value }}" @selected(old('font_body', $theme->font_body) === $value)>{{ $label }}</option>
                            @endforeach
                        </select>
                        @error('font_body')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Heading / section title font</label>
                        <select name="font_heading" id="font_heading" class="form-select @error('font_heading') is-invalid @enderror" required>
                            @foreach(\App\Models\SiteSetting::fontOptions() as $value => $label)
                                <option value="{{ $value }}" @selected(old('font_heading', $theme->font_heading) === $value)>{{ $label }}</option>
                            @endforeach
                        </select>
                        @error('font_heading')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Primary text color (titles)</label>
                        <div class="input-group">
                            <input type="color" class="form-control form-control-color theme-color-picker" data-target="text_primary" value="{{ old('text_primary', $theme->text_primary ?? '#f1f5f9') }}">
                            <input type="text" name="text_primary" id="text_primary" class="form-control theme-hex-input @error('text_primary') is-invalid @enderror" value="{{ old('text_primary', $theme->text_primary ?? '#f1f5f9') }}" pattern="^#[0-9A-Fa-f]{6}$" maxlength="7" required>
                        </div>
                        @error('text_primary')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Muted text color (paragraphs)</label>
                        <input type="text" name="text_muted" id="text_muted" class="form-control @error('text_muted') is-invalid @enderror" value="{{ old('text_muted', $theme->text_muted ?? 'rgba(255,255,255,0.75)') }}" placeholder="rgba(255,255,255,0.75)" required>
                        @error('text_muted')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        <small class="text-muted">Use hex (#ffffff) or rgba()</small>
                    </div>
                </div>

                <h5 class="mb-3">Background image</h5>
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Upload site background</label>
                        <input type="file" name="bg_image" id="bg_image" accept="image/png,image/jpeg,image/webp" class="form-control @error('bg_image') is-invalid @enderror">
                        @error('bg_image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        <small class="text-muted">JPG, PNG or WEBP up to 6 MB. Leave empty to keep the current image.</small>
                        <div class="mt-3">
                            <span class="d-block small text-muted mb-1">Current background</span>
                            <img id="bg-preview" src="{{ $theme->bgImageUrl() }}" alt="Current background"
                                 style="width: 100%; max-width: 320px; height: 140px; object-fit: cover; border-radius: 8px; border: 1px solid #dee2e6;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Dark overlay strength: <span id="bg_overlay_value">{{ old('bg_overlay', $theme->bg_overlay ?? 0) }}</span>%</label>
                        <input type="range" name="bg_overlay" id="bg_overlay" min="0" max="90" step="5"
                               value="{{ old('bg_overlay', $theme->bg_overlay ?? 0) }}"
                               class="form-range @error('bg_overlay') is-invalid @enderror">
                        @error('bg_overlay')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                        <small class="text-muted d-block">Higher = darker background, so light text stays readable. Use 0 for a light image.</small>
                    </div>
                </div>

                <div class="mt-2 p-3 rounded border bg-light">
                    <p class="mb-2 fw-semibold small text-uppercase text-muted">Color preview</p>
                    <div class="d-flex flex-wrap gap-2" id="theme-preview">
                        @foreach(['accent', 'accent_dark', 'hero_navy', 'hero_gold', 'hero_blue', 'footer_bg', 'text_primary'] as $field)
                        <span class="badge rounded-pill px-3 py-2" id="preview-{{ $field }}" style="background: {{ $theme->$field ?? '#f1f5f9' }}; color: #fff;">
                            {{ str_replace('_', ' ', $field) }}
                        </span>
                        @endforeach
                    </div>
                </div>

                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Save Theme</button>
                    <button type="button" class="btn btn-outline-secondary" id="reset-theme-defaults">Reset to defaults</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const defaults = @json(\App\Models\SiteSetting::defaults());

    const overlayRange = document.getElementById('bg_overlay');
    const overlayValue = document.getElementById('bg_overlay_value');
    overlayRange?.addEventListener('input', function () {
        if (overlayValue) overlayValue.textContent = overlayRange.value;
    });

    const bgInput = document.getElementById('bg_image');
    const bgPreview = document.getElementById('bg-preview');
    bgInput?.addEventListener('change', function () {
        const file = bgInput.files && bgInput.files[0];
        if (file && bgPreview) {
            bgPreview.src = URL.createObjectURL(file);
        }
    });

    document.querySelectorAll('.theme-color-picker').forEach(function (picker) {
        const field = picker.dataset.target;
        const hexInput = document.getElementById(field);
        const preview = document.getElementById('preview-' + field);

        picker.addEventListener('input', function () {
            hexInput.value = picker.value;
            if (preview) preview.style.background = picker.value;
        });

        hexInput.addEventListener('input', function () {
            if (/^#[0-9A-Fa-f]{6}$/.test(hexInput.value)) {
                picker.value = hexInput.value;
                if (preview) preview.style.background = hexInput.value;
            }
        });
    });

    document.getElementById('reset-theme-defaults')?.addEventListener('click', function () {
        Object.keys(defaults).forEach(function (field) {
            if (field === 'bg_image') return;
            const input = document.getElementById(field);
            const picker = document.querySelector('[data-target="' + field + '"]');
            const preview = document.getElementById('preview-' + field);
            if (input && input.type !== 'file') input.value = defaults[field];
            if (field === 'bg_overlay' && overlayValue) overlayValue.textContent = defaults[field];
            if (picker) picker.value = defaults[field];
            if (preview) preview.style.background = defaults[field];
        });
    });
});
</script>
@endsection
