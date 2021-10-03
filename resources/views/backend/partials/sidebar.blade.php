<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
  <div>
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
                <a class="nav-link active" aria-current="page" >
                    <span><i class="far fa-user-circle"></i></span>
                    {{auth()->user()->name}}
                </a>
            </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home.start')}}">
               <span><i class="fas fa-house"></i></span>

                   Dashboard
            </a>
          </li>
          @if(auth()->user()->role=='admin')
          <li class="nav-item">
            <a class="nav-link" href="{{route('User.list')}}">
              <span><i class="far fa-user"></i></span>
              User
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('category.list')}}">
              <span><i class="fas fa-cart-plus"></i></span>
              FixedAssets Category 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Asset.list')}}">
              <span ><i class="fas fa-shopping-basket"></i></span>
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
              <span><i class="fas fa-people-carry"></i></span>
              Supplier
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('Purchase.list')}}">
              <span ><i class="fas fa-shopping-bag"></i></span>
              Purchase
            </a>
          </li> 
        </ul>
        
        </h6>
         <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="{{route('Stock.list')}}">
              <span><i class="fas fa-store"></i></span>
              Stock
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Allocation.request')}}">
            <span><i class="fas fa-truck-moving"></i></span>
              Allocation Request
            </a>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Allocation.list')}}">
            <span><i class="fas fa-truck-moving"></i></span>
              Allocation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Repair.list')}}">
              <span><i class="fas fa-tools"></i></span>
              Repair
            </a>
          </li>
          
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.asset')}}">
              <span><i class="fas fa-user-crown"></i></span>
              My Asset
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.assetreq')}}">
              <span><i class="fas fa-user-crown"></i></span>
              My Asset request
            </a>
          </li>
          @endif

        </ul>
      </div>
</div>
    </nav>