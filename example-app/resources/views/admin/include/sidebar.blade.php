  <!-- ========== Left Sidebar Start ========== -->
  <div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{route('dashbord')}}">
                        <i data-feather="airplay"></i>
                        <span> Dashbord </span>
                    </a>
                </li>
    
                <li>
                    <a href="#catogries" data-toggle="collapse">
                        <i data-feather="list"></i>
                        <span> Catogries </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="catogries">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{  route('add-catogries')  }}">Add</a>
                            </li>
                            <li>
                                <a href="{{  route('catogries')  }}">Manage</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#blogs" data-toggle="collapse">
                        <i data-feather="list"></i>
                        <span> Blogs </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="blogs">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{  route('blogs')  }}">Add</a>
                            </li>
                            <li>
                                <a href="{{  route('add-blogs')  }}">Manage</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->