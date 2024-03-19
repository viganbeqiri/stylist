<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ url('/admin/home')}}" class="brand-link">
        <img src="/backend/img/AdminLTELogo.png" alt="surose" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Surose</span>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('/admin/home')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item pl-4">
                            <a href="{{ route('category.create')}}" class="nav-link">
                                <i class="fa fa-arrow-right"></i>
                                <p> Insert Category</p>
                            </a>
                        </li>
                        <li class="nav-item pl-4">
                            <a href="{{ route('category.index')}}" class="nav-link">
                                <i class="fa fa-arrow-right"></i>
                                <p> Category List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Tag
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item pl-4">
                            <a href="{{ route('tag.create')}}" class="nav-link">
                                <i class="fa fa-arrow-right"></i>
                                <p> Insert Tag</p>
                            </a>
                        </li>
                        <li class="nav-item pl-4">
                            <a href="{{ route('tag.index')}}" class="nav-link">
                                <i class="fa fa-arrow-right"></i>
                                <p> Tag List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item pl-4">
                            <a href="{{ route('product.create')}}" class="nav-link">
                                <i class="fa fa-arrow-right"></i>
                                <p> Insert Product</p>
                            </a>
                        </li>
                        <li class="nav-item pl-4">
                            <a href="{{ route('product.index')}}" class="nav-link">
                                <i class="fa fa-arrow-right"></i>
                                <p> Product List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Slider
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item pl-4">
                            <a href="{{ route('slider.create')}}" class="nav-link">
                                <i class="fa fa-arrow-right"></i>
                                <p> Insert Slder</p>
                            </a>
                        </li>
                        <li class="nav-item pl-4">
                            <a href="{{ route('slider.index')}}" class="nav-link">
                                <i class="fa fa-arrow-right"></i>
                                <p> Slider List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/order-list')}}" class="nav-link">
                        <i class="fa fa-address-book p-1"></i>
                        <p class="p-1"> Order</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/contact')}}" class="nav-link">
                        <i class="fa fa-address-book p-1"></i>
                        <p class="p-1"> Contact</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>

    </div>

</aside>