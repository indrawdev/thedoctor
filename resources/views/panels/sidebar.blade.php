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
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">dr. Indra</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            <a href="{{ route('dashboard.create') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('appointment.create') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Appointment
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('registration.create') }}" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Registration
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('medical.create') }}" class="nav-link">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
                Medical Record
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('letter.create') }}" class="nav-link">
              <i class="nav-icon fas fa-envelope-open-text"></i>
              <p>
                Letter
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Reporting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('distributor.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Annual
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('distributor.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-truck"></i>
                  <p>
                    Distributor
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('fee.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-money-bill"></i>
                  <p>
                    Fee
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('item.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-boxes"></i>
                  <p>
                    Item
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('doctor.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-md"></i>
                  <p>
                    Doctor
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('officer.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-nurse"></i>
                  <p>
                    Officer
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('patient.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-hospital-user"></i>
                  <p>
                    Patient
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>