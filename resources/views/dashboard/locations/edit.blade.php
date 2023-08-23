@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit location</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/locations/{{ $location->id }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $location->name) }}">
          @error('name')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required value="{{ old('description', $location->description) }}">
          @error('description')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-3" onclick="updateLocation()">Update Location</button>
    </form>
</div>
@endsection