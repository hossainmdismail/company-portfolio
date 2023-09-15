<div class="deznav">
    <div class="deznav-scroll mm-active ps ps--active-y">
        <ul class="metismenu mm-show" id="menu">
            <li class="mm-active"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                {{-- <ul aria-expanded="false" class="mm-collapse mm-show">
                    <li class="mm-active"><a href="index.html" class="mm-active">Dashboard</a></li>
                    <li><a href="workout-statistic.html">Workout Statistic</a></li>
                    <li><a href="workoutplan.html">Workout Plan</a></li>
                    <li><a href="distance-map.html">Distance Map</a></li>
                    <li><a href="food-menu.html">Diet Food Menu</a></li>
                    <li><a href="personal-record.html">Personal Record</a></li>
                </ul> --}}
            </li>
            <li><a class="has-arrow ai-icon" href="{{ route('team.index') }}">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Team</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="{{ route('service.index') }}">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Service</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="{{ route('sociallink.index') }}">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Social Link</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="{{ route('webinfo.index') }}">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Web Info</span>
                </a>
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
