<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SecondHandBazar</title>
    <link rel="icon" href="./images/fav.png" height="200" width="200">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    <!-- stylesheets -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <!-- firebase -->
    <script src="https://www.gstatic.com/firebasejs/5.8.3/firebase.js"></script>
</head>

<body>
<!-- signin popup -->
<div id="signinPopup">
    <div id="signinPopupContainer">
        <div class="closeSigninPopupDiv">
            <span id="closeSigninPopup">&times;</span>
        </div>
        <div class="headingDiv">
            <span class="heading">Sign in</span>
            <br>
            <span>Buy &amp; sell things easily secondHandbazer</span>
        </div>
        <div id="signinWarning"></div>
        <form id="signinForm">
            <input type="email" placeholder="Email.." id="signinEmail" required>
            <input type="password" placeholder="Passowrd.." id="signinPw" required>
            <input type="submit" value="Sign in">
        </form>
        <p>Don't have an account? <a href="#" id="signupBtn">Sign up</a></p>
    </div>
</div>


<!-- signup popup -->
<div id="signupPopup">
    <div id="signupPopupContainer">
        <div class="closeSignupPopupDiv">
            <span id="closeSignupPopup">&times;</span>
        </div>
        <div class="headingDiv">
            <span class="heading">Sign up</span>
            <br>
            <span>Buy &amp; sell things easily with OLX.</span>
        </div>
        <div id="signupWarning"></div>
        <form id="signupForm">
            <input type="text" placeholder="Name.." id="signupName" required>
            <input type="email" placeholder="Email.." id="signupEmail" required>
            <input type="password" placeholder="Passowrd.." id="signupPw" required>
            <input type="submit" value="Sign up">
        </form>
        <p>Already have an account? <a href="#" id="signinBtn_2">Sign in</a></p>
    </div>
</div>

<!-- category popup -->
<div id="categoryPopup">
    <div id="categoryPopupContainer">
        <div class="closeCategoryPopupDiv">
            <span id="closeCategoryPopup">&times;</span>
        </div>
        <div class="headingDiv">
            <span class="heading">Choose Category</span>
        </div>
        <div id="warning">Please choose a category</div>
        <form id="categoryForm">
            <label class="radioContainer">Mobiles
                <input type="radio" name="category" value="Mobiles">
                <span class="radioCheck"></span>
            </label>
            <label class="radioContainer">Vehicles
                <input type="radio" name="category" value="Vehicles">
                <span class="radioCheck"></span>
            </label>
            <label class="radioContainer">Electronics
                <input type="radio" name="category" value="Electronics">
                <span class="radioCheck"></span>
            </label>
            <label class="radioContainer">Bikes
                <input type="radio" name="category" value="Bikes">
                <span class="radioCheck"></span>
            </label>
            <label class="radioContainer">Services
                <input type="radio" name="category" value="Services">
                <span class="radioCheck"></span>
            </label>
            <label class="radioContainer">Furniture
                <input type="radio" name="category" value="Furniture">
                <span class="radioCheck"></span>
            </label>
            <input type="submit" value="next">
        </form>
    </div>
</div>

<!-- sell popup -->
<div id="sellPopup">
    <div id="sellPopupContainer">
        <div class="closeSellPopupDiv">
            <span id="backCategoryPopup"><i class="fas fa-arrow-left"></i></span>
            <span id="closeSellPopup">&times;</span>
        </div>
        <div class="headingDiv">
            <span class="heading">Post Your Ad</span>
        </div>
        <form id="sellForm">
            <p id="categoryName"></p>
            <input type="text" placeholder="Title.." id="adTitle" required>
            <input type="text" placeholder="Description.." id="adDescription" required>
            <input type="number" placeholder="Price.." id="adPrice" required>
            <input type="number" placeholder="Phone number.." id="adPhone">
            <input type="file" id="adImage" multiple>
            <input type="submit" value="Add">
        </form>
    </div>
