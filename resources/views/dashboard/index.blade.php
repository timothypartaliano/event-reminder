@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    {{-- <h1 class="h2">Welcome back, {{ auth()->user()->name }} !</h1> --}}
    <h1 class="h2">Welcome to Event Reminder!</h1>
    {{-- <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-dark">Share</button>
          <button type="button" class="btn btn-sm btn-outline-dark">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-dark dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>
    </div> --}}
</div>

<div class="mb-3">
    <img src="img/telkomsel2.jpg" alt="" style="max-width: 1200px;">
</div>

<p class="fs-4 badge bg-danger">What is E-Minder?</p>

<p class="fs-5">Event Reminder is a website-based application built to help overcome the problems of a division within a company. The problem is that when certain activities or meetings are held they are still operated manually. With the Event Reminder, it can help operate the problem precisely and systematically.</p>

{{-- <div class="row mb-3">
    <div class="mb-3" style="max-width: 300px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/event.png" class="img-fluid rounded-start p-0" alt="event">
            </div>
            <div class="card col-md-8" id="card1">
                <div class="card-body">
                    <h5 class="card-title text-danger"><strong>15</strong></h5>
                    <p class="card-text text-muted"><strong>TOTAL EVENTS</strong></p>
                </div>
            </div>
        </div>
    </div>
    @can('admin')
    <div class="mb-3" style="max-width: 300px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/user.png" class="img-fluid rounded-start" alt="user">
            </div>
            <div class="card col-md-8" id="card1">
                <div class="card-body">
                    <h5 class="card-title text-danger"><strong>10</strong></h5>
                    <p class="card-text text-muted"><strong>TOTAL USERS</strong></p>
                </div>
            </div>
        </div>
    </div>
    @endcan
</div> --}}

{{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

@endsection