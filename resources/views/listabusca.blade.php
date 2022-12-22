@include('layouts.header')

    <div class=show>
        <h2>Search for a Marvel character:</h2>
    </div>
    <form action="{{route('search')}}" action="GET">
        <div class="input-group form-group" style="width: 80%;margin:0 auto;">
            <input type="text"
            name="name"
            class="form-control"
            style="width: 80%;"
            placeholder="Insert a character's name to search for it"
            value="<?= $_GET['name'] ?? '' ?>">

            <button class="input-group-append btn btn-danger btn-sm" type="submit" style="margin-left: 5ps">Search</button>
        </div>
        <br/><br/>
    </form>
    <div class="album py-5 bg-light">
        <div class="row">
            @foreach ($result as $r)
                <div class="card col-md-4">
                    <?= '<img src="'.$r->thumbnail->path.'.'.$r->thumbnail->extension.'" class="card-img-top"/>'; ?>
                    <br />
                    <h4>{{$r->name}}</h4>
                    <p>{{$r->description}}</p>
                    <a href="{{ route('character', $r->id)}}" class="btn btn-danger btn-sm">See more</a>
                </div>
            @endforeach
        </div>
        <br/><br/>
    </div>

    </body>


</html>
