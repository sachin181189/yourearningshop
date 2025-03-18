
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5" style="background: linear-gradient(45deg, #9abdeb, #80f9b7)!important;color;#000">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::to('vendor/dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Product </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{URL::to('vendor/product-list')}}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Product List </span></a></li>
                                <li class="sidebar-item"><a href="{{URL::to('vendor/add-new-product')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Add New Product </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::to('vendor/vendor-order-list')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Order List</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::to('vendor/vendor-earning-detail')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Earning Detail</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::to('vendor/product-sell-report')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Product Sell Report</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->