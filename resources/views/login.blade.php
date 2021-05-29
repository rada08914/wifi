<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>PLAN</title>
</head>
<body class="p-3 mb-2 bg-info text-dark">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{URL::route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('signup') }}">Sign-up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('login') }}">Login</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
<div class="container">
    <div class="row p-5">
        <div class="col-10">
          <h1>Login</h1>
        </div>
        <div class="col-2">
           
        </div>
        <div class="col-12 mt-5">
            <form class="row g-3" action="{{URL::route('create.save')}}" method="post">
             @csrf
                <div class="col-12">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" name="firstname" placeholder="First name" required>
                </div>
                <div class="col-12">
                <label for="middlename" class="form-label">Middle name</label>
                <input type="text" class="form-control" name="middlename" placeholder="Middle name" required>  
                </div>
                <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        I agree to the terms of service
                    </label>
                </div>
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-dark">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>