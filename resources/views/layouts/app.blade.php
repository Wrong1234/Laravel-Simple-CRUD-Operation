<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel CRUD Project</title>
  @vite(['resources/js/app.js'])
</head>
<body>
    <header class="p-3 mb-3 border-bottom bg-primary">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
             <li><a href="/" class="nav-link px-2 text-white text-bold">Home</a></li>
            <li><a href="/projects/all_projects" class="nav-link px-2 text-white text-bold">Projects</a></li>
          </ul>
        </div>
      </div>
    </header>

    @yield('main')
    
</body>
</html>