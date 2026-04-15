@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Edit Contact Section</h4>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('contact.update') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">About Company (one line per entry)</label>
                    <textarea name="about_lines" class="form-control" rows="3" placeholder="Plastic Solutions&#10;Manufacturing">{{ old('about_lines', is_array($contact->about_lines) ? implode("\n", $contact->about_lines) : ($contact->about_lines ?? '')) }}</textarea>
                    <small class="text-muted">Use new lines or commas to separate multiple lines.</small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone Numbers (one per line)</label>
                    <textarea name="phone_numbers" class="form-control" rows="3" placeholder="+91 98439 09609">{{ old('phone_numbers', is_array($contact->phone_numbers) ? implode("\n", $contact->phone_numbers) : ($contact->phone_numbers ?? '')) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Marketing Numbers (one per line)</label>
                    <textarea name="marketing_numbers" class="form-control" rows="2" placeholder="63694 99561">{{ old('marketing_numbers', is_array($contact->marketing_numbers) ? implode("\n", $contact->marketing_numbers) : ($contact->marketing_numbers ?? '')) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email', $contact->email) }}" class="form-control" />
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control" rows="3">{{ old('address', $contact->address) }}</textarea>
                </div>

                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
