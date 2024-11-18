<header id="header" class="navbar navbar-expand-lg header d-flex align-items-center fixed-top" style="background-color: #37517E">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <div class="d-flex">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">ToDo<span class="text-danger">Zone</span></h1>
      </a>
      
      <ul class="navbar-nav mx-4">
        <li class="nav-item">
          <a href="{{ route('list.index') }}" class="nav-link text-white">My Lists</a>
        </li>
      </ul>
    </div>

    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>






    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fw-bold text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Belal Shakra
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">My Lists</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
      </li>
    </ul>


  </div>
</header>