<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body {
      font-family: 'nurito', sans-serif;
      background-color: #f8f9fa;
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      left: 0;
      top: 0;
      width: 220px;
      height: 100vh;
      background: #1a202c;
      color: #fff;
      padding-top: 2rem;
      transition: all 0.3s ease-in-out;
      z-index: 1000;
    }

    .sidebar a {
      display: block;
      color: #cbd5e0;
      padding: 12px 20px;
      text-decoration: none;
      transition: 0.3s;
      font-size: 15px;
    }

    .sidebar a.active,
    .sidebar a:hover {
      background: #2d3748;
      color: #fff;
    }

    /* Main content */
    .main-content {
      margin-left: 220px;
      padding: 2rem;
      transition: all 0.3s ease-in-out;
    }

    /* Navbar (optional top bar) */
    .navbar {
      background: #fff;
      padding: 1rem;
      border-bottom: 1px solid #ddd;
      margin-bottom: 1.5rem;
      border-radius: 8px;
    }

    /* Card styling */
    .card {
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
      .sidebar {
        left: -220px;
      }
      .sidebar.active {
        left: 0;
      }
      .main-content {
        margin-left: 0;
      }
      .menu-toggle {
        display: inline-block;
        margin-right: 15px;
        cursor: pointer;
      }
    }
    .table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

table {
  min-width: 800px; /* Optional: keeps columns readable on small screens */
}

  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <h4 class="text-center text-light mb-4">Admin Panel</h4>
    <a href="{{ route('admin.dashboard') }}" class="active">🏠 Dashboard</a>
    <a href="{{ route('admin.maincategories.index') }}">📂 Main Categories</a>
    <a href="{{ route('admin.subcategories.index') }}">📁 Sub Categories</a>
    <a href="{{ route('admin.products.index') }}">📦 Products</a>
    <a href="{{ route('admin.about') }}">ℹ️ About</a>
  <a href="{{ route('admin.allblogs.index') }}">ℹ️ Blogs</a>
  <a href="{{ route('admin.whyus') }}">❓ Why Choose Us</a>
  <a href="{{ route('admin.facilities.index') }}">🏢 Facilities</a>
  <a href="{{ route('contact.edit') }}">📞 Contact Info</a>

  </div>

  <!-- Main content -->
  <div class="main-content">
    <nav class="navbar d-flex justify-content-between align-items-center">
      <div>
        <span class="menu-toggle d-lg-none text-dark fs-4" id="menu-toggle">
          <i class="bi bi-list"></i>
        </span>
        <strong>Admin Portal</strong>
      </div>
      <span class="text-muted">Welcome, Admin</span>
    </nav>

    @yield('content')
  </div>

  <script>
    // Sidebar toggle for mobile
    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('menu-toggle');
    toggle?.addEventListener('click', () => {
      sidebar.classList.toggle('active');
    });
  </script>

</body>
</html>
