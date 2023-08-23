<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/events') ? 'active' : '' }}" href="/dashboard/events">
            <span data-feather="file-text"></span>
            Events
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/locations') ? 'active' : '' }}" href="/dashboard/locations">
            <span data-feather="map-pin"></span>
            Locations
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/events/create*') ? 'active' : '' }}" href="/dashboard/events/create">
            <span data-feather="file-plus"></span>
            Orders
          </a>
        </li>
      </ul>

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
            <span data-feather="grid"></span>
            User Management
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/locations*') ? 'active' : '' }}" href="/dashboard/locations">
            <span data-feather="map"></span>
            Location Management
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/positions*') ? 'active' : '' }}" href="/dashboard/positions">
            <span data-feather="pocket"></span>
            Position Management
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/sms*') ? 'active' : '' }}" href="/dashboard/sms">
            <span data-feather="bell"></span>
            Reminder
          </a>
        </li>
      </ul>
      @endcan

    </div>
</nav>