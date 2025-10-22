<!DOCTYPE html>
<html>
<head>
    <title>Dịch vụ thu phí căn hộ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}">Thu Phí Căn Hộ</a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="{{ route('customers.index') }}">Khách hàng</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('rooms.index') }}">Phòng/Căn hộ</a></li>
    </ul>
  </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
