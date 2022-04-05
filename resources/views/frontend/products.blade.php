
<div class="topPicks">
    <div class="container" id="topPicksContainer">
        <div class="heading">
            <h2 id="categoryHeading">Recently added</h2>
            <hr>
        </div>
        @forelse( $products as $product )
            <div class="card" style="width:400px">
                <img class="card-img-top"
                     src="{{ $product ? $product->image :'' }}"
                     alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">{{ $product->name ?? '' }}</h4>
                    <p class="card-text">{{ $product->description ? $product->description->description :'' }}</p>
                    <a href="#" class="btn btn-primary product" data-id="{{ $product->id }}">View Details</a>
                </div>
            </div>
        @empty

        @endforelse
    </div>
</div>

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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">AddToCart</button>
                <a href="{{ route('product.buy') }}" class="btn btn-primary">$Buy</a>

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

               $('#name').text(msg.name);
               $('#price').text(msg.price);
               $('#author').text(msg.author);
               $('#publish_on').text(msg.publish_on);
            // window.$('#exampleModalCenter').modal();
            $('#exampleModalCenter').modal('show');
            });
    })
</script>

