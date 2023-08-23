<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Minder | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <!-- Custom styles for dashboard template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    <!-- Custom styles for sticky footer template -->
    <link href="/css/sticky-footer.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">

    <style>
      .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
      }

      @media (min-width: 768px) {
          .bd-placeholder-img-lg {
          font-size: 3.5rem;
          }
      }
      </style>

    <style>
      #card1{
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
      }
      #card2{
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
      }
    </style>
  </head>
  <body>
    
  @include('dashboard.layouts.header')

  <div class="container-fluid">
    <div class="row">
      @include('dashboard.layouts.sidebar')

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('container')
      </main>
    </div>
  </div>
  
  @include('dashboard.layouts.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>

  <script src="/js/dashboard.js"></script>

  <script>
    function updateEvent() {
      alert("Event has been updated!");
    }
    function createEvent() {
      alert("New event has been added!");
    }
    function updateUser() {
      alert("User has been updated!");
    }
    function createUser() {
      alert("New user has been added!");
    }
    function updateLocation() {
      alert("Location has been updated!");
    }
    function createLocation() {
      alert("New location has been added!");
    }
    function updatePosition() {
      alert("Position has been updated!");
    }
    function createPosition() {
      alert("New position has been added!");
    }
    function createReminder() {
      alert("Reminder has been sent!");
    }
  </script>

  </body>
</html>
