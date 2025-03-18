<?php 
$role = Session::get('role');
?>
        <?php if($role == 1): ?>
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5" style="background:linear-gradient(358deg, #9abdeb, #80f9b7)!important">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="" style="background: linear-gradient(45deg, #9abdeb, #80f9b7)!important;color;#000">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(URL::to('admin/dashboard')); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(URL::to('admin/company-profile')); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Manage Company Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Content </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/edit-aboutus')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> About Us </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/edit-privacy-policy')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Privacy Policy </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/edit-term-condition')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Term & Condition </span></a></li>
                                <!--<li class="sidebar-item"><a href="<?php echo e(URL::to('admin/edit-shipping-policy')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Shipping Policy </span></a></li>-->
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/achivers-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Achivers List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/testimonial-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Testimonial List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/document-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Document List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/income-plan')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Royality Income Plan </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/investment-plan')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Investment Plan </span></a></li>
                            </ul>
                        </li>
                                                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Coupon </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/coupon-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Coupon List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-coupon')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add New Coupon </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Brand </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/brand-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Brand List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-brand')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add New brand </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Video </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/video-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Video List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-video')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add New video </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Product </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/product-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Product List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-product')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Add New Product </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Our Product </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/our-product')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Our Product List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-our-product')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add New Our Product </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Category </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/category-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Category List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-category')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add New Category </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Manage Subcategory </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/sub-category-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Subcategory List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-subcategory')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Add New Subcategory </span></a></li>
                            </ul>
                        </li>
                                                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Manage Admin User </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/user-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu">Admin User List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-user')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Add New User </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Delivery Partner </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/vendor-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Delivery Partner List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-vendor')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Add New Delivery Partner </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Delivery Boy </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/driver-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Delivery Boy List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-driver')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Add New Delivery Boy </span></a></li>
                            </ul>
                        </li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Business Partner </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/customer-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Business Partner List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Slider </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/slider-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Slider List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-slider')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Add New Slider </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Banner </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/banner-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Banner List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Order </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/order-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Order List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Payment </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/payment-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Payment List </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Report </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/product-report')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Product Report </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Store </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/store-request')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Store Request </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <?php endif; ?>
        
        <?php if($role == 2): ?>
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5" style="background:linear-gradient(358deg, #9abdeb, #80f9b7)!important">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="" style="background: linear-gradient(45deg, #9abdeb, #80f9b7)!important;color;#000">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(URL::to('admin/dashboard')); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(URL::to('admin/company-profile')); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Manage Company Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Brand </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/brand-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Brand List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-brand')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add New brand </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Product </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/product-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Product List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-product')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Add New Product </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Our Product </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/our-product')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Our Product List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-our-product')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add New Our Product </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Category </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/category-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Category List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-category')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add New Category </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Manage Subcategory </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/sub-category-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Subcategory List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-subcategory')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Add New Subcategory </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Manage Admin User </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/user-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Admin User List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-user')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Add New User </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Manage Vendor </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/vendor-list')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Vendor List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/add-new-vendor')); ?>" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Add New Vendor </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <?php endif; ?>
        
        <?php if($role == 3): ?>
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5" style="background:linear-gradient(358deg, #9abdeb, #80f9b7)!important">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="" style="background: linear-gradient(45deg, #9abdeb, #80f9b7)!important;color;#000">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(URL::to('admin/dashboard')); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Content </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/edit-aboutus')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> About Us </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/edit-privacy-policy')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Privacy Policy </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/edit-term-condition')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Term & Condition </span></a></li>
                                <!--<li class="sidebar-item"><a href="<?php echo e(URL::to('admin/edit-shipping-policy')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Shipping Policy </span></a></li>-->
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/achivers-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Achivers List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/testimonial-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Testimonial List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/document-list')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Document List </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo e(URL::to('admin/business-plan')); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Business Plan </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <?php endif; ?><?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/admin/sidebar.blade.php ENDPATH**/ ?>