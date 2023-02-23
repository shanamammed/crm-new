  <div class="topbar">
      <!-- LOGO -->
      <div class="topbar-left">
          <a href="{{ url('/') }}" class="logo">
            <span>

               <img src="{{ asset('/images/logo.png') }}" alt="" height="30" width="110">
            </span>
            <i>
              <img src="{{ asset('/images/logo_sm.png') }}" alt="" height="30">
            </i>
          </a>
      </div>
      <nav class="navbar-custom">
          <ul class="list-unstyled topbar-right-menu float-right mb-0">
           <li class="dropdown notification-list">
              <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                 aria-haspopup="false" aria-expanded="false">
              <span class="ml-1">{{ auth()->guard('admin')->user()->name; }}<i class="mdi mdi-chevron-down"></i> </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                 <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                 <i class="fi-powe"></i> <span>Log Out</span>
                 </a>
              </div>
           </li>
        </ul>

          <ul class="list-inline menu-left mb-0 float-left">
              <li class="float-left">
                  <button class="button-menu-mobile open-left waves-light waves-effect">
                      <i class="dripicons-menu"></i>
                  </button>
              </li>
          </ul>
      </nav>
  </div>
 
  <!-- ========== Left Sidebar Start ========== -->
  <div class="left side-menu">
      <div class="slimscroll-menu" id="remove-scroll">
          <!--- Sidemenu -->
          <div id="sidebar-menu">
              <!-- Left Menu Start -->
              <ul class="metismenu" id="side-menu">
                  <li class="menu-title">Navigation</li>
                  <li>
                      <a href="{{ url('/admin/dashboard') }}">
                          <i class="fa fa-dashcube"></i><span> Dashboard </span>
                      </a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-gift"></i> <span> Deals </span> <span class="menu-arrow"></span></a>
                      <ul class="nav-second-level" aria-expanded="false">
                          <li><a href="{{ route('deals') }}">Manage Deals</a></li>
                          <li><a href="{{ route('stages') }}">Manage Stages</a></li>
                          <li><a href="{{ route('pipelines') }}">Manage Pipelines</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="{{ route('companies') }}">
                          <i class="fa fa-dashcube"></i><span> Companies </span>
                      </a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-phone"></i> <span> Contacts </span> <span class="menu-arrow"></span></a>
                      <ul class="nav-second-level" aria-expanded="false">
                          <li><a href="{{ route('contacts') }}">Manage Contacts</a></li>
                          <li><a href="{{ url('/admin/contacts/sources') }}">Manage Sources</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="{{ url('/admin/products') }}">
                          <i class="fa fa-product-hunt"></i><span> Products </span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ url('/admin/activities') }}">
                          <i class="fa fa-dashcube"></i><span> Activities </span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ url('/admin/dashboard') }}">
                          <i class="fa fa-dashcube"></i><span> Calendar </span>
                      </a>
                  </li>
                 
                  <li>
                      <a href="#"><i class="fa fa-users"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                      <ul class="nav-second-level" aria-expanded="false">
                          <li><a href="{{ route('users') }}">Manage Users</a></li>
                          <li><a href="{{ route('roles') }}">Manage Roles</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="clearfix"></div>
      </div>
  </div>
  <!-- Left Sidebar End -->

  <style>
    .page_hd {    width: 100%;
    text-align: center;
    color: #FFF;
    font-size: 22px;
    text-transform: uppercase;
    line-height: 70px;}

  </style>
