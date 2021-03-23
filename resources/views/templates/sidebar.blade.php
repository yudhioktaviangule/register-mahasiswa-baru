<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('pendaftar.index') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Data Pendaftar</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="
                event.preventDefault();
                document.getElementById('logout-form').submit();
            " class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Logout</p>
            </a>
        </li>
    </ul>
</nav>