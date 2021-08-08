<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home.start')}}">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('User.list')}}">
              <span data-feather="file"></span>
              User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Asset.list')}}">
              <span data-feather="shopping-cart"></span>
              Fixed Assets
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Manager.create')}}">
              <span data-feather="users"></span>
              Manager
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('Purchase.list')}}">
              <span data-feather="layers"></span>
              Purchase
            </a>
          </li>
        </ul>

        
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="{{route('Stock.Create')}}">
              <span data-feather="file-text"></span>
              Stock
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Allocation.list')}}">
              <span data-feather="file-text"></span>
              Allocation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Repair.create')}}">
              <span data-feather="file-text"></span>
              Repair
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Report
            </a>
          </li>

        </ul>
      </div>
    </nav>