<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Uma Shop</div>
    </a>

    <hr class="sidebar-divider my-0">


    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Product</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white my-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Buttons</a>
            </div>
            <div class="bg-white my-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Buttons</a>
            </div>
            <div class="bg-white my-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Buttons</a>
            </div>
        </div>
    </li>

</ul>