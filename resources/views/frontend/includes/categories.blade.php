<header>
    <div class="top">
        <div class="container">
            <div class="left">
                <div class="mainLogo">
                    <a href="{{ url('/') }}">
                        <img src="{{ \Illuminate\Support\Facades\Session::get('site_setting') ?  \Illuminate\Support\Facades\Session::get('site_setting')->logo: ''  }}" alt="logo" height="45px" width="45px">
                    </a>
                </div>
                <div class="location">
                    <!-- <i class="fas fa-globe-europe"></i> -->
                    <input type="text" placeholder="Location..">
                </div>
                <div class="search">
                    <div class="searchFieldDiv">
                        <input type="text" placeholder="Search.." id="searchField">
                    </div>
                    <div class="searchBtnDiv">
                        <button id="searchBtn"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="signinBtnDiv">
                    <div class="dropdown">
                        <button id="signinBtn" class="showSignoutBtnHover" onclick="location.href='{{ \Illuminate\Support\Facades\Auth::check() ?   route('logout') : route('login') }}'"> {{ \Illuminate\Support\Facades\Auth::check() ? 'Sign Out': 'Sign in' }}</button>

                        <div class="dropdownContent" id="dropdownContent">
                            <a href="javascript:void(0)" id="myAds">My Ads</a>
                            <a href="javascript:void(0)" id="favorites">Favorites</a>
                            <a href="javascript:void(0)" id="signoutBtn">Sign out</a>
                        </div>
                    </div>
                </div>
                <div class="sellBtnDiv">
                    <button id="sellBtn">Sell</button>

                </div>


            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="dropdown">
                <a href="javascript:void(0)" id="browseCategories">Browse by Categories&nbsp; <i
                        class="fas fa-angle-down"></i></a>
                <div class="dropdownContent">
                    <a href="Javascript:void(0)" onclick="filter('All')">All Categories</a>
{{--                    @if(isset(@var))--}}
{{--                        @fore--}}
{{--                    @endif--}}
                    @forelse( $categories as $category)
                        <a href="Javascript:void(0)" onclick="filter('All')">{{ $category->name ?? '' }}</a>
                    @empty
                        <a href="Javascript:void(0)" onclick="filter('All')">No categories</a>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</header>
