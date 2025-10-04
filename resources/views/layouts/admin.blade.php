<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Panel Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .sidebar {
      height: 100vh;
      background-color: #ffffffff;
      min-width: 270px;
      border-right: 2px solid #ddd;
    }
    .sidebar-top {
      background-color: #0737a1;
      padding: 20px;
      color: white;
      text-align: center;
    }
    .nav-link {
      color: black;
    }
    .nav-link:hover {
      background-color: #f8f9fa;
    }
    .card-blue {
      background-color: #3161ff;
      color: #fff;
      border-radius: 12px;
    }
    .card-green {
      background-color: #196d12;
      color: #fff;
      border-radius: 12px;
    }
    .card-red {
      background-color: #bd121f;
      color: #fff;
      border-radius: 12px;
    }
    .metric-number {
      font-size: 1.8rem;
      font-weight: 700;
    }
    .upcoming-election {
      background-color: #f8f9fa;
      border-radius: 8px;
      padding: 15px;
    }
  </style>
</head>
<body>

<div class="d-flex">
  <!-- Sidebar -->

  <div id="sidebarnav" class="sidebar d-flex flex-column">
    <div class="sidebar-top">
      <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Pedro Orata Logo" class="img-fluid" style="max-width:150px;">
      <div>Admin Panel</div>
    </div>

   <nav class="nav flex-column mt-3 px-3">
      <a class="nav-link" href="/admin"><i class="bi bi-grid-fill"></i> Dashboard</a>
      <a class="nav-link" href="/admin/elections"><i class="bi bi-check2-circle"></i> Elections</a>
      <a class="nav-link" href="/admin/candidates"><i class="bi bi-people-fill"></i> Candidates</a>
      <a class="nav-link" href="/admin/positions"><i class="bi bi-person-badge-fill"></i> Position</a>
      <a class="nav-link" href="/admin/users"><i class="bi bi-person-lines-fill"></i>Voters Management</a>
      <a class="nav-link" href="/admin/results"><i class="bi bi-bar-chart-fill"></i> Monitoring & Result</a>
      <a class="nav-link" href="/admin/logs"><i class="bi bi-journal-text"></i> Audit Logs</a>
    </nav>


    <div class="mt-auto px-3 pb-3">
      <button class="btn btn-primary w-100"><i class="bi bi-box-arrow-right"></i> Logout</button>
    </div>
  </div>


  <!-- Main Content -->
  <div class="flex-fill p-5">
    @yield('content')
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
