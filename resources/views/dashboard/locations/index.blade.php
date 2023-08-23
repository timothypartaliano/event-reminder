@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Locations</h1>
    @can('admin')
    <h1 class="fs-4 badge bg-dark">Admin Management</h1>
    @endcan
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
    <strong>{{ session('success') }}</strong>
</div>
@endif

<div class="table-responsive col-lg-8">
  @can('admin')
  <a href="/dashboard/locations/create" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span></a>
  @endcan

  <div class="col-lg-8">
    <form action="/dashboard/locations">
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
        @can('admin')
        <th scope="col">Approve</th>
        @endcan
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        @can('admin')
        <th scope="col">Action</th>
        @endcan
      </tr>
    </thead>
    <tbody>
      @foreach ($locations as $location)
      <tr>
        <td>{{ $loop->iteration }}</td>
        @can('admin')
          <td>
            {{-- <a href="/dashboard/events/approved/{{ $event->id }}">
              <i data-feather="check-square"></i>
            </a> --}}
            <a href="/dashboard/locations/approved/{{ $location->id }}" class="badge bg-success">
              <span data-feather="check">approve</span>
            </a>
            <a href="/dashboard/locations/declined/{{ $location->id }}" class="badge bg-danger">
              <span data-feather="x">approve</span>
            </a>
          </td>
        @endcan
        <td>{{ $location->name }}</td>
        <td>{{ $location->description }}</td>
        {{-- <td>{{ $location->l_statuss->name }}</td> --}}
        @if ($location->status == 1)
          <td>
            <label class="badge bg-warning">{{ $location->l_statuss->name }}</label>
          </td>
          @elseif ($location->status == 2)
          <td>
            <label class="badge bg-success">{{ $location->l_statuss->name }}</label>
          </td>
          @else
          <td>
            <label class="badge bg-danger">{{ $location->l_statuss->name }}</label>
          </td>
          @endif
        @can('admin')
        <td>
          <a href="/dashboard/locations/{{ $location->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
          <form action="/dashboard/locations/{{ $location->id }}" method="post" class="d-inline">
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