<header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 shadow"><a href="#" class="sidebar-toggler text-white-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left" style="color: #fff;"></i></a><a href="../index.html" class="navbar-brand font-weight-bold text-uppercase text-white">
      <img src="{{ asset('kwor-admin/img/core-img/Josh%20logos.svg') }}" style="width: 150px; height:50px;"/>
    </a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          <li class="nav-item">
              <div class="text">
                      <h6 class="mb-0 text-white">Total kwuo Units</h6><span class="text-white">
                        @if(Auth::check()) 
                        <?php
                        $user=\App\Account::whereId(Auth::user()->id)->first();
                        $account=$user->balance;
                        ?>
                        {{$account}}
                        @endif
                        units</span>
                    </div>
          </li>
          <li class="nav-item dropdown ml-auto"><a id="userInfo" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="img/avatar-6.jpg" alt="{{Auth::user()->name}}" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
            <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family">Coded</strong><small>Web Developer</small></a>
              <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Settings</a><a href="#" class="dropdown-item">Activity log       </a>
              <div class="dropdown-divider"></div><a href="{{URL('/user/logout')}}" class="dropdown-item">Logout</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>