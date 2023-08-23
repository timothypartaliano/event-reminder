@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit event</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/events/{{ $event->id }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $event->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required value="{{ old('description', $event->description) }}">
            @error('description')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" required value="{{ old('address', $event->address) }}">
            @error('address')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div> --}}
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <select class="form-select" name="location_id">
              @foreach ($location as $l)
                @if(old('location_id', $event->location_id) == $l->id)
                  <option value="{{ $l->id }}" selected>{{ $l->name }}</option>
                @else
                  <option value="{{ $l->id }}">{{ $l->name }}</option>
                @endif
              @endforeach
            </select> 
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" required value="{{ old('date', $event->date) }}">
            @error('date')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="start_hour" class="form-label">Start</label>
            <input type="time" class="form-control @error('start_hour') is-invalid @enderror" id="start_hour" name="start_hour" required value="{{ old('start_hour', $event->start_hour) }}">
            @error('start_hour')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="end_hour" class="form-label">End</label>
            <input type="time" class="form-control @error('end_hour') is-invalid @enderror" id="end_hour" name="end_hour" required value="{{ old('end_hour', $event->end_hour) }}">
            @error('end_hour')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="total_user" class="form-label">Total User</label>
            <input type="text" class="form-control @error('total_user') is-invalid @enderror" id="total_user" name="total_user" required autofocus value="{{ old('total_user', $event->total_user) }}">
            @error('total_user')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div> --}}

        <button type="submit" class="btn btn-primary mb-3" onclick="updateEvent()">Update Event</button>
    </form>
</div>
@endsection