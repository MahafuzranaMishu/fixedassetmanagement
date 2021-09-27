<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
  <div>
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    {{auth()->user()->name}}
                </a>
            </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home.start')}}">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          @if(auth()->user()->role=='admin')
          <li class="nav-item">
            <a class="nav-link" href="{{route('User.list')}}">
              <span data-feather="file"></span>
              User
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('category.list')}}">
              <span data-feather="file" ></span>
              <span class="text-danger">FixedAssets Category </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Asset.list')}}">
              <span data-feather="shopping-cart"></span>
              Fixed Assets
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Admin.list')}}">
              <span data-feather="users"></span>
              Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Supplier.list')}}">
              <span data-feather="layers"></span>
              Supplier
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
            <a class="nav-link" href="{{route('Stock.list')}}">
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
            <a class="nav-link" href="{{route('Repair.list')}}">
              <span data-feather="file-text"></span>
              Repair
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Repair.list')}}">
              <span data-feather="file-text"></span>
              Report
            </a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.asset')}}">
              <span data-feather="file-text"></span>
              My Asset
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Repair.list')}}">
              <span data-feather="file-text"></span>
              Repair
            </a>
          </li>

          @endif

        </ul>
      </div>
</div>
    </nav>