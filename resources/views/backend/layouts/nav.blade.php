<div class="deznav">
    <div class="deznav-scroll mm-active ps ps--active-y">
        <ul class="metismenu mm-show" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('user.index') }}">User</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ asset('asset/Backend/app-profile.html') }}">Profile</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false" class="mm-collapse">
                            <li><a href="{{ asset('asset/Backend/email-compose.html') }}">Compose</a></li>
                            <li><a href="{{ asset('asset/Backend/email-inbox.html') }}">Inbox</a></li>
                            <li><a href="{{ asset('asset/Backend/email-read.html') }}">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ asset('asset/Backend/app-calender.html') }}">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false" class="mm-collapse">
                            <li><a href="{{ asset('asset/Backend/ecom-product-grid.html') }}">Product Grid</a></li>
                            <li><a href="{{ asset('asset/Backend/ecom-product-list.html') }}">Product List</a></li>
                            <li><a href="{{ asset('asset/Backend/ecom-product-detail.html') }}">Product Details</a></li>
                            <li><a href="{{ asset('asset/Backend/ecom-product-order.html') }}">Order</a></li>
                            <li><a href="{{ asset('asset/Backend/ecom-checkout.html') }}">Checkout</a></li>
                            <li><a href="{{ asset('asset/Backend/ecom-invoice.html') }}">Invoice</a></li>
                            <li><a href="{{ asset('asset/Backend/ecom-customers.html') }}">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ asset('asset/Backend/chart-flot.html') }}">Flot</a></li>
                    <li><a href="{{ asset('asset/Backend/chart-morris.html') }}">Morris</a></li>
                    <li><a href="{{ asset('asset/Backend/chart-chartjs.html') }}">Chartjs</a></li>
                    <li><a href="{{ asset('asset/Backend/chart-chartist.html') }}">Chartist</a></li>
                    <li><a href="{{ asset('asset/Backend/chart-sparkline.html') }}">Sparkline</a></li>
                    <li><a href="{{ asset('asset/Backend/chart-peity.html') }}">Peity</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Bootstrap</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ asset('asset/Backend/ui-accordion.html') }}">Accordion</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-alert.html') }}">Alert</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-badge.html') }}">Badge</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-button.html') }}">Button</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-modal.html') }}">Modal</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-button-group.html') }}">Button Group</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-list-group.html') }}">List Group</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-media-object.html') }}">Media Object</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-card.html') }}">Cards</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-carousel.html') }}">Carousel</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-dropdown.html') }}">Dropdown</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-popover.html') }}">Popover</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-progressbar.html') }}">Progressbar</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-tab.html') }}">Tab</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-typography.html') }}">Typography</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-pagination.html') }}">Pagination</a></li>
                    <li><a href="{{ asset('asset/Backend/ui-grid.html') }}">Grid</a></li>

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ asset('asset/Backend/uc-select2.html') }}">Select 2</a></li>
                    <li><a href="{{ asset('asset/Backend/uc-nestable.html') }}">Nestedable</a></li>
                    <li><a href="{{ asset('asset/Backend/uc-noui-slider.html') }}">Noui Slider</a></li>
                    <li><a href="{{ asset('asset/Backend/uc-sweetalert.html') }}">Sweet Alert</a></li>
                    <li><a href="{{ asset('asset/Backend/uc-toastr.html') }}">Toastr</a></li>
                    <li><a href="{{ asset('asset/Backend/map-jqvmap.html') }}">Jqv Map</a></li>
                    <li><a href="{{ asset('asset/Backend/uc-lightgallery.html') }}">Lightgallery</a></li>
                </ul>
            </li>
            <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Widget</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Blogs</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('blog.index') }}">Blogs</a></li>
                    <li><a href="{{ route('category.index') }}">Category</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Project</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ route('project.index') }}">Project</a></li>
                    <li><a href="{{ route('product.index') }}">Product</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    <li><a href="{{ asset('asset/Backend/page-register.html') }}">Register</a></li>
                    <li><a href="{{ asset('asset/Backend/page-login.html') }}">Login</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false" class="mm-collapse">
                            <li><a href="{{ asset('asset/Backend/page-error-400.html') }}">Error 400</a></li>
                            <li><a href="{{ asset('asset/Backend/page-error-403.html') }}">Error 403</a></li>
                            <li><a href="{{ asset('asset/Backend/page-error-404.html') }}">Error 404</a></li>
                            <li><a href="{{ asset('asset/Backend/page-error-500.html') }}">Error 500</a></li>
                            <li><a href="{{ asset('asset/Backend/page-error-503.html') }}">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ asset('asset/Backend/page-lock-screen.html') }}">Lock Screen</a></li>
                </ul>
            </li>
        </ul>
        <div class="add-menu-sidebar">
            <img src="images/calendar.png" alt="" class="mr-3">
            <p class="	font-w500 mb-0">Create Workout Plan Now</p>
        </div>
        <div class="copyright">
            <p><strong>Gymove Fitness Admin Dashboard</strong> © 2020 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by DexignZone</p>
        </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 936px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 709px;"></div></div></div>
</div>