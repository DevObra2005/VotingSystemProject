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
    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-12 text-center">
                <img src="{{ asset('images/image_bg.jpg') }}" alt="" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; z-index: -1; opacity: 0.3;">
                <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Pedro Orata Logo" class="img-fluid" style="max-width:150px;">
                <h1 class="fw-bold" >VoteEase</h1>
                <p class="mb-4 lead" style= "color: black;">Automated Student Council Voting System for Pedro T. Orata National Highschool.</p>
                <a href="/login" class="btn btn-primary btn-lg">Login</a>
            </div>
        </div>        
    </div>
</body>
</html>