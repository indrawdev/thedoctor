  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-success">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
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
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('distributor.create') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Distributor
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('fee.create') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Fee
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('item.create') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Item
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('doctor.create') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Doctor
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('officer.create') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Officer
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('patient.create') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Patient
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('appointment.create') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Appointment
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('registration.create') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Registration
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('medical.create') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Medical Record
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('letter.create') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Letter
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>