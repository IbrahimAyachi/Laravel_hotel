 <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{url('/')}}"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04" style="margin-right: 15px">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{url('/')}}">Home</a>
                              </li>
                              
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('our_rooms')}}">Our&nbsp;Room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('hotel_gallary')}}">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('contact_us')}}">Contact&nbsp;Us</a>
                              </li>            

                   @if (Route::has('login'))
                  @auth
        <li class="nav-item dropdown custom-user-dropdown" style="color: #729ccf;
    background: rgb(103, 190, 195);">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
        {{ Auth::user()->name }}
    </a>
    <div class="dropdown-menu custom-user-menu">
        <a class="dropdown-item" href="#">Profile</a>
        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item">Logout</button>
        </form>
    </div>
</li>
                  @else
                     <li class="nav-item" style="margin-right: 2px;">
                        <a class="btn btn-success" href="{{ url('login') }}">Login</a>
                        </li>
                  @if (Route::has('register'))
                     <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('register') }}">Register</a>
                     </li>
                  @endif
                  @endauth
                  @endif



                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div> 
         </div>