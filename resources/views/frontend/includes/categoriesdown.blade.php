<div class="popularCategories" id="popularCategories">
    <div class="container">
        <div class="heading">
            <h2>Popular Categories</h2>
            <hr>
            <p>Browse through some of our most popular categories.</p>
        </div>
        <div class="categories">
           @forelse($categories as $category)
                <div class="oneThird">
                    <div class="top">
                        <a href="javascript:void(0)" onclick="filter('Mobiles')"><i class="{{ $category ? $category->icon :'' }}"></i>
                            &nbsp; {{ $category ? $category->name :'' }}</a>
                    </div>
                </div>
            @empty

            @endforelse


{{--                <div class="bottom">--}}
{{--                    <a href="javascript:void(0)">Tablets</a>--}}
{{--                    <a href="javascript:void(0)">Accessories</a>--}}
{{--                    <a href="javascript:void(0)">Mobile Phones</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="oneThird">--}}
{{--                <div class="top">--}}
{{--                    <a href="javascript:void(0)" onclick="filter('Vehicles')"><i class="fas fa-car"></i> &nbsp;--}}
{{--                        Vehicles</a>--}}
{{--                </div>--}}
{{--                <div class="bottom">--}}
{{--                    <a href="javascript:void(0)">Cars</a>--}}
{{--                    <a href="javascript:void(0)">Buses</a>--}}
{{--                    <a href="javascript:void(0)">Spare parts</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="oneThird">--}}
{{--                <div class="top">--}}
{{--                    <a href="javascript:void(0)" onclick="filter('Electronics')"><i class="fas fa-tv"></i>--}}
{{--                        &nbsp; Electronics</a>--}}
{{--                </div>--}}
{{--                <div class="bottom">--}}
{{--                    <a href="javascript:void(0)">Cars</a>--}}
{{--                    <a href="javascript:void(0)">Buses</a>--}}
{{--                    <a href="javascript:void(0)">Spare parts</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="oneThird">--}}
{{--                <div class="top">--}}
{{--                    <a href="javascript:void(0)" onclick="filter('Bikes')"><i class="fas fa-bicycle"></i> &nbsp;--}}
{{--                        Bikes</a>--}}
{{--                </div>--}}
{{--                <div class="bottom">--}}
{{--                    <a href="javascript:void(0)">Cars</a>--}}
{{--                    <a href="javascript:void(0)">Buses</a>--}}
{{--                    <a href="javascript:void(0)">Spare parts</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="oneThird">--}}
{{--                <div class="top">--}}
{{--                    <a href="javascript:void(0)" onclick="filter('Services')"><i class="fas fa-wrench"></i>--}}
{{--                        &nbsp; Services</a>--}}
{{--                </div>--}}
{{--                <div class="bottom">--}}
{{--                    <a href="javascript:void(0)">Cars</a>--}}
{{--                    <a href="javascript:void(0)">Buses</a>--}}
{{--                    <a href="javascript:void(0)">Spare parts</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="oneThird">--}}
{{--                <div class="top">--}}
{{--                    <a href="javascript:void(0)" onclick="filter('Furniture')"><i class="fas fa-bed"></i> &nbsp;--}}
{{--                        Furniture</a>--}}
{{--                </div>--}}
{{--                <div class="bottom">--}}
{{--                    <a href="javascript:void(0)">Cars</a>--}}
{{--                    <a href="javascript:void(0)">Buses</a>--}}
{{--                    <a href="javascript:void(0)">Spare parts</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
