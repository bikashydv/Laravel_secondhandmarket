<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<div class="topPicks">
    <div class="container" id="topPicksContainer">
        <div class="heading">
            <h2 id="categoryHeading">Recently added</h2>
            <hr>
        </div>
       @forelse( $products as $product )
            <div class="card" style="width:400px">
                <img class="card-img-top" src="https://www.publicdomainpictures.net/pictures/320000/velka/background-image.png" alt="Card image" style="width:100%">
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

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<script>
    $('.product').click(function () {
        $('#exampleModalCenter').modal('toggle');
    })
</script>
