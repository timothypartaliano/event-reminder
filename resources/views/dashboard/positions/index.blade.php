@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Positions</h1>
    <h1 class="fs-4 badge bg-dark">Admin Management</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-12" role="alert">
    <strong>{{ session('success') }}</strong>
</div>
@endif

<div class="table-responsive col-lg-12">
  @can('admin')
  <a href="/dashboard/positions/create" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span></a>
  @endcan

  <div class="col-lg-8">
    <form action="/dashboard/positions">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>

  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        @can('admin')
        <th scope="col">Action</th>
        @endcan
      </tr>
    </thead>
    <tbody>
      @foreach ($positions as $p)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->description }}</td>
        @can('admin')
        <td>
          <a href="/dashboard/positions/{{ $p->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
          <form action="/dashboard/positions/{{ $p->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
          </form>
        </td>
        @endcan
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection