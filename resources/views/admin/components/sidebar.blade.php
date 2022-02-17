<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle" style="color: #9ac0ec">Planet</span>
            <span class="align-mmiddle" style="color: #041562">Laundry</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('home') }}">
                    <i class="align-middle text-dark" data-feather="sliders"></i> <span
                        class="align-middle text-dark">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-header text-dark">
                Tables
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('users') }}">
                    <i class="align-middle text-dark" data-feather="user"></i>
                    <span class="align-middle text-dark">User</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('outlets') }}">
                    <i class="align-middle text-dark" data-feather="home"></i>
                    <span class="align-middle text-dark">Outlet</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('customers') }}">
                    <i class="align-middle text-dark" data-feather="users"></i>
                    <span class="align-middle text-dark">Customer</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('packages') }}">
                    <i class="align-middle text-dark" data-feather="package"></i> <span
                        class="align-middle text-dark">Package</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
