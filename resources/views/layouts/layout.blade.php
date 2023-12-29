<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="dashboard.css" rel="stylesheet" >
    <base href="foto">
    <base href="/">
    <!-- Di bagian head atau sebelum penggunaan -->
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->


    <style>
      body {
    font-family: 'Arial', sans-serif;
      }

      .sidebar {
          height: 100%;
          width: 200px; /* Adjusted width */
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #AD2727;
          padding-top: 20px;
          padding-left: 10px;
          color: white;
      }

      h1 {
          font-size: small;
          display: inline-block;
          padding-top: 10px;
      }

      .nav-link {
          border: 1px solid transparent;
          border-radius: 5px;
          padding: 8px 10px;
          margin-bottom: 5px;
          cursor: pointer;
          color: white;
      }

      .nav-link:hover,
      .nav-link:focus {
          background-color: #ffffff;
          border-right-width: auto;
          color: #AD2727;
      }

      .dropdown-menu {
          background-color: #AD2727;
      }

      .dropdown-item {
          color: #ffffff;
          display: flex;
          align-items: center;
      }

      .dropdown-item:hover,
      .dropdown-item:focus {
          background-color: #AD2727;
          color: #ffffff;
          width: auto;
      }

      .logo {
          padding-bottom: 20px;
          height: 100px;
      }

      .option {
          color: #ffffff;
      }

      .dropdown-item img {
          margin-right: 10px;
          max-width: 30px;
          max-height: 30px;
          vertical-align: middle;
      }

      .noborder {
          border: none;
      }

      .card-container {
          margin-left: 220px; /* Adjusted margin */
      }

      /* Add this style to make sure cards don't go under the sidebar when the screen is small */
      @media (max-width: 767.98px) {
          .card-container {
              margin-left: 0;
          }
      }

      .table{
          margin-top: 20px;
      }

      .logout{
          position: absolute;
          right: 100px;
      }
      </style>

<body>
  @include('layouts.admin.navbar')
  @include('layouts.admin.sidebar')
  @include('layouts.peminjam.navbarpinjam')
  @include('layouts.peminjam.sidebarpinjam')

  @yield('content')

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

