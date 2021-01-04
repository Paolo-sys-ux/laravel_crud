<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <title>
    @yield('title')
    </title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Ask Me</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/todos/">Ask </a>
        <a class="nav-link" aria-current="page" href="/new-todos">Create Ask</a>

        <a class="dropdown-item" href="{{route('logout')}}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{__('Logout')}}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
      
        
      </div>
    </div>
    
  </div>
</nav>

<div class="container">

<!--Success Message created-->
@if(session()->has('success'))
<div class="alert alert-success">
{{session()->get('success')}}
</div>
@endif



@yield('content')
</div>
</body>

</html>