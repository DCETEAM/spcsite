@extends('admin.layout')

@section('content')
<div class="container">
    <h2>Welcome to Admin Dashboard</h2>

    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button class="btn btn-danger mt-3">Logout</button>
    </form>
</div>
@endsection
