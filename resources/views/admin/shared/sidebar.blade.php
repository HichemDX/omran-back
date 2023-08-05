<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
      <!--<img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="Banaa Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
      <span class="brand-text font-weight-light">{{env('APP_NAME')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                {{ __("Dashboard") }}
              </p>
            </a>
          </li>

          <li class="nav-item {{ (request()->is('admin/stores*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ (request()->is('admin/stores*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-store"></i>
              <p>
                {{ __("Stores") }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.stores.all')}}" class="nav-link {{ (request()->is('admin/stores')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    {{ __("All Stores") }}
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.stores.new')}}" class="nav-link {{ (request()->is('admin/stores/new')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    {{ __("New Stores") }}
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.stores.confirmed')}}" class="nav-link {{ (request()->is('admin/stores/confirmed')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    {{ __("Confirmed Stores") }}
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.stores.refused')}}" class="nav-link {{ (request()->is('admin/stores/refused')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    {{ __("Refused Stores") }}
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.stores.banned')}}" class="nav-link {{ (request()->is('admin/stores/banned')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    {{ __("Banned Stores") }}
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.categories') }}" class="nav-link {{ (request()->is('admin/categories')) ? 'active' : '' }}">
              <i class="nav-icon fas fas fa-th"></i>
              <p>
                {{ __("Categories") }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.subCategories') }}" class="nav-link {{ (request()->is('admin/subCategories')) ? 'active' : '' }}">
              <i class="nav-icon fas fas fa-th"></i>
              <p>
                {{ __("Sub Categories") }}
              </p>
            </a>
          </li>

          <li class="nav-item {{ (request()->is('admin/customers*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ (request()->is('admin/customers*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                {{ __("Customers") }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.customers.all')}}" class="nav-link {{ (request()->is('admin/customers')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __("All Customers") }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.customers.banned')}}" class="nav-link {{ (request()->is('admin/customers/banned')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __("Banned Customers") }}</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.products') }}" class="nav-link {{ (request()->is('admin/products')) ? 'active' : '' }}">
              <i class="nav-icon fas fas fa-tag"></i>
              <p>
                {{ __("products") }}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.orders') }}" class="nav-link {{ (request()->is('admin/orders')) ? 'active' : '' }}">
              <i class="nav-icon fas fas fa-file-invoice-dollar"></i>
              <p>
                {{ __("Orders") }}
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('admin/settings*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ (request()->is('admin/settings*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>
                {{ __("Settings") }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.settings.privacy')}}" class="nav-link {{ (request()->is('admin/settings/privacy')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __("Privacy Policy") }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.settings.terms')}}" class="nav-link {{ (request()->is('admin/settings/terms')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __("Terms & Conditions") }}</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('admin.settings.about')}}" class="nav-link {{ (request()->is('admin/settings/about')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __("About") }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.settings.informations')}}" class="nav-link {{ (request()->is('admin/settings/informations')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __("App Informations") }}</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item {{ (request()->is('admin/sliders*')) || (request()->is('admin/offres*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ (request()->is('admin/sliders*')) || (request()->is('admin/offres*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                {{ __("Sliders & Offres") }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.sliders.all') }}" class="nav-link {{ (request()->is('admin/sliders')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __("Sliders") }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.offres.all')}}" class="nav-link {{ (request()->is('admin/offres')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __("Offres") }}</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.profile.profile') }}" class="nav-link {{ (request()->is('admin/profile')) ? 'active' : '' }}">
              <i class="nav-icon fas fas fa-user"></i>
              <p>
                {{ __("Profile") }}
              </p>
            </a>
          </li>


          <li class="nav-item {{ (request()->is('admin/reports*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link  {{ (request()->is('admin/reports*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-ban"></i>
              <p>
                {{ __("Reports") }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.reports.store') }}" class="nav-link {{ (request()->is('admin/reports/store')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __("Reports on stores") }}</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{route('admin.reports.general')}}" class="nav-link {{ (request()->is('admin/reports/general')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __("Reports general") }}</p>
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.unites.all') }}" class="nav-link {{ (request()->is('admin/unites*')) ? 'active' : '' }}">
              <i class="nav-icon fas fas fa-weight"></i>
              <p>
                {{ __("Unites") }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.logout') }}" class="nav-link {{ (request()->is('admin/logout')) ? 'active' : '' }}">
              <i class="nav-icon fas fas fa-sign-out-alt"></i>
              <p>
                {{ __("Logout") }}
              </p>
            </a>
          </li>





          <li class="my-4"></li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
