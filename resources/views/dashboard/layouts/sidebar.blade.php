  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard') ? 'active' : ''}}" aria-current="page" href="/dasboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard/table*') ? 'active' : '' }}" href="/dashboard/table">
              <span data-feather="file-text"></span>
              My Table
            </a>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard/bar') ? 'active' : '' }}" href="/dashboard/bar">
              <span data-feather="bar-chart-2"></span>
              Bar Chart
            </a>
          </li><li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard/pie') ? 'active' : '' }}" href="/dashboard/pie">
              <span data-feather="pie-chart"></span>
              Pie Chart
            </a>
          </li>
          
         
      </div>
    </nav>