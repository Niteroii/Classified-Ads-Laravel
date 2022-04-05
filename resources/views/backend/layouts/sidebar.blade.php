 <!-- partial -->
 <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="http://172.19.0.3/auth#">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('category.create') }}">Add</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('category.index') }}">Manage</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false"
                    aria-controls="ui-basic1">
                    <i class="mdi mdi-chart-pie menu-icon"></i>
                    <span class="menu-title">Subcategory</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic1">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item "> <a class="nav-link" href="{{ route('subcategory.create') }}">Add</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('subcategory.index') }}">Manage</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item active">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false"
                    aria-controls="ui-basic2">
                    <i class="mdi mdi-emoticon menu-icon"></i>
                    <span class="menu-title">Childcategory</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic2">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('childcategory.create') }}">Add</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('childcategory.index') }}">Manage</a>
                        </li>
                    </ul>
                </div>
            </li>


          <li class="nav-item">
           
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
           
            <div class="collapse" id="auth">
             
            </div>
          </li>
          <li class="nav-item">
           
          </li>
        </ul>
      </nav>
      <!-- partial -->