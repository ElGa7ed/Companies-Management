<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>




            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الموظفين  </span>
                    <span
                        class="badge badge badge-warning  badge-pill float-right mr-2">{{App\Models\Employee::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('dashboard.employees')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('dashboard.employees.create')}}" data-i18n="nav.dash.crypto">أضافة
                            موظف </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الشركات  </span>
                    <span
                        class="badge badge badge-warning  badge-pill float-right mr-2">{{App\Models\Company::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('dashboard.companies')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('dashboard.companies.create')}}" data-i18n="nav.dash.crypto">أضافة
                            شركة </a>
                    </li>
                </ul>
            </li>



            <li class=" nav-item"><a href="#"><i class="la la-pie-chart"></i><span class="menu-title"
                                                                                   data-i18n="nav.chartist.main">Chartist</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="chartist-line-charts.html"
                           data-i18n="nav.chartist.chartist_line_charts">Line charts</a>
                    </li>
                    <li><a class="menu-item" href="chartist-bar-charts.html"
                           data-i18n="nav.chartist.chartist_bar_charts">Bar charts</a>
                    </li>
                    <li><a class="menu-item" href="chartist-pie-charts.html"
                           data-i18n="nav.chartist.chartist_pie_charts">Pie charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="morris-charts.html"><i class="la la-share-alt"></i><span class="menu-title"
                                                                                                    data-i18n="nav.morris_charts.main">Morris Charts</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-bolt"></i><span class="menu-title"
                                                                              data-i18n="nav.flot_charts.main">Flot Charts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="flot-line-charts.html" data-i18n="nav.flot_charts.flot_line_charts">Line
                            charts</a>
                    </li>
                    <li><a class="menu-item" href="flot-bar-charts.html" data-i18n="nav.flot_charts.flot_bar_charts">Bar
                            charts</a>
                    </li>
                    <li><a class="menu-item" href="flot-pie-charts.html" data-i18n="nav.flot_charts.flot_pie_charts">Pie
                            charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="rickshaw-charts.html"><i class="la la-bullseye"></i><span class="menu-title"
                                                                                                     data-i18n="nav.rickshaw_charts.main">Rickshaw Charts</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-map"></i><span class="menu-title"
                                                                             data-i18n="nav.maps.main">Maps</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.maps.google_maps.main">google Maps</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="gmaps-basic-maps.html"
                                   data-i18n="nav.maps.google_maps.gmaps_basic_maps">Maps</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-services.html"
                                   data-i18n="nav.maps.google_maps.gmaps_services">Services</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-overlays.html"
                                   data-i18n="nav.maps.google_maps.gmaps_overlays">Overlays</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-routes.html"
                                   data-i18n="nav.maps.google_maps.gmaps_routes">Routes</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-utils.html"
                                   data-i18n="nav.maps.google_maps.gmaps_utils">Utils</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.maps.vector_maps.main">Vector Maps</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#" data-i18n="nav.maps.vector_maps.jquery_mapael.main">jQuery
                                    Mapael</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="vector-maps-mapael-basic.html"
                                           data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_basic">Basic
                                            Maps</a>
                                    </li>
                                    <li><a class="menu-item" href="vector-maps-mapael-advance.html"
                                           data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_advance">Advance
                                            Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="vector-maps-jvector.html"
                                   data-i18n="nav.maps.vector_maps.jvector_maps">jVector Map</a>
                            </li>
                            <li><a class="menu-item" href="vector-maps-jvq.html"
                                   data-i18n="nav.maps.vector_maps.vector_maps_jvq">JQV Map</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.support">Support</span><i class="la la-ellipsis-h ft-minus"
                                                                        data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        data-original-title="Support"></i>
            </li>
            <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="la la-support"></i><span
                        class="menu-title" data-i18n="nav.support_raise_support.main">Raise Support</span></a>
            </li>
            <li class=" nav-item">
                <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i
                        class="la la-text-height"></i>
                    <span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</div>
