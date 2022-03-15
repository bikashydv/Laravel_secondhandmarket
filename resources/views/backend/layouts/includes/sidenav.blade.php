<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ \Illuminate\Support\Facades\Session::get('site_setting') ?  \Illuminate\Support\Facades\Session::get('site_setting')->logo: ''  }}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site.setting') }}">
                            <i class="ni ni-single-02 text-yellow"></i>
                            <span class="nav-link-text">Site Setting</span>
                        </a>
                    </li>


{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('site.setting') }}">--}}
{{--                            <i class="ni ni-planet text-orange"></i>--}}
{{--                            <span class="nav-link-text">Site Setting</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category') }}">
                            <i class="ni ni-pin-3 text-primary"></i>
                            <span class="nav-link-text">Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="examples/tables.html">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">Sub categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="examples/profile.html">
                            <i class="ni ni-single-02 text-yellow"></i>
                            <span class="nav-link-text">Product</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="examples/login.html">
                            <i class="ni ni-key-25 text-info"></i>
                            <span class="nav-link-text">Order</span>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</nav>
