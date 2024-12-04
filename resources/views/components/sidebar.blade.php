<div class="main-sidebar sidebar-style-2">
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.html">Pelayanan mebel</a>
                <a href="home"><img src="{{ asset('img/furniture.png') }}" alt="logo" width="110"></a>
            </div>
            <style>
                .sidebar-brand img {
                    margin-bottom: 20px;

                }

                .sidebar-menu .menu-header:first-of-type {
                    margin-top: 40px;

                }
            </style>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">PM</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="{{ Request::is('home*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('home') }}"><i
                            class="fas fa-chart-line"></i><span>Dashboard</span></a>
                </li>
                <li class="menu-header">Users</li>
                <li class="{{ Request::is('user*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-user"></i><span>All
                            Users</span></a>
                </li>

                <li class="menu-header">Product</li>
                <li class="{{ Request::is('product*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('product.index') }}"><i class="fas fa-gift"></i><span>All
                            Products</span></a>
                </li>
                <li class="menu-header">Orders</li>
                <li class="nav-item">
                    <a href="{{ route('order.index') }}" class="nav-link {{ Request::is('order') ? 'active' : '' }}"><i
                            class="fas fa-shopping-cart"></i><span>Orders</span></a>
                </li>
            </ul>
        </aside>
    </div>
</div>
