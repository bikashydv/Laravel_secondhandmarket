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
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        @empty

        @endforelse
    </div>
</div>
