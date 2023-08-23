@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf

                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                {{-- <div class="form-floating">
                    <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" id="position" placeholder="Position" required value="{{ old('position') }}">
                    <label for="position">Position</label>
                    @error('position')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div> --}}

                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="mt-3">
                    Position
                </div>
                <div class="">
                    <label for="position" class="form-label"></label>
                    <select class="form-select" name="position_id">
                    @foreach ($position as $p)
                        @if (old('position_id') == $p->id)
                        <option value="{{ $p->id }}" selected>{{ $p->name }}</option>
                        @else
                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endif
                    @endforeach
                    </select>
                </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/">Please Login!</a></small>
        </main>
    </div>
</div>

@endsection