<div class="inner-wrapper">
    <!-- start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">

        <div class="sidebar-header">
            <div class="sidebar-title">
                Navigation
            </div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <li class="nav-active">
                            <a class="nav-link" href="#">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-parent">
                            <a class="nav-link" href="#">
                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                <span>Master </span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a class="nav-link" href="ui-elements-loading-overlay.html">
                                        Kategori
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ 'status-list' }}">
                                        Status
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="nav-link" href="{{'produk-list'}}">
                                <i class="fa fa-folder" aria-hidden="true"></i>
                                <span>Dokumen </span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="#">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span>Report </span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="#">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                <span>Pengguna</span>
                            </a>
                        </li>

                        <li class="nav-parent">
                            <a class="nav-link" href="#">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span>Landing Page </span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a class="nav-link" href="ui-elements-loading-overlay.html">
                                        Berita
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="ui-elements-loading-progress.html">
                                        Info
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-parent">
                            <a class="nav-link" href="#">
                                <i class="fa fa-gear" aria-hidden="true"></i>
                                <span>Pengaturan </span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a class="nav-link" href="ui-elements-loading-overlay.html">
                                        Message
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="ui-elements-loading-progress.html">
                                        Website
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>

                <hr class="separator" />

                <div class="sidebar-widget widget-tasks">
                    <div class="widget-header">
                        <h6>Projects</h6>
                        <div class="widget-toggle">+</div>
                    </div>
                    <div class="widget-content">
                        <ul class="list-unstyled m-0">
                            <li><a href="#">Admin Page 1</a></li>
                            <li><a href="#">Admin Page 2</a></li>
                            <li><a href="#">Admin Page 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <script>
                // Maintain Scroll Position
                if (typeof localStorage !== 'undefined') {
                    if (localStorage.getItem('sidebar-left-position') !== null) {
                        var initialPosition = localStorage.getItem('sidebar-left-position'),
                            sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                        sidebarLeft.scrollTop = initialPosition;
                    }
                }
            </script>


        </div>

    </aside>
    <!-- end: sidebar -->