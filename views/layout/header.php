<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Florence</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/public/css/style.css">
  <style>
    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      letter-spacing: 1px;
    }
    .nav-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand text-primary" href="#">Florence</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-dark" href="http://localhost/Florence/public/index.php?url=AuthController/showLogin">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container my-4">
