<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Florence - Event Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
    }
    
    .navbar {
      background: rgba(255, 255, 255, 0.95) !important;
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(139, 92, 246, 0.1);
    }
    
    .navbar-brand {
      font-weight: 700;
      font-size: 1.8rem;
      background: linear-gradient(45deg, #8b5cf6, #ec4899);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .btn-logout {
      background: linear-gradient(45deg, #ef4444, #dc2626);
      border: none;
      color: white;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    
    .btn-logout:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(239, 68, 68, 0.3);
      color: white;
    }
    
    .main-content {
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
      margin: 2rem 0;
      overflow: hidden;
    }
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
            <span class="nav-link text-muted">
              <i class="fas fa-user-circle me-1 text-primary"></i>
              Welcome, <span class="fw-bold text-primary">Admin</span>
            </span>
          </li>
          <li class="nav-item">
            <a class="btn btn-logout rounded-pill" href="http://localhost/Florence/public/index.php?url=AuthController/logout">
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
      <div class="p-4">