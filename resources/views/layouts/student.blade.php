<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>VoteEase</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    .nav-pills .nav-link {
  border-radius: 3px; 
  transition:  0.3s, color 0.3s;
  font-weight: 600;
  font-size: 14px;
  color:  #ffffffff;
}
    .nav-pills .nav-link:hover {
  background-color: #fcf700ff;
  color: #000000ff;   
  transform: scale(1.1);
}
</style>
<body>
    <nav class="navbar bg-primary navbar-expand-lg shadow">
        <div class="container">
            <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Pedro Orata Logo" class="logo" style="max-width:50px;">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsmallscreen"
                aria-controls="navbarsmallscreen" aria-expanded="false" aria-label="Toggle navigation">
                <span class="list-icon"><i class="bi bi-list"></i></span>
            </button>

            <div class="collapse navbar-collapse justify-content-start mx-5" id="navbarsmallscreen">
                <ul class="navbar-nav nav-pills  ">
                 <li><hr class="dropdown-divider"></li>   
                <li class="nav-item">
                    <a href="" class="nav-link me-3">Dashboard</a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li class="nav-item">
                    <a href="" class="nav-link me-3">Voting History</a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li class="nav-item">
                    <a href="" class="nav-link me-3">Profile</a>
                </li>
                <li><hr class="dropdown-divider"></li>
            </ul>

            <div class="d-flex ms-auto">
                <form action="{{ url('logout') }}" method="POST" class="d-inline">
                @csrf
                     <button type="submit" class="btn btn-danger w-100"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
            </div>
            
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')

</body>
</html>