<!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('home')}}"><i class="menu-icon fa fa-home"></i>Go to home </a>
                    </li>
                    <li class="menu-title"></li><!-- /.menu-title -->
                    <li class=" ">
                        <a href="{{route('view_category')}}" > <i class="menu-icon fa fa-cogs"></i>category</a>
                        <a href="{{route('view_users')}}" > <i class="menu-icon fas fa-users"></i>Users</a>
                      
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-money-bill-transfer"></i>products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{route('add_product_view')}}">add product</a></li>
                            <li><i class="fa fa-table"></i><a href="{{route('showProduct')}}">show product</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{route('all_orders')}}" > <i class="menu-icon fa fa-th"></i>Oredrs</a>
                       
                    </li>

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->