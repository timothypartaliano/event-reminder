@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit user</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/users/{{ $user->id }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $user->name) }}">
          @error('name')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', $user->username) }}">
          @error('username')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
          @enderror
        </div>
        {{-- <div class="mb-3">
          <label for="position" class="form-label">Position</label>
          <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" required value="{{ old('position', $user->position) }}">
          @error('position')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
          @enderror
        </div> --}}
        <div class="mb-3">
          <label for="position" class="form-label">Position</label>
          <select class="form-select" name="position_id">
            @foreach ($position as $p)
              @if(old('position_id', $user->position_id) == $p->id)
                <option value="{{ $p->id }}" selected>{{ $p->name }}</option>
              @else
                <option value="{{ $p->id }}">{{ $p->name }}</option>
              @endif
            @endforeach
          </select> 
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $user->email) }}">
          @error('email')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
          @error('password')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-3" onclick="updateUser()">Update User</button>
    </form>
</div>
@endsection