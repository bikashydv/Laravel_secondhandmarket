<div class="topPicks">
    <div class="container" id="topPicksContainer">
        <div class="heading">
            <h2 id="categoryHeading">Recently added</h2>
            <hr>
        </div>

        <style>
            * {
                box-sizing: border-box;
            }

            /* Create three equal columns that floats next to each other */
            .column {
                float: left;
                width: 33.33%;
                display: none; /* Hide all elements by default */


            }

             /*The "show" class is added to the filtered elements */
            .show {
                display: block;

            }

            .content{
                background-color: powderblue;
                /*height: 300%;*/
                padding: 40px 250px 0 100px;
                margin-top: 20px;
                width: 150%;
                box-shadow: 0 5px 8px 0 rgba(3, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                text-align: center;
                min-height: 300px;
            }


        </style>



    @forelse( $products as $product )
            <!-- Portfolio Gallery Grid -->

                <div class="column nature">
                    <div class="content">
                        <img src="{{ $product ? $product->image :'' }}" alt="Mountains" style="width:100%">

                        <h4 class="card-title">{{ $product->name ?? '' }}</h4>
                        <p class="card-text">{{ $product->description ? $product->description->description :'' }}</p>
                        <a href="#" class="btn btn-primary product" data-id="{{ $product->id }}">View Details</a>
                    </div>
                </div>

    @empty

            @endforelse
    </div>
</div>


{{--                @forelse( $products as $product )--}}
{{--            <div class="product-area pt-60 pb-50">--}}
{{--                <div class="container">--}}
{{--            <div class="card" style="width:400px">--}}
{{--                <img class="card-img-top"--}}
{{--                     src="{{ $product ? $product->image :'' }}"--}}
{{--                     alt="Card image" style="width:100%">--}}
{{--                <div class="card-body">--}}
{{--                    <h4 class="card-title">{{ $product->name ?? '' }}</h4>--}}
{{--                    <p class="card-text">{{ $product->description ? $product->description->description :'' }}</p>--}}
{{--                    <a href="#" class="btn btn-primary product" data-id="{{ $product->id }}">View Details</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @empty--}}

{{--        @endforelse--}}
{{--    </div>--}}
{{--</div>--}}

<!-- Modal -->
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>

                            <th>Name</th>
                            <th>Price</th>
                            <th>Author</th>
                            <th>Publish date</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td id="name"></td>
                            <td id="price"></td>
                            <td id="author"></td>
                            <td id="publish_on"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                <a href="#" class="btn btn-primary" id="buy_anchor" target="_blank">$Buy</a>
{{--                <input type="hidden" name="product_id" value="" id="product_id">--}}
            </div>
        </div>
    </div>
</div>



<script>

    $('.product').click(function () {
        var prd_id = $(this).data('id');
        if (prd_id == '' || typeof prd_id == "undefined") {
            alert('something went wrong')
            return false;
        }
        $.ajax({
            method: "POST",
            url: "{{ route('product.info') }}",
            data: {id: prd_id,_token:"{{csrf_token()}}"}
        }).done(function (msg) {
            console.log(msg);
            $('#product_id').val(prd_id);
               $('#name').text(msg.name);
               $('#price').text(msg.price);
               $('#author').text(msg.author);
               $('#publish_on').text(msg.publish_on);
               var buy_url = "{{ route('product.buy', ':id') }}";
               buy_url = buy_url.replace(':id', prd_id);
            $("#buy_anchor").attr("href", buy_url)
               console.log(buy_url);
            // window.$('#exampleModalCenter').modal();
            $('#exampleModalCenter').modal('show');
            });
    })

/////////////////////////////////////////////////


    filterSelection("all")
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }


    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }


</script>

