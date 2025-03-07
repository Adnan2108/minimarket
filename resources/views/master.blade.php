<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 <header>

   <div class="row">
   <div class="col">

   <nav class="navbar navbar-expand-sm bg-secondary navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="{{ asset("/biodata") }}">Biodata</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="{{ asset("/user") }}">User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ asset("/barang") }}">Barang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>
      </li>
    </ul>
  </div>
</nav>
</div>
</div>

 </header>

<main>

@yield("isi")
</main>
</body>
</html>
