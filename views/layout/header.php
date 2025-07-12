
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Florence - Event Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/public/css/style.css">

  <style>
    
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <i class="fas fa-music me-2"></i>
        Florence
      </a>
      
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item me-3">
            <span class="nav-link">
              <i class="fas fa-user-circle me-1"></i>
              Welcome, Admin
            </span>
          </li>
          <li class="nav-item">
            <a class="btn btn-logout" href="http://localhost/Florence/public/index.php?url=AuthController/logout">
              <i class="fas fa-sign-out-alt me-1"></i>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="main-content">
      <div class="content-wrapper">