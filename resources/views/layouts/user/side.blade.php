<div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-black-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family" style="color: green;">my Kwuo account</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="{{URL('/users')}}" class="sidebar-link text-muted"><i class="fa fa-gift mr-3 text-gray"></i><span>Dashboard</span></a></li>
                <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted active"><i class="fa fa-coins mr-3 text-gray"></i><span>Account</span></a>
                <div id="pages" class="collapse">
                  <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                  <li class="sidebar-list-item"><a href="{{URL('/user/sendunit')}}" class="sidebar-link text-muted pl-lg-5">Transfer Unit</a></li>
                    <li class="sidebar-list-item"><a href="{{URL('/user/requestunit')}}" class="sidebar-link text-muted pl-lg-5">Request for Unit</a></li>
                    <li class="sidebar-list-item"><a href="{{URL('/user/receiver')}}" class="sidebar-link text-muted pl-lg-5">Verify units<span class="badge badge-secondary">0</span></a></li>
                    <li class="sidebar-list-item"><a href="{{URL('/user/buy')}}" class="sidebar-link text-muted pl-lg-5 active">Buy Unit</a></li>
                  </ul>
                </div>
              </li>
                 <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="fa fa-user-circle mr-3 text-gray"></i><span>Merchant Account</span></a>
                <div id="pages" class="collapse">
                  <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                    <li class="sidebar-list-item"><a href="{{URL('/user/merc/create')}}" class="sidebar-link text-muted pl-lg-5 ">Create merchant account</a></li>
                    <li class="sidebar-list-item"><a href="{{URL('/user/merc/transact')}}" class="sidebar-link text-muted pl-lg-5">View account</a></li>
                  </ul>
                </div>
              </li>
              <li class="sidebar-list-item"><a href="{{URL('user/transact')}}" class="sidebar-link text-muted"><i class="fa fa-history mr-3 text-gray"></i><span>Transactions</span></a></li>
        </ul>
      </div>