</div>
<!-- /sell popup -->

<!-- ad details popup -->
<div id="adDetailsPopup">
    <div id="adDetailsPopupContainer">
        <div class="closeAdDetailsPopupDiv">
            <span id="closeAdDetailsPopup">&times;</span>
        </div>
        <div class="left">
            <div class="inLeft" id="AdDescAndImage">
                <h2 id="showAdDescriptionHeading"></h2>
                <div id="showAdImage"></div>
                <div class="showAdDescription">
                    <p id="showAdDescriptionDesc"></p>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="inRight">
                <div id="price"></div>
                <div class="sellerInfo">
                    <h2>Seller Info</h2>
                    <div id="sellerName"></div>
                    <div id="sellerPhone"></div>
                    <div class="chatWithSeller">
                        <button id="chatWithSellerBtn">Chat with seller</button>
                    </div>
                </div>
                <div id="deleteAdBtn">Delete Ad</div>
            </div>
        </div>
    </div>
</div>
<!-- /ad details popup -->

<div id="main">
    <!-- header -->
   @include('frontend.includes.categories')
    <!-- /header -->

    <!-- banner -->
    <div class="mainBanner" id="mainBanner">
        <img src="./images/1.jpg " alt="banner-image" id="mainBannerImg">
    </div>
    <!-- /banner -->
    <!-- popular categories -->
    @include('frontend.includes.categoriesdown')
    <!-- /popular categories -->

    <!-- top picks for you -->
    <!-- top picks for you -->
    <div class="topPicks">
        <div class="container" id="topPicksContainer">
            <div class="heading">
                <h2 id="categoryHeading">Recently added</h2>
                <hr>
            </div>
            <div class="picks" id="picks">


            </div>
        </div>
    </div>
    <!-- /top picks for you -->

    <!-- footer -->
    <footer>
        <div class="top">
            <div class="container">

                <div class="oneFifth">
                    <h3>About us</h3>
                    <a href="#">About SHB Group</a><br>
                    <a href="#">SHB Blog</a><br>
                    <a href="#">Contact us </a><br>
                    <a href="#">Business Packages</a>
                </div>
                <div class="oneFifth">
                    <h3>SHB</h3>
                    <a href="#">Help</a><br>
                    <a href="#">Sitemap</a><br>
                </div>
                <div class="oneFifth footerSocial">
                    <h3>Find us here</h3>
                    <a href="{{\Illuminate\Support\Facades\Session::get('site_setting') ?  \Illuminate\Support\Facades\Session::get('site_setting')->facebook: '' }}" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="{{\Illuminate\Support\Facades\Session::get('site_setting') ?  \Illuminate\Support\Facades\Session::get('site_setting')->youtube: '' }}" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="{{\Illuminate\Support\Facades\Session::get('site_setting') ?  \Illuminate\Support\Facades\Session::get('site_setting')->instagram : ''}}" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
{{--                <div class="left">--}}
{{--                        <span class="countries">--}}
{{--                            Change country:--}}
{{--                            <a href="#">South Africa</a>--}}
{{--                            <a href="#">India</a>--}}
{{--                            <a href="#">Kenya</a>--}}
{{--                            <a href="#">Ghana</a>--}}
{{--                        </span>--}}
{{--                </div>--}}
                <div class="right">
                        <span class="copyrights">
                            Copyrights &copy; {{ \Illuminate\Support\Facades\Session::get('site_setting') ?  \Illuminate\Support\Facades\Session::get('site_setting')->copyright :'' }}
                        </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
</div>


<!-- service worker -->
<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('./sw.js')
            .then(res => {
                console.log('SW registered');
            }).catch(err => {
            console.log('Error in SW registration', err);
        })
    } else {
        console.log('Browser does not support SW');
    }
</script>
<!-- js -->
<script src="{{asset('js/frontend.js')}}"></script>
</body>

</html>
