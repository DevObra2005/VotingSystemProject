<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoteEase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <img src="{{ asset('images/image_bg.jpg') }}" alt="" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; z-index: -1; opacity: 0.3;">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-2 col-md-4 text-center bg-primary h-75 d-none d-lg-flex flex-column justify-content-center align-items-center rounded">
                 <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Pedro Orata Logo" style="width:300px; height:300px; object-fit: contain;">
            </div>

            <div class="col-10 col-md-4 text-start px-5 p-lg-5 bg-white rounded h-75">
                <div class="d-lg-none text-center mb-4">
                     <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Pedro Orata Logo" class="mt-3" style="width:100px; height:100px; object-fit: contain;">
                </div>
                <h1 class="fw-bold mb-5" >Login into your account.</h1>
                <form action="/login" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <a href="/admin" class="btn btn-primary" >Login</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>