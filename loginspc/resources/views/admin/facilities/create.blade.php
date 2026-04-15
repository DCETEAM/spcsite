@extends('admin.layout')

@section('content')
    <div class="container mt-4">

        <div class="card shadow">
            <div class="card-header bg-secondary text-white">
                <h4>Add New Facility</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.facilities.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-md-6  col-sm-6 mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="col-md-6  col-sm-6 mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6  col-sm-6 mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="col-md-6  col-sm-6 mb-3">
                            <label>Features (use line break for each feature)</label>
                            <textarea name="features" class="form-control" rows="5" placeholder="Enter each feature on a new line"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-success">Save</button>
                      <a href="{{ route('admin.facilities.index') }}" class="btn btn-secondary">Cancel</a>

                </form>
            </div>
        </div>

    </div>
@endsection
