<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('admin.index')}}">
                    <i class="fa fa-home"></i>Home
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>User</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('user.usercreate')}}">
                            <i class="fa fa-user"></i>Add User
                        </a>
                    </li>
                    <li>
                        <a href="{{route('role.userroles')}}">
                            <i class="fa fa-user"></i>User Roles
                        </a>
                    </li>
                    <li>
                        <a href="{{route('profile.index')}}">
                            <i class="fa fa-user"></i>User Profile
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{route('category.index')}}">
                    <i class="fa fa-gear"></i>Categories
                </a>
            </li>
            <li>
                <a href="{{route('product.index')}}">
                    <i class="fa fa-gear"></i>Products
                </a>
            </li>
            <li>
                <a href="{{route('product.create')}}">
                    <i class="fa fa-gear"></i>Product Create
                </a>
            </li>
            @php
                $userRoles = Auth::user()->roles->pluck('name');
            If($userRoles->contains('admin')){
            @endphp
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gift"></i>
                    <span>Faq</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i>Faq's</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i>Add Faq</a></li>
                </ul>
            </li>
            @php
                }
            @endphp
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gift"></i>
                    <span>Orders</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i>New Orders</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i>Accepted Orders</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i>Shipping Orders</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i>Completed Orders</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i>Cancelled Orders</a></li>

                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-message"></i>Message
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gift"></i>
                    <span>Products</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i>Products</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i>Add Product</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-comment"></i>Comments
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-users"></i>Users
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-asterisk"></i>Frequently Ask
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-comments"></i>Messages
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-cog"></i>Settings
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-globe"></i>Social Media
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-users"></i>Users
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-diamond"></i>
                    <span>Orders</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>New Orders</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Accepted Orders</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Shipping Orders</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Completed Orders</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Categories</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i>Categories</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i>Add Category</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
