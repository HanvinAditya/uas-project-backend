<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{asset('images/ricky.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">Admin</h1>
                <p>Admin kopi d'kebon</p>
            </div>
        </div>
        <ul class="list-unstyled">
            <li class="active"><a href="/view_product"> <i class="icon-home"></i>Home </a></li>
            
            <li>
                <a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category</a>
            </li>

            <!-- tadinya ada 2 cm di hapus -->
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Products</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">Add Products</a></li>
                    <li><a href="{{url('view_product')}}">View Product</a></li>
                </ul>
            </li>

            <li>
                <a href="{{url('view_orders')}}"> <i class="icon-grid"></i>Orders</a>
            </li>
        </ul>
    </nav>