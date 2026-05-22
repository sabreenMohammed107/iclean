    <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                 Dashboard 
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/myadmin-home" class="nav-link active">
                    <i class="fas fa-bath"></i>
                    <p>Home </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/myadmin/Products" class="nav-link">
                    <i class="fas fa-bath"></i>
                    <p>  Products </p>
                  </a>
                </li>
                
                 <li class="nav-item">
                  <a href="/myadmin/show-orders" class="nav-link">
                    <i class="fas fa-bath"></i>
                    <p>  Orders </p>
                  </a>
                </li>
              </ul>
            </li>
      

            

            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-user"></i>
                <p>
                 User  
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                @guest
                <li class="nav-item">
                  <a  href="{{ route('login') }}"  class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Login') }} </p>
                  </a>
                </li>
                @if (Route::has('register'))

                <li class="nav-item">
                  <a href="{{ route('register') }}"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>  {{ __('Register') }} </p>
                 
                  </a>
                </li>
                @endif

                @else

                <li class="nav-item">
                  <a href="/myadmin-allmessages" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>  Messages </p>
                  </a>
                </li>

                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
                @endguest
              </ul>
            </li>


         



          </ul>
        </nav>
