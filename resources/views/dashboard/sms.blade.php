@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Reminder</h1>
    <h1 class="fs-4 badge bg-dark">Admin Management</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    <strong>{{ session('success') }}</strong>
</div>
@endif

{{-- <form action="" method="POST">
    @csrf
    <input type="text" name="number" placeholder="Enter mobile">
    <br><br>
    <input type="text" name="message" placeholder="Enter Message">
    <br><br>
    <input type="submit" value="Send SMS">
</form> --}}

<div class="col-lg-8">
    <form method="post" action="/dashboard/sms">
        @csrf
        <div class="mb-3">
          <label for="number" class="form-label">Number : </label>
          <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number" required placeholder="Enter number">
          @error('name')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message : </label>
          <input type="text" class="form-control @error('message') is-invalid @enderror" id="message" name="message" required placeholder="Enter message">
          @error('message')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-3" onclick="createReminder()">Send</button>
    </form>
</div>

@endsection