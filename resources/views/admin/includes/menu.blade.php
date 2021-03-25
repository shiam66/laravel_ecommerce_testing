<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Shiam <sup>Admin</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ url('/dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
       aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Category Info</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ url('/category/add') }}">Add Category</a>
            <a class="collapse-item" href="{{ url('/category/manage') }}">Manage Category</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwom"
       aria-expanded="true" aria-controls="collapseTwom">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Manufacturer Info</span>
    </a>
    <div id="collapseTwom" class="collapse" aria-labelledby="headingTwom" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ url('/manufacturer/add') }}">Add Manufacturer</a>
            <a class="collapse-item" href="{{ url('/manufacturer/manage') }}">Manage Manufacturer</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsep"
       aria-expanded="true" aria-controls="collapsep">
        <i class="fas fa-fw fa-cog"></i>
        <span>Product Info</span>
    </a>
    <div id="collapsep" class="collapse" aria-labelledby="headingp" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ url('/product/add') }}">Add Product</a>
            <a class="collapse-item" href="{{ url('/product/manage') }}">Manage Product</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
{{--<li class="nav-item">--}}
{{--    <a class="nav-link" href="charts.html">--}}
{{--        <i class="fas fa-fw fa-chart-area"></i>--}}
{{--        <span>Charts</span></a>--}}
{{--</li>--}}

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
