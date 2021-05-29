<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Create Events</title>
</head>
<body class="p-3 mb-2 bg-info text-dark">

<div class="container">
    <div class="row p-5">
        <div class="col-10">
          <h1>Apply Plan</h1>
        </div>
        <div class="col-2">
            <a href="\" class="btn btn-success">Cancel</a>
        </div>
        <div class="col-12 mt-5">
        
           
           
            <form class="row g-3" action="{{URL::route('create.save')}}" method="post">
             @csrf
                <div class="col-md-12">
                <label for="img" class="form-label">Photo</label>
                <input type="file" class="form-control" name="photos" required>
                </div>
                <div class="col-4">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" name="firstname" placeholder="First name" required>
                </div>
                <div class="col-4">
                <label for="middlename" class="form-label">Middle name</label>
                <input type="text" class="form-control" name="middlename" placeholder="Middle name" required>  
                </div>
                <div class="col-4">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last name" required>
                </div>
                <div class="col-md-4">
                <label for="Contact" class="form-label">Contact</label>
                <input type="number" class="form-control" name="contact" placeholder="09..." required>
                </div>       
                <div class="col-md-4">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" name="birthday" required>
                </div>
                <div class="col-md-4">
                <label for="inputState" class="form-label">Gender</label>
                <select id="inputState" class="form-select" name="gender" required>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="textarea" class="form-control" name="address" required>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" required>
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
                <button type="submit" class="btn btn-dark">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>