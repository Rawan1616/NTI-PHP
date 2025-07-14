<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Info Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<body class="bg-success d-flex justify-content-center align-items-center vh-100">

  <div class="card shadow-lg p-4" style="width: 350px;">
    <h4 class="text-center mb-4">User Information</h4>
     <!-- 🔝 Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MySite</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              More
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">About</a></li>
              <li><a class="dropdown-item" href="#">Contact</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <form>
      <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullname" placeholder="Enter full name">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>

      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" placeholder="Enter age">
      </div>

      <div class="mb-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" placeholder="Enter city">
      </div>

      <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
  </div>


  <script src="js/bootstrap.bundle.min.js"></script> 

</body>
</html>
