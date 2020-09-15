  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-success">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard.create') }}" class="brand-link">
      <img src="{{ asset('img/AdminLTELogo.png') }}" alt="Dokter Praktek" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dokter Praktek</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <span class="badge bg-warning">20-03-2020</span>
        </div>
      </div>
      @auth
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            <a href="{{ route('dashboard.create') }}" class="nav-link {{ (request()->is('dashboard/create')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                @lang('menu.dashboard')
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('appointment.create') }}" class="nav-link {{ (request()->is('appointment/create')) ? 'active' : '' }}">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                @lang('menu.appointment')
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('registration.create') }}" class="nav-link {{ (request()->is('registration/create')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-friends "></i>
              <p>
                @lang('menu.registration')
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('examination.create') }}" class="nav-link {{ (request()->is('examination/create')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
                @lang('menu.examination')
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('medical.create') }}" class="nav-link {{ (request()->is('medical/create')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-medical"></i>
              <p>
                @lang('menu.medical_record')
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('letter.create') }}" class="nav-link {{ (request()->is('letter/create')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope-open-text"></i>
              <p>
                @lang('menu.letter')
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                @lang('menu.reporting')
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    @lang('menu.report.fee_doctor')
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    @lang('menu.report.sales')
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    @lang('menu.report.bpjs')
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ (request()->is('master*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('master*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-database"></i>
              <p>
                @lang('menu.master_data')
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('supplier.create') }}" class="nav-link {{ (request()->is('master/supplier/create')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-truck"></i>
                  <p>
                    @lang('menu.supplier')
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('fee.create') }}" class="nav-link {{ (request()->is('master/fee/create')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-money-bill"></i>
                  <p>
                    @lang('menu.fee')
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('item.create') }}" class="nav-link {{ (request()->is('master/item/create')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-boxes"></i>
                  <p>
                    @lang('menu.item')
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('doctor.create') }}" class="nav-link {{ (request()->is('master/doctor/create')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-user-md"></i>
                  <p>
                    @lang('menu.doctor')
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('officer.create') }}" class="nav-link {{ (request()->is('master/officer/create')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-user-nurse"></i>
                  <p>
                    @lang('menu.officer')
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('patient.create') }}" class="nav-link {{ (request()->is('master/patient/create')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-hospital-user"></i>
                  <p>
                    @lang('menu.patient')
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('billing.create') }}" class="nav-link {{ (request()->is('billing/create')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                @lang('menu.billing')
              </p>
            </a>
          </li>
        </ul>
      </nav>
      @endauth
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>