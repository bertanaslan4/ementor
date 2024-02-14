<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span><i class="fe fe-home"></i> Main</span>
                </li>
                <li class="active">
                    <a href="{{route('admin.home')}}"><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{route('admin.mentors')}}"><span>Mentorler</span></a>
                </li>
                <li>
                    <a href="{{route('admin.mentees')}}"><span>Menteeler</span></a>
                </li>
                <li>
                    <a href="{{route('admin.waitingusers')}}"><span>Bekleyen Listesi</span></a>
                </li>
                <li>
                    <a href="{{route('admin.relations')}}"><span>Eşleşmeler</span></a>
                </li>


                <li class="menu-title">
                    <span><i class="fe fe-document"></i> Sayfalar</span>
                </li>
                <li class="submenu">
                    <a href="#"><span>S.S.S</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('admin.faqs')}}"> Listele </a></li>
                        <li><a href="{{route('admin.faqs.create')}}"> Ekle </a></li>

                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span>Menü</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('admin.menu.list')}}"> Liste </a></li>
                        <li><a href="{{route('admin.menu.create')}}"> İçerik Ekle </a></li>
                    </ul>
                </li>
{{--                <li class="menu-title">--}}
{{--                    <span><i class="fe fe-star-o"></i> UI Interface</span>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="components.html"><span>Components</span></a>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a href="#"><span> Forms </span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul style="display: none;">--}}
{{--                        <li><a href="form-basic-inputs.html">Basic Inputs </a></li>--}}
{{--                        <li><a href="form-input-groups.html">Input Groups </a></li>--}}
{{--                        <li><a href="form-horizontal.html">Horizontal Form </a></li>--}}
{{--                        <li><a href="form-vertical.html"> Vertical Form </a></li>--}}
{{--                        <li><a href="form-mask.html"> Form Mask </a></li>--}}
{{--                        <li><a href="form-validation.html"> Form Validation </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a href="#"><span> Tables </span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul style="display: none;">--}}
{{--                        <li><a href="tables-basic.html">Basic Tables </a></li>--}}
{{--                        <li><a href="data-tables.html">Data Table </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a href="javascript:void(0);"><span>Multi Level</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul style="display: none;">--}}
{{--                        <li class="submenu">--}}
{{--                            <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>--}}
{{--                            <ul style="display: none;">--}}
{{--                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>--}}
{{--                                <li class="submenu">--}}
{{--                                    <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>--}}
{{--                                    <ul style="display: none;">--}}
{{--                                        <li><a href="javascript:void(0);">Level 3</a></li>--}}
{{--                                        <li><a href="javascript:void(0);">Level 3</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="javascript:void(0);"> <span>Level 1</span></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
