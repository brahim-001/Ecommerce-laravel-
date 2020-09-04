@guest
    <li class="nav-item">
        <a style="color: #9f78ff" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a style="color: #9f78ff" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else
    {{-- <li class="nav-item dropdown">
        <a  style="color: black" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div  style="color: red" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('home') }}">Mes commandes </a>

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li> --}}
    <li>
        <div class="dropdown pr-30">
            <div onclick="myFunction()" class="dropbtn"> {{ Auth::user()->name }} <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
            </div>
            <div id="myDropdown" class="dropdown-content">

              
              <a class="dropdown-item" href="{{ route('commandes') }}"><i class="fa fa-check" aria-hidden="true"></i>
                Commandes </a>


              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <i class="fa fa-check" aria-hidden="true"></i>
                              {{ __('Logout') }}

          </a>
          <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

            </div>
          </div>
          
    </li>
  @endguest


  @section('extra-js')
  <script>
      function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
  </script>
@endsection 