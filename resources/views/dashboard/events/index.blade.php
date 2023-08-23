@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Events</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-12" role="alert">
    <strong>{{ session('success') }}</strong>
</div>
@endif

<div class="table-responsive col-lg-12">
  {{-- <a href="/dashboard/events/create" class="btn btn-primary mb-3">Add event</a> --}}

  <div class="col-md-6">
    <form action="/dashboard/events">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>

  {{-- @if ($events->count()) --}}
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          @can('admin')
          <th scope="col">Approve</th>
          @endcan
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Location</th>
          <th scope="col">Date</th>
          <th scope="col">Start</th>
          <th scope="col">End</th>
          <th scope="col">Status</th>
          @can('admin')
          {{-- <th scope="col">User</th> --}}
          <th scope="col">Action</th>
          @endcan
        </tr>
      </thead>
      <tbody>
        @foreach ($events as $event)
        <tr>
          <td>{{ $loop->iteration }}</td>
          @can('admin')
          <td>
            {{-- <a href="/dashboard/events/approved/{{ $event->id }}">
              <i data-feather="check-square"></i>
            </a> --}}
            <a href="/dashboard/events/approved/{{ $event->id }}" class="badge bg-success">
              <span data-feather="check">approve</span>
            </a>
            <a href="/dashboard/events/declined/{{ $event->id }}" class="badge bg-danger">
              <span data-feather="x">approve</span>
            </a>
          </td>
          @endcan
          <td>{{ $event->title }}</td>
          <td>{{ $event->description }}</td>
          <td>{{ $event->location->name }}</td>
          {{-- <td>{{ $event->date }}</td> --}}
          <td>{{ date('d M Y',strtotime($event->date)) }}</td>
          <td>{{ $event->start_hour }}</td>
          <td>{{ $event->end_hour }}</td>
          {{-- <td>{{ $event->statuss->name }}</td> --}}
          @if ($event->status == 1)
          <td>
            <label class="badge bg-warning">{{ $event->statuss->name }}</label>
          </td>
          @elseif ($event->status == 2)
          <td>
            <label class="badge bg-success">{{ $event->statuss->name }}</label>
          </td>
          @else
          <td>
            <label class="badge bg-danger">{{ $event->statuss->name }}</label>
          </td>
          @endif
          {{-- @can('admin') --}}
          {{-- <td>{{ $event->total_user }}</td> --}}
          {{-- @endcan --}}
          <td>
            @can('admin')
            <a href="/dashboard/events/{{ $event->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/events/{{ $event->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
            @endcan
            {{-- <a href="#" class="badge bg-success"><span data-feather="bell"></span></a> --}}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  {{-- @else
    <p class="fs-6">No event found.</p>
  @endif --}}
</div>

@endsection