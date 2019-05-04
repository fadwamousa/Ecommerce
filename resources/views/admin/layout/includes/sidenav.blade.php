{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="{{ url('admin/products') }}">
                    <i class="glyphicon glyphicon-list"></i>
                    Products
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{ url('admin/products') }}"> Product</a></li>
                    <li><a href="{{ url('admin/products/create') }}">Add Product</a></li>
                    <li><a href="{{ url('admin/categories') }}">Categories</a></li>
                    <li><a href="{{ url('admin/orders/pending') }}">Pending Orders</a></li>
                    <li><a href="{{ url('admin/orders/delivered') }}">Deliverd Orders</a></li>
                    <li><a href="{{ url('admin/orders') }}">All Orders</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->
