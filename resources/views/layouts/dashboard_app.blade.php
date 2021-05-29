
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Ecommerce')</title>

    <!-- vendor css -->

    <link href="{{ asset('dashboard_asset') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{ asset('dashboard_asset') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/select2/css/select2.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('dashboard_asset') }}/img/favicon.png" type="image/gif" sizes="16x16">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset') }}/css/starlight.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">


      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        @if (Auth::user()->role == 1)
        <a href="{{ route('home') }}" class="sl-menu-link @yield('home')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('order.index') }}" class="sl-menu-link @yield('order')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Orders</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="{{ route('contact.message') }}" class="sl-menu-link @yield('contact')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
              <span class="menu-item-label">Contact Messages</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

          @else
          <a href="{{ route('customer.dashbaord') }}" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
        @endif

      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{ user_name() }}</span>
              <img src="{{ asset('uploads') }}/profile/{{ Auth::user()->profile_photo }}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{ Route('profile.index') }}"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                @if (Auth::user()->role == 1)

                <li><a href="{{ route('register') }}"><i class="icon ion-ios-person-outline"></i>Register A person</a></li>
                @endif
                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="icon ion-power"></i> Sign Out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>

      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->

    <!-- ########## END: RIGHT PANEL ########## --->
    @yield('dashboard_content')




<script src="{{ asset('dashboard_asset') }}/lib/jquery/jquery.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/popper.js/popper.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/bootstrap/bootstrap.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('dashboard_asset') }}/lib/datatables-responsive/dataTables.responsive.js"></script>

<script src="{{ asset('dashboard_asset') }}/js/starlight.js"></script>
@yield('footer_scripts')
</body>
</html>
