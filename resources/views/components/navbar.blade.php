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
              PRODUCTS
            </a>
            <ul class="dropdown-menu">
          
              <li>
                <a class="dropdown-item" href="{{route('createElement')}}">Create</a>
              </li>
              <li>
                <a class="dropdown-item"  href="{{route('indexElement')}}"> View All</a>
              </li>

            </ul>
          </li>

          {{-- <li class="nav-item">
            <a class="textSponge nav-link" href="{{route('createElement')}}">CREATE PRODUCTS</a>
          </li>
          <li class="nav-item">
            <a class="textSponge nav-link" href="{{route('indexElement')}}">ALL THE PRODUCTS</a>
          </li> --}}

          @auth
          <li class="nav-item">
            <a class="textSponge nav-link" href="{{route('userProfile')}}">YOUR PROFILE</a>
          </li>
          @endauth

          <li class="nav-item dropdown">
            <a class="textSponge nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              KRUSTY-KRAB SHOP
            </a>
            <ul class="dropdown-menu">
          
              <li>
                <a class="dropdown-item" href="{{route('createShop')}}">Create</a>
              </li>
              <li>
                <a class="dropdown-item"  href="{{route('indexShop')}}"> View All</a>
              </li>

            </ul>
          </li>

          {{-- LOG --}}
          <li class="nav-item dropdown">
            <a class="textSponge nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              LOG
            </a>
            <ul class="dropdown-menu">

              @guest

              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Sig in</a></li>
              @else
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" >Log out</a></li>

              {{-- FORM LOG OUT NASCOSTO --}}
              <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none"> 
                @csrf 
              </form>

              @endguest
          
            </ul>
          </li>
        </ul>

        {{-- SE OSPITE --}}
        @guest
          Ciao, accedi!  
        @else 
        {{-- SE REGISTRATO --}}
          Ciao {{Auth::user()->name}}  
        @endguest

      </div>
    </div>
  </nav>