<div class="col-xl-3 col-md-6">
    <div class="card mb-4">

        <div class="card-header">
            <p> {{$Gm->Name}}</p>
        </div>

        <div class="card-body">
            <img class="card-img-top" src="{{$Gm->img}}" alt="Card image">
        </div>

        <div>
            <a class="small stretched-link" href="{{route('details', $Gm->id)}}"></a>
        </div>
        
    </div>
</div>