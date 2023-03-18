<nav class="navbar navbar-expand-lg bgBlueCus p-3" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{Route('home')}}"> <img src="/media/logo.svg" style="width:15rem"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <img src="/media/icons8-corallo-50.png" class="icon-spongebob" alt="" srcset="">
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class=" textSponge nav-link {{(Route::currentRouteName()=='products') ? 'active': ''}}" href="{{Route('products')}} ">SIGNS</a>
          </li>
          <li class="nav-item">
            <a class="textSponge nav-link {{(Route::currentRouteName()=='about') ? 'active': ''}}" href="{{Route('about')}}">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="textSponge nav-link {{(Route::currentRouteName()=='contactUs') ? 'active': ''}}" href="{{Route('contactUs')}}">CONTACT US</a>
          </li>
          <li class="nav-item dropdown">
            <a class="textSponge nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>